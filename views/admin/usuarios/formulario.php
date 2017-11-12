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
        <form action="../../../controllers/login/controller_login_base.php" method="post">
            <label for="usuario">Usuário</label>
            <input type="text" id="usuario" name="usuario" class="field-full-width"/>
            <label for="senha">Senha</label>
            <input type="text" id="senha" name="senha" class="field-full-width"/>
            <input type="submit" value="Gravar" class="btn btn-green btn-full-width"/>
        </form>
    </div>
</body>
</html>