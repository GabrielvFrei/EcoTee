<?php
    session_start();
    require('connect.php');
    @$id = $_SESSION['cod'];
    $users = "SELECT * FROM clientes WHERE `cod` = '$id'";
    $user = "SELECT `nome` FROM clientes WHERE `cod` = '$id'";
    $query = mysqli_query($con, $user);
    $queryFetch = mysqli_fetch_assoc($query);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_header.css">
</head>
<body>
    <header> 
        <div class="menu-content">
            <a href="index_home.php"><h1 class="logo">EcoTee</h1></a>
            <nav class="header-menu">
                <ul class="list-itens">
                    <a href="produtos.php"><li>PRODUTOS</li></a>
                    <li>CONTATE-NOS</li>
                </ul>
            </nav>
            <?php
            if ($id < 1) {
                echo '<a href="login.php" id"btns_header"><button id="btn_login">Login</button></a>';
            }if($id == 34){
                echo '<a href="cadastrarProduto.php" id="btns_header">cadastrar produtos</a>';
                echo '<a href="sair.act.php" id="bttns_header" >sair</a>';
            }if($id > 1 && $id != 34){
                echo '<a href="minhaConta.php" id="btns_header" >MINHA CONTA</a>';
                echo '<a href="sair.act.php" id="bttns_header" >sair</a>';
            };
            ?>
            <img src="icons/bagIcon.png" alt="bag" srcset="" id="bag_header">
        </div>
    </header>
</body>
</html>