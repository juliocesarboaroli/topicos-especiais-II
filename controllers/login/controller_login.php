<?php
    include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/login/login.php");
    $controller_login = new Login();
    $rotas = new Routes();
    if ($controller_login->LogarSistema())
    {
        header("Location:".$rotas->routeAdministrador."");
    }
    else
    {
        print "<script> 
            alert('Usuário ou senha não cadastrados');
            window.location.href='../../views/login.php';
        </script>";
    }
?>