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
        <h1>Compras</h1>
        <table class="list-table">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Valor</th>
                    <th>Quantidade</th>
                    <th>Plataforma</th>
                </tr>
            </thead>
            <tbody>
               <?php
                    include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/compra/compra.php");
                    $compra = new Compras;
                    $compra->ListarCompras();
               ?>
            </tbody>
        </table>
    </div>
</body>
</html>