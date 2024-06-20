<?php 
    include("header.php");
    require("connect.php");
    @$id = $_SESSION['cod'];

    $produtos = mysqli_query($con,"SELECT * FROM `tb_produtos`");
    echo "<div class='super-container'>";
    while($produto = mysqli_fetch_assoc($produtos)){
        echo "<div id='card'>";
            echo "<img id='img_produto' src=$produto[img_produto] alt='' srcset=''>";
            echo "<h1 id='nome'>$produto[nome]</h1>";
            echo "<h2 id='preço'>R$$produto[preco]</h2>";
            echo "<button id='btn_carrinho' type='button'><img src='imgs_index_produto/sacola.png' alt='' srcset=''></button>";
            if ($id == 34) {
            echo "<form method='post' action='excluir_produto.act.php'>";
            echo "<input name='cod_produto' value='$produto[cod_produto]' type='hidden'>";
            echo "<button id='excluir_img' type='submit'><img src='imgs_index_produto/excluir.png' alt='' srcset=''></button>";  
            echo "</form>";
            }    
        echo "</div>";
    };
    echo "</div>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_produtos.css">
</head>
<body>
</body>
</html>