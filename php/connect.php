<?php

$hostname = 'localhost';
$usr = 'root';
$pass='';
$db='GlassMaster';


$conn = mysqli_connect($hostname,$usr,$pass,$db);

if($conn){
    // echo 'Подключение успешно';
}else{
    echo 'Ошибка';
}

?>