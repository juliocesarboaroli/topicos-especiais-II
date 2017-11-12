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
        <form method="post" action="../../../controllers/contato/controller_contato.php">
            <?php
                if (isset($_GET['id']))
                {
                    print "<input type='hidden' id='id' name='id' value='".$_GET['id']."' />";
                }
            ?>
            <label for="mensagem">Mensagem</label>
            <input type="text" id="resposta" name="resposta" class="field-full-width"/>
            <input type="submit" value="Responder" class="btn btn-green btn-full-width"/>
        </form>
    </div>
</body>
</html>