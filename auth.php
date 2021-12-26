<?php

class Auth
{
    public static function register($user_name, $name, $surname, $email, $password)
    {
        return Database::query("INSERT INTO users (user_name, name, surname, email, password)
        VALUES ('$user_name', '$name', '$surname', '$email', '" . password_hash($password, PASSWORD_DEFAULT) . "')");
    }
    public static function login($email, $password)
    {
        $isEmail = Database::query("SELECT * FROM users WHERE email = '$email' LIMIT 1");
        if ($isEmail->num_rows > 0) {
            while ($user = $isEmail->fetch_assoc()) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION['isLogin'] = $user["id"];
                    return true;
                } else {
                    echo 'Geçersiz parola.';
                    return false;
                    exit();
                }
            }
        }
    }
}
