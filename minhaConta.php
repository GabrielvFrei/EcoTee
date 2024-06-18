<?php
    session_start();
    require('connect.php');
    @$id = $_SESSION['cod'];
    $user = "SELECT * FROM clientes WHERE `cod` = '$id'";
    $queryy = mysqli_query($con, $user);
    $queryFetchh = mysqli_fetch_assoc($queryy);
    @include('header.php');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_minhaConta.css">
    <script src="app.js"></script>
</head>
<body>
    <div class="super-container">
        <div class="left-container">
            <h1 id="my_account">minha conta</h1>
        </div>
        <div class="right-container">
        <form action="minhaConta.act.php" method="post">
            <input type="hidden" name="id" value="<?php echo $queryFetchh['cod']?>">
                <h1>alterar dados cadastrais</h1>
                <h2 id="inf">Nome</h2>
                <input placeholder="Nome de usuario" name="nome" id="user" value="<?php echo $queryFetchh['nome']?>" type="text">
                <h2 id="inf">Email</h2>
                <input placeholder="Email" name="email" id="email" value="<?php echo $queryFetchh['email']?>" type="email">
                <h2 id="inf">Senha</h2>
                <input placeholder="Senha" name="senha" id="password" value="<?php echo $queryFetchh['senha']?>" type="password">
                <h2 id="inf">Confirme sua senha</h2>
                <input placeholder="Confirmação de senha" name="senhaconf" id="passwordConf" value="<?php echo $queryFetchh['senhaconf']?>" type="password">
                <button type="submit" id="btn_register">Alterar</button>
                <a href="erase.act.php"><button id="btn_erase">excluir</button></a>
            </form>
        </div>
    </div>
</body>
</html>