<?php
session_start();

require("../php/connect.php");

$sql="SELECT * FROM tovars";

$result = mysqli_query($conn, $sql);


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
                    echo "<a href='profile.php'>Профиль</a>";
                }else{
                    echo "<a href='login.php'>Вход</a>";
                }
                ?>
                
            </nav>
        </header>
        <div class="slogn">
            <h1>Товары</h1>
            <div class="katalog">
                <?php
                
                while($row=mysqli_fetch_array($result)){
                     echo "<div class='tovar'>
                                <img src='../image/tovars/".$row['img']."'>
                                <h1>".$row['name']."</h1>
                                <p>".$row['price']." р.</p>";
                                if(isset($_SESSION['id'])){
                                    echo "<input type='button' value='В корзину'>";
                                }
                            echo "</div>";
                }
                
                ?>
                
            </div>
        </div>
    </div>
</body>
</html>