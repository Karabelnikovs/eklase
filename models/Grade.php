<?php
require_once "Database.php";

class Grade
{
    private static $db;

    public static function getAllWithDetails($userId = null)
    {
        self::$db = new Database();
        $query = "
            SELECT g.*, u.first_name, u.last_name, s.subject_name
            FROM grades g
            JOIN users u ON g.student_id = u.id
            JOIN subjects s ON g.subject_id = s.id
        ";
        $params = [];
        if ($userId) {
            $query .= " WHERE g.student_id = :student_id";
            $params[':student_id'] = $userId;
        }
        return self::$db->query($query, $params)->fetchAll();
    }

    public static function create($data)
    {
        self::$db = new Database();
        $result = self::$db->query(
            "INSERT INTO grades (student_id, subject_id, grade, created_at) VALUES (:student_id, :subject_id, :grade, NOW())",
            [
                ':student_id' => $data['student_id'],
                ':subject_id' => $data['subject_id'],
                ':grade' => $data['grade']
            ]
        );
        return $result !== false;
    }
}