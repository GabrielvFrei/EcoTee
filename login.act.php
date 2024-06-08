<?php
require('connect.php');
session_start();
if (isset($_POST['nome']) || isset($_POST['senha'])) {
    if(strlen($_POST['nome']) < 1 || strlen($_POST['senha']) < 1) {
        echo "Preencha seu email ou senha";
    
    echo "daora";
}else {
    $nome = $con->real_escape_string($_POST['nome']);
    $senha = $con->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM `clientes` WHERE `nome` = '$nome' AND `senha` = '$senha'";
    $sql_query = $con->query($sql_code) or die ("falha" . $con->error);

    $usuario = $sql_query->fetch_assoc();
    if ($usuario == 1) {
        
        
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['cod'] = $usuario['cod'];
        $_SESSION['senha'] = $usuario['senha'];
        // header("Location: index_home.php");
    }else {
        echo "Falha ao logar!";
    }
    // header("Location: index_home.php");
}}