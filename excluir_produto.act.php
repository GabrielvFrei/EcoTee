<?php 
var_dump($_POST);

include('connect.php');

if (isset($_POST['cod_produto'])) {
    $cod_produto = $_POST['cod_produto'];

    $delete = "DELETE FROM tb_produtos WHERE `cod_produto` = ?";
    
    if ($stmt = mysqli_prepare($con, $delete)) {
        mysqli_stmt_bind_param($stmt, 's', $cod_produto);

        if (mysqli_stmt_execute($stmt)) {
            header("Location:produtos.php");
        } else {
            echo "Erro ao deletar o produto: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Erro" . mysqli_error($con);
    }
} else {
    echo "Código não fornecido.";
}

mysqli_close($con);
?>
