<?php

require('connect.php');
extract($_POST);
if ($senha == $senhaconf && $senha != "") {
    mysqli_query($con, "UPDATE `clientes` SET 
    `nome` = '$nome',
    `email` = '$email',
    `senha` = '$senha',
    `senhaconf` = '$senhaconf'      
    WHERE `clientes`.`cod` = '$id'");
    header("location:minhaConta.php?codigo=$id");
}else{
    header("location:minhaConta.php?codigo=$id");
}
    