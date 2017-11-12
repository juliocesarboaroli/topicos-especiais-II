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
    <link rel="stylesheet" href="../../../css/main.css">
</head>

<body>
    <div class="content">
        <form action="../../../controllers/noticias/controller_noticias.php" method="post">
            <input type="hidden" name="codigo" id="codigo">
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" class="field-full-width"/>
            <label for="descricao">Descrição</label>
            <input type="text" id="descricao" name="descricao" class="field-full-width"/>
            <label for="dataPublicacao">Data de publicação</label>
            <input type="date" id="data" name="data" class="field-full-width"/>
            <input type="submit" value="Gravar" class="btn btn-green btn-full-width"/>
        </form>
    </div>
</body>
</html>