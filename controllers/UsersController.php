<?php
require_once "models/Auth.php";
require_once "validator.php";

class UsersController
{
    public function index()
    {
        if (!Validator::Role('Teacher') && !Validator::Role('Admin')) {
            header('Location: /');
            exit;
        }
        $students = Auth::getStudents();
        view('users/index', ['students' => $students]);
    }

    public function create()
    {
        if (!Validator::Role('Teacher') && !Validator::Role('Admin')) {
            header('Location: /');
            exit;
        }
        view('users/create');
    }

    public function store()
    {
        if (!Validator::Role('Teacher') && !Validator::Role('Admin')) {
            header('Location: /');
            exit;
        }

        $errors = [];
        $first_name = $_POST['first_name'] ?? '';
        $last_name = $_POST['last_name'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        if (Validator::required($first_name))
            $errors['first_name'] = "First name is required";
        if (Validator::required($last_name))
            $errors['last_name'] = "Last name is required";
        if (!Validator::email($email))
            $errors['email'] = "Valid email is required";
        if (Validator::required($password))
            $errors['password'] = "Password is required";

        if (empty($errors)) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            Auth::create([
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'role' => 'Student',
                'password' => $hashedPassword
            ]);
            header('Location: /students');
        } else {
            view('users/create', ['errors' => $errors, 'first_name' => $first_name, 'last_name' => $last_name, 'email' => $email]);
        }
    }

    public function profile()
    {
        if (!Validator::Role()) {
            header('Location: /login');
            exit;
        }
        $user = Auth::find($_SESSION['user_id']);
        view('users/profile', ['user' => $user]);
    }

    public function uploadAvatar()
    {
        if (!Validator::Role()) {
            header('Location: /login');
            exit;
        }
        if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] == 0) {
            $upload_dir = 'uploads/avatars/';
            if (!file_exists($upload_dir))
                mkdir($upload_dir, 0777, true);
            $file_name = uniqid() . '_' . $_FILES['avatar']['name'];
            move_uploaded_file($_FILES['avatar']['tmp_name'], $upload_dir . $file_name);

            self::$db = new Database();
            self::$db->query(
                "UPDATE users SET avatar = :avatar WHERE id = :id",
                [':avatar' => $file_name, ':id' => $_SESSION['user_id']]
            );
        }
        header('Location: /profile');
    }

    public function storeStudent()
    {
        if (!isset($_SESSION['logged_in'])) {
            header('Location: /login');
            exit;
        }
        if (!Validator::Role('Teacher') && !Validator::Role('Admin')) {
            header('Location: /');
            exit;
        }

        $errors = [];
        $student_id = $_POST['student_id'] ?? '';
        $subject_id = $_POST['subject_id'] ?? '';
        $grade = $_POST['grade'] ?? '';

        if (Validator::required($student_id))
            $errors['student_id'] = "Student is required";
        if (Validator::required($subject_id))
            $errors['subject_id'] = "Subject is required";
        if (Validator::required($grade))
            $errors['grade'] = "Grade is required";
        if (!is_numeric($grade) || $grade < 0 || $grade > 100)
            $errors['grade'] = "Grade must be a number between 0 and 100";

        if (empty($errors)) {
            // Check student exists

            $student = Auth::getStudentById($student_id);

            if (!$student || !isset($student['first_name'], $student['last_name'])) {
                $errors['student'] = "Student not found";
            }

            // Check subject exists
            $subject = Subject::find($subject_id);
            if (!$subject || !isset($subject['subject_name'])) {
                $errors['subject'] = "Subject not found";
            }

            if (empty($errors)) {
                $result = Grade::create([
                    'student_id' => $student_id,
                    'subject_id' => $subject_id,
                    'grade' => $grade
                ]);

                if ($result === false) {
                    $errors['database'] = "Failed to save grade";
                }
            }
        }

        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
            header('Content-Type: application/json');
            if (empty($errors)) {
                echo json_encode([
                    'success' => true,
                    'grade' => [
                        'student_name' => htmlspecialchars($student['first_name'] . ' ' . $student['last_name']),
                        'subject_name' => htmlspecialchars($subject['subject_name']),
                        'grade' => htmlspecialchars($grade),
                        'created_at' => date('Y-m-d H:i:s')
                    ]
                ]);
            } else {
                echo json_encode(['success' => false, 'errors' => $errors]);
            }
            exit;
        } else {
            if (empty($errors)) {
                header('Location: /grades');
                exit;
            } else {
                $students = Auth::getStudents();
                $subjects = Subject::all();
                view('grades/create', ['errors' => $errors, 'students' => $students, 'subjects' => $subjects]);
            }
        }
    }
}