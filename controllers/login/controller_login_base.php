<?php
    include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/login/login.php");
    $login = new Login();

    if (isset($_POST['usuario']) && isset($_POST['senha']))
    {
        $login->InserirUsuario($_POST['usuario'], $_POST['senha']);
    }

    if (isset($_GET['excluir']))
    {
        $login->ExcluirUsuario($_GET['excluir']);
    }
?>