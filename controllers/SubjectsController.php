<?php
require_once "models/Subject.php";
require_once "validator.php";

class SubjectsController
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
        $subjects = Subject::all();
        view('subjects/index', ['subjects' => $subjects]);
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
        view('subjects/create');
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
        $subject_name = $_POST['subject_name'] ?? '';
        $description = $_POST['description'] ?? '';

        if (Validator::required($subject_name)) {
            $errors['subject_name'] = "Subject name is required";
        }
        if (Validator::required($description)) {
            $errors['description'] = "Description is required";
        }

        if (empty($errors)) {
            $result = Subject::create([
                'subject_name' => $subject_name,
                'description' => $description,
            ]);

            if ($result === false) {
                $errors['database'] = "Failed to save subject";
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
                    'subject' => [
                        'subject_name' => $subject_name,
                        'description' => $description
                    ]
                ]);
            } else {
                echo json_encode(['success' => false, 'errors' => $errors]);
            }
            exit;
        } else {
            if (empty($errors)) {
                header('Location: /subjects');
                exit;
            } else {
                view('subjects/create', ['errors' => $errors]);
            }
        }
    }
}