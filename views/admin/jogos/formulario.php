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
        <form action="../../../controllers/jogos/controller_jogos.php" method="post" id="upload-jogos" name="upload-jogos" enctype="multipart/form-data">
            <input type="hidden" name="codigo" id="codigo">
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" class="field-full-width"/>
            <label for="preco">Preço</label>
            <input type="text" id="preco" name="preco" class="field-full-width"/>
            <label for="imagem">Imagem</label>
            <input type="file" id="imagem" name="imagem" class="field-full-width"/>
            <input type="submit" value="Gravar" class="btn btn-green btn-full-width"/>
        </form>
    </div>
</body>
</html>