<?php
session_start();
require('connect.php');

$login = $_POST["login"];
$password = $_POST["password"];

$sql="SELECT * FROM users WHERE Login = '$login' AND Password = '$password'";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);

if($row['Login'] == $login && $row['Password'] == $password){
    $_SESSION['id']=$row['id'];
    echo "Авторизация прошла успешно";
    header("Location: ../index.php");
}else{
    echo "Что-то не так";
}

?>