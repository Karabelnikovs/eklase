<?php
require_once "Database.php";

class Student
{
    private static $db;

    public static function all()
    {
        self::$db = new Database();
        $query = "SELECT * FROM users WHERE role = 'Student'";
        return self::$db->query($query)->fetchAll();
    }

    public static function find($id)
    {
        self::$db = new Database();
        $query = "SELECT * FROM users WHERE id = :id AND role = 'Student'";
        return self::$db->query($query, [':id' => $id])->fetch();
    }

    public static function create($data)
    {
        self::$db = new Database();
        $data['role'] = 'Student';
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $query = "INSERT INTO users (email, first_name, last_name, password, role) 
                  VALUES (:email, :first_name, :last_name, :password, :role)";
        return self::$db->query($query, [
            ':email' => $data['email'],
            ':first_name' => $data['first_name'],
            ':last_name' => $data['last_name'],
            ':password' => $data['password'],
            ':role' => $data['role']
        ]) !== false;
    }
}