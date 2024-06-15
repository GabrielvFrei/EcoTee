<?php
require('connect.php');
session_start();
extract($_POST);

if ($senha == $senhaconf && $senha != "") {
    $hashpassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO `clientes` (`cod`, `nome`, `email`, `senha`, `senhaconf`) VALUES ('$cod', '$nome', '$email', '$senha', '$senhaconf')";

$sql_query = mysqli_query($con, $sql);
header('Location: login.php');

mysqli_close($con);
}else{
header('Location: register.php');
}
