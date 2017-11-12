<?php
    include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/compra/compra.php");
    $compras = new Compras();
    $rotas = new Routes();

    if (isset($_POST['produto']) && isset($_POST['preco']) && isset($_POST['quantidade']))
    {
        $produto = $_POST['produto'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
        if (isset($_POST['plataforma']))
        {
            $plataforma = $_POST['plataforma'];
        }
        else
        {
            $plataforma = null;
        }
        $compras->InserirCompra($produto,$preco,$quantidade,$plataforma);
    }
    else
    {
        header("Location:".$rotas->routeErro."");
    }
?>
