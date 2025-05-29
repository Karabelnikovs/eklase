<?php
require_once "Database.php";

class Subject
{
    private static $db;

    public static function all()
    {
        self::$db = new Database();
        $query = "SELECT * FROM subjects";
        return self::$db->query($query)->fetchAll();
    }

    public static function find($id)
    {
        self::$db = new Database();
        $query = "SELECT * FROM subjects WHERE id = :id";
        return self::$db->query($query, [':id' => $id])->fetch();
    }

    public static function create($data)
    {
        self::$db = new Database();

        $query = "INSERT INTO subjects (subject_name, description) 
                  VALUES (:subject_name, :description)";
        return self::$db->query($query, [
            ':subject_name' => $data['subject_name'],
            ':description' => $data['description']
        ]) !== false;
    }
}