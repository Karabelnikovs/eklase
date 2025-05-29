<?php
require_once "models/Grade.php";
require_once "models/Auth.php";
require_once "models/Subject.php";
require_once "validator.php";
// ini_set('display_errors', 0);
// ini_set('log_errors', 1);
class GradesController
{
    public function index()
    {
        if (!isset($_SESSION['logged_in'])) {
            header('Location: /login');
            exit;
        }
        if (!Validator::Role('Teacher') && !Validator::Role('Admin')) {
            header('Location: /');
            exit;
        }
        $grades = Grade::getAllWithDetails();
        view('grades/index', ['grades' => $grades]);
    }

    public function create()
    {
        if (!isset($_SESSION['logged_in'])) {
            header('Location: /login');
            exit;
        }
        if (!Validator::Role('Teacher') && !Validator::Role('Admin')) {
            header('Location: /');
            exit;
        }
        $students = Auth::getStudents();
        $subjects = Subject::all();
        view('grades/create', ['students' => $students, 'subjects' => $subjects]);
    }

    public function store()
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
        file_put_contents('debug.log', "all good()\n", FILE_APPEND);

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
    public function studentGrades()
    {
        if (!isset($_SESSION['logged_in'])) {
            header('Location: /login');
            exit;
        }
        if (!Validator::Role('Student')) {
            header('Location: /');
            exit;
        }
        $grades = Grade::getAllWithDetails($_SESSION['user_id']);
        view('grades/student', ['grades' => $grades]);
    }
}