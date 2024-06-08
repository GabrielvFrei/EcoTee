<?php
    

            session_start();
            $id = $_SESSION['cod'];
            $users = "SELECT * FROM clientes WHERE `cod` = $id";
            echo $id;
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
            <h1 class="logo">EcoTee</h1>
            <nav class="header-menu">
                <ul class="list-itens">
                    <li>MASCULINO</li>
                    <li>FEMININO</li>
                    <li>INFANTIL</li>
                </ul>
            </nav>

            <img src="icons/bagIcon.png" alt="bag" srcset="" id="bag_header">
        </div>
    </header>
</body>
</html>