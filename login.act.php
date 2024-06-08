<?php
require('connect.php');
session_start();
if (isset($_POST['nome']) || isset($_POST['senha'])) {
    if(strlen($_POST['nome']) < 1 || strlen($_POST['senha']) < 1) {
        echo "Preencha seu email ou senha";
<<<<<<< HEAD
=======
    
    echo "daora";
>>>>>>> c445cc86ad851e5b656e78706e12c37bbc64341c
}else {
    $nome = $con->real_escape_string($_POST['nome']);
    $senha = $con->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM `clientes` WHERE `nome` = '$nome' AND `senha` = '$senha'";
    $sql_query = $con->query($sql_code) or die ("falha" . $con->error);

    $usuario = $sql_query->fetch_assoc();
<<<<<<< HEAD
    if ($sql_query->num_rows > 0){
=======
    if ($usuario == 1) {
        
        
>>>>>>> c445cc86ad851e5b656e78706e12c37bbc64341c
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['cod'] = $usuario['cod'];
        $_SESSION['senha'] = $usuario['senha'];
<<<<<<< HEAD
        header("Location: index_home.php");
=======
        // header("Location: index_home.php");
>>>>>>> c445cc86ad851e5b656e78706e12c37bbc64341c
    }else {
        echo "Falha ao logar!";
    }
    // header("Location: index_home.php");
}}