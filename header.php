<?php
    session_start();
    require('connect.php');
    @$id = $_SESSION['cod'];
    $users = "SELECT * FROM clientes WHERE `cod` = '$id'";
    $user = "SELECT `nome` FROM clientes WHERE `cod` = '$id'";
    $query = mysqli_query($con, $user);
    $queryFetch = mysqli_fetch_assoc($query);
    ?>;
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
                    <li>MASCULINO</li>
                    <li>FEMININO</li>
                    <li>INFANTIL</li>
                </ul>
            </nav>
            <?php
            if ($id < 1) {
            echo '<a href="login.php"><button id="btn_login">Login</button></a>';
            }else{
            echo '<a href="#">MINHA CONTA</a>';
            echo '<a href="sair.act.php">sair</a>';
            };
            ?>
            <img src="icons/bagIcon.png" alt="bag" srcset="" id="bag_header">
        </div>
    </header>
</body>
</html>