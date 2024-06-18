<?php 
require('connect.php');
$id = $_GET['id'];

$stmt = $con->prepare("DELETE FROM `clientes` WHERE `clientes`.`cod` = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header('Location:login.php');
    session_destroy();
    mysqli_query($con, "UPDATE `clientes` SET 
    `cod` = '$id'");
} else {
    echo "Erro ao deletar <a href='minhaConta.php'><button>voltar</button></a>" . $stmt->error;
}

$stmt->close();
var_dump($_GET);
var_dump($id);
?>
