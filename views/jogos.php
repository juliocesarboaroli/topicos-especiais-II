<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jogos - HESS</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div class="content">
        <ul class="menu">
            <li><a href="../index.php">HESS STORE</a></li>
            <li><a href="jogos.php">Jogos</a></li>
            <li><a href="">Acessórios</a></li>
            <li><a href="">Formas de pagamento</a></li>
            <li><a href="">Contato</a></li>
            <li><a href="">Carrinho</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
        <div class="cards">
            <?php
                include("../controllers/jogos/controller_jogos.php");
                $jogos = new Jogos();
                $jogos->ListarJogos();
            ?>
        </div>
            <form action="../controllers/jogos/controller_jogos.php" method="post" id="upload" name="upload" enctype="multipart/form-data">
                <input id="titulo" name="titulo" />
                <input id="preco" name="preco" />
                <input type="file" id="imagem" name="imagem" />
                <input type="submit" value="submitar" />
            </form>
        <div>
        </div>
    </div>
</body>
</html>