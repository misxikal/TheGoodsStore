<?php

require('connect.php');

$name = $_POST["name"];
$email = $_POST["email"];
$number = $_POST["number"];
$login = $_POST["login"];
$password = $_POST["password"];

$sql="INSERT INTO users(Name, Email, Number, Login, Password) VALUES ('$name','$email','$number','$login','$password')";

$result = mysqli_query($conn,$sql);

if($result){
    echo "Регистрация прошла успешно";
    header("Location: ../page/login.php");
}else{
    echo "Что-то не так";
}

?>