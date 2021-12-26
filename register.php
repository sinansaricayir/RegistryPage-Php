<?php
    require './auth.php';
    if(isset($_POST["submit"])){
        $register = Auth::register($_POST["user_name"], $_POST["name"], $_POST["surname"], $_POST["email"], $_POST["password"]);
        if(isset($register)){
            header("Location: login.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" />
    <title>Kayıt Ol</title>
</head>
<body>
    <div class="auth">
        <form action="" method="post">
        <h1>Kayıt Ol</h1>
            <div class="auth-form">
                <label for="user_name">Kulanıcı Adı</label>
                <input type="text" name="user_name" id="user_name" placeholder="Kulanıcı Adı" />
            </div>
            <div class="auth-form">
                <label for="name"> İsim</label>
                <input type="text" name="name" id="name" placeholder="İsim" required />
            </div>
            <div class="auth-form">
                <label for="surname">Soyisim</label>
                <input type="text" name="surname" id="surname" placeholder="Soyisim" required />
            </div>
            <div class="auth-form">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="E-mail" required />
            </div>
            <div class="auth-form">
                <label for="password">Şifre</label>
                <input type="password" name="password" id="password" placeholder="Şifre" required />
            </div>
            <button name="submit" class="auth-btn">Kayıt Ol</button>
        </form>
    </div>
</body>

</html>