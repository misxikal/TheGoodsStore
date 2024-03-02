<?php
session_start();

if(isset($_POST['destr'])){
    session_destroy();
    header("Location: ../index.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlassMaster</title>
    <link rel="stylesheet" href="../style/main.css">
</head>
<body>
    <div class="backimg">
        <header>
            <div>
                <img src="../image/logo.svg" alt="">
            </div>
            <nav>
                <a href="../index.php">Главная</a>
                <a href="katalog.php">Каталог</a>
                <a href="">Заказ</a>
                <a href="">Контакты</a>
                <?php
                if(isset($_SESSION['id'])){
                    echo "<a href='profil.php'>Профиль</a>";
                }else{
                    echo "<a href='login.php'>Вход</a>";
                }
                ?>
                
            </nav>
        </header>
        <div class="slogn">
            <?php
            
            echo $_SESSION['id'];
            
            ?>
            <form action="" method="post">
                <input type="submit" name="destr" value="Выйти">
            </form>
        </div>
    </div>
    
    <content>
    
    </content>
    <footer>
    
    </footer>
</body>
</html>