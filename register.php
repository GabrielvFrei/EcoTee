<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_register.css">
</head>
<body>
    <form action="register.act.php" method="post">
        <div class="super-container">
            <div class="left-container">
                <img id="img-login" src="imgs_register/img_register.jpg" alt="" srcset="">
            </div>
            <div class="right-container">
                <div class="right-container">
                    <h1>login</h1>
                    <input placeholder="Nome de usuario" name="nome" id="user" type="text">
                    <input placeholder="Email" name="email" id="email" type="text">
                    <input placeholder="Senha" name="senha" id="password" type="password">
                    <input placeholder="Confirmação de senha" name="senhaconf" id="passwordConf" type="password">
                    <button type="submit" id="btn_register">Registro</button>
                </div>
                <div class="bottom-container">
                    <h1>Já possui uma conta?</h1>
                    <a href="login.html"><button id="btn-enter" type="button">Entrar</button></a>
                </div>
            </div>
        </div>
    </form>
</body>
</html>