<?php
require('connect.php');
session_start();
extract($_POST);

if (empty($nome) || empty($preco) || $_FILES['imagem']['error'] == UPLOAD_ERR_NO_FILE) {
    header("Location: produtos.php");
    session_abort();
    exit();
} else {
    $var_foto = $_FILES['imagem'];
    $path = "imgs_produtos/" . md5(time()) . ".jpg";
    
    if (move_uploaded_file($var_foto['tmp_name'], $path)) {
        $sql = "INSERT INTO `tb_produtos` (`cod_produto`, `nome`, `preco`, `img_produto`) VALUES (NULL, ?, ?, ?)";
        
        if ($stmt = mysqli_prepare($con, $sql)) {
            mysqli_stmt_bind_param($stmt, 'sss', $nome, $preco, $path);
            
            if (mysqli_stmt_execute($stmt)) {
                echo header("Location:produtos.php");
            } else {
                echo "Location:cadastrarProduto.php" . mysqli_stmt_error($stmt);
            }
            
            mysqli_stmt_close($stmt);
        } else {
            echo "Erro query " . mysqli_error($con);
        }
    } else {
        echo "Erro imagem.";
    }
}

mysqli_close($con);

var_dump($_POST);
var_dump($var_foto);
?>
