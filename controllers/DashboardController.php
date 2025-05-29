<?php
require_once "models/Auth.php";
require_once "validator.php";

class DashboardController
{
    public function index()
    {
        if (!isset($_SESSION['logged_in'])) {
            header('Location: /login');
            exit;
        }

        $role = $_SESSION['user_role'] ?? '';
        if ($role === 'Student') {
            header('Location: /my-grades');
            exit;
        }

        $userId = $_SESSION['user_id'] ?? null;
        if (!$userId) {
            header('Location: /login');
            exit;
        }

        $notifications = Auth::getNotifications($userId);
        view('dashboard/index', ['notifications' => $notifications]);
    }
}