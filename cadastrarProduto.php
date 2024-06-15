<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastrarProduto.act.php" method="post" enctype="multipart/form-data">
        <input name="nome" id="nomeP" type="text" placeholder="NOME DO PRODUTO">
        <input name="preco" id="precoP" type="number" placeholder="PREÇO DO PRODUTO">
        <input name="imagem" id="imageP" type="file" placeholder="IMAGEM DO PRODUTO">
        <input id="register_produto" name type="submit" value="CRIAR">
    </form>
</body>
</html>