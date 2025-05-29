<?php
require_once "models/Student.php";
require_once "validator.php";

class StudentsController
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
        $students = Student::all();
        view('students/index', ['students' => $students]);
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
        view('students/create');
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
        $email = $_POST['email'] ?? '';
        $first_name = $_POST['first_name'] ?? '';
        $last_name = $_POST['last_name'] ?? '';
        $password = $_POST['password'] ?? '';

        if (Validator::required($email)) {
            $errors['email'] = "Email is required";
        }
        if (Validator::required($first_name)) {
            $errors['first_name'] = "First name is required";
        }
        if (Validator::required($last_name)) {
            $errors['last_name'] = "Last name is required";
        }
        if (Validator::required($password)) {
            $errors['password'] = "Password is required";
        }

        if (empty($errors)) {
            $result = Student::create([
                'email' => $email,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'password' => $password,
            ]);

            if ($result === false) {
                $errors['database'] = "Failed to save student";
            }
        }

        if (
            isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest'
        ) {
            header('Content-Type: application/json');
            if (empty($errors)) {
                echo json_encode([
                    'success' => true,
                    'student' => [
                        'email' => htmlspecialchars($email),
                        'first_name' => htmlspecialchars($first_name),
                        'last_name' => htmlspecialchars($last_name),
                    ]
                ]);
            } else {
                echo json_encode(['success' => false, 'errors' => $errors]);
            }
            exit;
        } else {
            if (empty($errors)) {
                header('Location: /students');
                exit;
            } else {
                view('students/create', ['errors' => $errors]);
            }
        }
    }
}