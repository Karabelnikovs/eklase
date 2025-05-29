<?php
require_once "models/Model.php";

class Auth extends Model
{
    protected static function getTableName(): string
    {
        return "users";
    }

    public static function getStudents()
    {
        self::init();
        $sql = "SELECT * FROM " . static::getTableName() . " WHERE role = 'Student'";
        return self::$db->query($sql)->fetchAll();
    }

    public static function getNotifications($user_id)
    {
        self::init();
        $sql = "SELECT * FROM notifications WHERE user_id = :user_id ORDER BY created_at DESC";
        return self::$db->query($sql, [':user_id' => $user_id])->fetchAll();
    }

    public static function getStudentById($id)
    {
        self::init();
        $sql = "SELECT * FROM " . static::getTableName() . " WHERE id = :id";
        return self::$db->query($sql, [':id' => $id])->fetch();
    }
}