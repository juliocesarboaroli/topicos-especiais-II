<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notícias - HESS</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div class="content">
        <ul class="menu">
            <li><a href="../index.php">HESS STORE</a></li>
            <li><a href="jogos.php">Jogos</a></li>
            <li><a href="acessorios.php">Acessórios</a></li>
            <li><a href="contato.php">Contato</a></li>
            <li><a href="noticias.php">Notícias</a></li>
            <li><a href="login.php">Área do administrador</a></li>
        </ul>
        <div class="noticias">
            <?php
                include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/noticias/noticias.php");
                $noticias = new Noticias;
                $noticias->ListarNoticiasAreaUsuario();
            ?>
        </div>
    </div>
</body>
</html>