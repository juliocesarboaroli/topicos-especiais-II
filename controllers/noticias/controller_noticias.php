<?php
    include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/noticias/noticias.php");
    $noticias = new Noticias;

    // Inserir uma nova noticia
    if ((isset($_POST['titulo']) && isset($_POST['descricao']) && (isset($_POST['data']))))
    {
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $data = $_POST['data'];
        $noticias->InserirNoticia($titulo, $descricao, $data);
    }

     // Deletar uma noticia
     if (isset($_GET['excluir']))
     {
        $noticias->ExcluirNoticia($_GET['excluir']);
     }
?>