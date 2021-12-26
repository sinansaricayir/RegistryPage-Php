<?php
require './db.php';
require './auth.php';
Database::serve();
if (isset($_POST["submit"])) {
    $login = Auth::login($_POST["email"], $_POST["password"]);
    if (isset($login)) {
         header("Location: index.php");
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
    <title>Oturum Aç</title>
</head>

<body>
    <div class="auth">
        <form action="" method="post">
            <h1>Oturum Aç</h1>
            <div class="auth-form">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="E-mail" required />
            </div>
            <div class="auth-form">
                <label for="password">Şifre</label>
                <input type="password" name="password" id="password" placeholder="Şifre" required />
            </div>
            <button name="submit" class="auth-btn">Oturum Aç</button>
        </form>
    </div>
</body>

</html>