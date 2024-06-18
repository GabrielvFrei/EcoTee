<?php 
    require('connect.php');
    require('minhaConta.php');
    $id = $queryFetchh['cod'];
    extract($_POST);
    mysqli_query($con, "DELETE FROM `clientes` WHERE `clientes`.`cod` = '$queryfetchh['codigo']'");
    var_dump($_POST);
    var_dump($id);
?>