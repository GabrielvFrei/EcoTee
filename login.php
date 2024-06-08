<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_login.css">
</head>
<body>
    <form action="login.act.php" method="post">
        <div class="super-container">
            <div class="left-container">
                <img id="img-login" src="img_login/img_login.jpg" alt="" srcset="">
            </div>
            <div class="right-container">
                <div class="right-container">
                    <h1>login</h1>
                    <input name="nome" placeholder="usuario" id="user" type="text">
                    <input name="senha" placeholder="senha" id="pass" type="password">
                    <button id="btn-enter" type="submit">Entrar</button>
                </div>
                <div class="bottom-container">
                    <h1>NÃo possui uma conta?</h1>
                    <a href="register.php"><button id="btn_register" type="button">Registro</button></a>
                </div>
            </div>
        </div>
    </form>
</body>
</html>