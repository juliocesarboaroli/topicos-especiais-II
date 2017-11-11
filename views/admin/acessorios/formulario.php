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
        
            <?php
                if (isset($_GET['id']))
                {
                    $id = $_GET['id'];
                    include($_SERVER["DOCUMENT_ROOT"]."/topicos/controllers/acessorios/controller_acessorios.php");
                    $acessorios = new Acessorios();
                    $acessorios->BuscarDadosAcessorios($id);  
                }
                else
                {
                    print "<form action='../../../controllers/acessorios/controller_acessorios.php' method='post' id='upload-jogos' name='upload-jogos' enctype='multipart/form-data'>";
                        print "<label for='nome'>Nome</label>";
                        print "<input type='text' id='nome' name='nome' class='field-full-width' />";
                        print "<label for='preco'>Preço</label>";
                        print "<input type='text' id='preco' name='preco' class='field-full-width' />";
                        print "<label for='imagem'>Imagem</label>";
                        print "<input type='file' id='imagem' name='imagem' class='field-full-width' value='' />";
                        print "<input type='submit' value='Gravar' class='btn btn-green btn-full-width' />";
                    print "</form>";
                }
            ?>
    </div>
</body>
</html>