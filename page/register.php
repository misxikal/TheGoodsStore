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
        <form action="../php/reg.php" method="post">
            <h1>Регистрация</h1>
            <input type="text" name="name" placeholder="Имя" required>
            <input type="email" name="email" placeholder="Почта" required>
            <input type="text" name="number" placeholder="Номер телефона" required>
            <input type="text" name="login" placeholder="Логин" required>
            <input type="password" name="password" placeholder="Пароль" required> 
            <input type="submit" id="login" value="Зарегистрироваться">
            <a href="login.php">Войти</a>
        </form>
    </div>
</body>
</html>