<?php

class Database
{
    public static $query;

    public static function serve()
    {
        self::$query = new mysqli("localhost", "root", "", "web");
    }

    public static function query($sql)
    {
            return self::$query->query($sql);
    }

    public static function createTable($sql)
    {
        if (self::query("CREATE TABLE IF NOT EXISTS $sql")) {
            return true;
        } else {
            return false;
        }
    }
}

/*
$conn = new mysqli("localhost", "root", "", "web");
if ($conn->connect_error) {
    die("Bağlantı Sağlanamadı: " . $conn->connect_error);
}

if (!$conn->query('DESCRIBE `users`')) {
    $sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_name LONGTEXT NOT NULL,
    name LONGTEXT NOT NULL,
    surname LONGTEXT NOT NULL,
    email LONGTEXT NOT NULL,
    password LONGTEXT NOT NULL
)";
    $conn->query($sql);
}
$conn->close();
*/