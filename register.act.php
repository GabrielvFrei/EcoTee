<?php
require('connect.php');
session_start();
<<<<<<< HEAD
extract($_POST);

if ($senha == $senhaconf && $senha > 1) {
    $hashpassword = password_hash($password, PASSWORD_DEFAULT);
=======

extract($_POST);

$hashpassword = password_hash($password, PASSWORD_DEFAULT);
>>>>>>> c445cc86ad851e5b656e78706e12c37bbc64341c

$sql = "INSERT INTO `clientes` (`cod`, `nome`, `email`, `senha`, `senhaconf`) VALUES ('$cod', '$nome', '$email', '$senha', '$senhaconf')";

$sql_query = mysqli_query($con, $sql);
<<<<<<< HEAD
header('Location: login.php');

mysqli_close($con);
}else{
header('Location: register.php');
}
=======

header('Location: login.php');

mysqli_close($con);
>>>>>>> c445cc86ad851e5b656e78706e12c37bbc64341c
