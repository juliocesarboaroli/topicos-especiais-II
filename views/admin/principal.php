<?php
   include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/session/session.php");
   $session = new Session;
   $session->VerificarSessao();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Área do administrador - HESS</title>
    <link rel="stylesheet" href="../../css/main.css">
</head>

<body>
    <div class="content">
        <h1>O que você deseja ver?</h1>
        <a href="jogos/listagem.php" class="no-a-style admin-option">
            <div>
                <span>JOGOS</span>
            </div>
        </a>
        <a href="acessorios/listagem.php" class="no-a-style admin-option">
            <div>
                <span>ACESSÓRIOS</span>
            </div>
        </a>
        <a href="contatos/listagem.php" class="no-a-style admin-option">
            <div>
                <span>CONTATOS</span>
            </div>
        </a>
        <a href="noticias/listagem.php" class="no-a-style admin-option">
            <div>
                <span>NOTÍCIAS</span>
            </div>
        </a>
        <a href="compras/listagem.php" class="no-a-style admin-option">
            <div>
                <span>COMPRAS</span>
            </div>
        </a>
        <a href="usuarios/listagem.php" class="no-a-style admin-option">
            <div>
                <span>USUÁRIOS</span>
            </div>
        </a>
    </div>
</body>
</html>