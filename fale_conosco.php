<?php 
include('header.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_faleConosco.css">
</head>
<body>
    <form action="fale_conosco.act.php">
        <div class="super-super-container">
        <p id="ten">Como podemos te ajudar?</p>
            <div class="super-container">
                <div class="top-container">
                    <p id="ten">Como podemos te ajudar?</p>
                    <p id="line"></p>
                </div>
                <div class="bottom-container">
                    <h1>Informe o seu email</h1>
                    <input id="email" type="email">
                    <h1>qual o assunto </h1>
                    <textarea name="msg" id="" cols="55" rows="6"></textarea>
                    <button id="enviar" type="submit">ENVIAR</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>