<?php
session_start();
require './db.php';
Database::serve();
Database::createTable("users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user_name LONGTEXT NOT NULL,
        name LONGTEXT NOT NULL,
        surname LONGTEXT NOT NULL,
        email LONGTEXT NOT NULL,
        password LONGTEXT NOT NULL
    )");

if (isset($_SESSION['isLogin'])) {
    echo "Giriş Başarılı";
} else {
    include './register.php';
}
