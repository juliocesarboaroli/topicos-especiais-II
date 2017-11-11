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
        <h1>Acessórios</h1>
        <a href="formulario.php" class="btn btn-green btn-full-width">Adicionar</a>
        <table class="list-table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço (R$)</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        include($_SERVER["DOCUMENT_ROOT"]."/topicos/controllers/acessorios/controller_acessorios.php");
                        $acessorios = new Acessorios();
                        $acessorios->ListarInformacoesTextoAcessorios();
                    ?>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>