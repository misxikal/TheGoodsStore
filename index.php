<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlassMaster</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <div class="backimg">
        <header>
            <div>
                <img src="image/logo.svg" alt="">
            </div>
            <nav>
                <a href="index.php">Главная</a>
                <a href="page/katalog.php">Каталог</a>
                <a href="">Заказ</a>
                <a href="">Контакты</a>
                <?php
                if(isset($_SESSION['id'])){
                    echo "<a href='page/profile.php'>Профиль</a>";
                }else{
                    echo "<a href='page/login.php'>Вход</a>";
                }
                ?>
                
            </nav>
        </header>
        <div class="slogn">
            <h1>Бла бла бла</h1>
        </div>
    </div>
    
    <content>
    
    </content>
    <footer>
    
    </footer>
</body>
</html>