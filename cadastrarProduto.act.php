<?php
require('connect.php');
session_start();
extract($_POST);
$var_foto = $_FILES['imagem'];
$path = "imgs_produtos/".md5(time()).".jpg";
move_uploaded_file($var_foto['tmp_name'], $path);

$sql = "INSERT INTO `tb_produtos` (`cod_produto`, `nome`, `preco`, `img_produto`) VALUES (NULL, '$nome', '$preco', '$path')";
$sqlQuery = mysqli_query($con, $sql);
var_dump($_POST);
var_dump($var_foto);