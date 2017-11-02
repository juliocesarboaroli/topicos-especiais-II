<?php
    include("../../models/login/login.php");

    $login = new Login();
    if (isset($_POST['usuario']) && isset($_POST['senha']))
    {
        $retorno_login = $login->Logar($_POST['usuario'],$_POST['senha']);
        if ($retorno_login)
        {
            echo "Usuário logado";
        }
        else
        {
            echo "Usuário incorreto";
        }
    }
    else
    {
        throw new Exception("As informações de usúario e senha estão em branco");
    }
?>