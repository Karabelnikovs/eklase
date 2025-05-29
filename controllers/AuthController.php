<?php

require "models/Auth.php";
// require "validator.php";

class AuthController
{



    public function login()
    {
        if (isset($_SESSION['logged_in'])) {
            header('Location: /');
            return;
        }

        // require "views/auth/login.view.php";
        view("auth/login", [
            'email' => $email ?? '',
            'error' => $error ?? []
        ]);
    }

    public function register()
    {
        if (isset($_SESSION['logged_in'])) {
            header('Location: /');
            return;
        }
        view("auth/register", [
            'email' => $email ?? '',
            'error' => $error ?? []
        ]);
        // require "views/auth/register.view.php";

    }

    public function logout()
    {

        // session_start();
        session_destroy();
        header('Location: /');
    }

    public function authenticate()
    {
        if (isset($_SESSION['logged_in'])) {
            header('Location: /');
            return;
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        $error = [];

        if (!Validator::email($email)) {
            $error["email"] = "Please enter a valid email address.";
        }

        if (Validator::required($password)) {
            $error["password"] = "Password is required.";
        }

        if (!empty($error)) {
            view("auth/login", ['email' => $email ?? '', 'error' => $error ?? []]);
            return;
        }

        if (Auth::login($email, $password)) {
            $user = Auth::getUser($email);
            if ($_SESSION == null) {
                session_start();
            }

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['first_name'] . ' ' . $user['last_name'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_role'] = $user['role'];
            $_SESSION['logged_in'] = true;
            header('Location: /');
            return;
        }

        $error["password"] = "Invalid email or password.";
        view("auth/login", ['email' => $email ?? '', 'error' => $error ?? []]);
    }

    public function registerUser()
    {
        if (isset($_SESSION['logged_in'])) {
            header('Location: /');
            return;
        }

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_confirmation = $_POST['password_confirmation'];

        $error = [];

        if (Validator::required($first_name)) {
            $error["first_name"] = "Name is required.";
        }
        if (Validator::required($last_name)) {
            $error["last_name"] = "Last Name is required.";
        }
        if (!Validator::strLengt($first_name, 3, 50)) {
            $error["first_name"] = "Name must be between 3 and 50 characters long.";
        }
        if (!Validator::strLengt($last_name, 3, 50)) {
            $error["last_name"] = "Last Name must be between 3 and 50 characters long.";
        }

        if (!Validator::passwordMatch($password, $password_confirmation)) {
            $error["password"] = "Passwords do not match.";
        }

        if (!Validator::passwordContains($password)) {
            $error["password"] = "Password must contain at least one number and one uppercase letter and one simbol.";
        }

        if (!Validator::passwordLength($password)) {
            $error["password"] = "Password must be at least 8 characters long.";
        }

        if (!Validator::email($email)) {
            $error["email"] = "Email is not valid.";
        }

        if (Auth::emailExists($email)) {
            $error["email"] = "This email is already registered. Please use a different email.";
        }




        if (empty($error)) {
            Auth::register($first_name, $last_name, $email, $password);
            header('Location: /login');
        } else {
            view("auth/register", [
                'email' => $email ?? '',
                'error' => $error ?? []
            ]);
        }

    }



}