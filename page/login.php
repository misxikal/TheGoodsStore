<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlassMaster</title>
    <link rel="stylesheet" href="../style/login.css">
</head>
<body>
    <div class="backimg">
        <form action="../php/log.php" method="post">
            <h1>Вход</h1>
            <input type="text" name="login" placeholder="Логин">
            <input type="password" name="password" placeholder="Пароль">
            <input type="submit" id="login" value="Войти">
            <a href="register.php">Зарегистрироваться</a>
        </form>
    </div>
</body>
</html>