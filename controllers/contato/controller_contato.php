<?php
    include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/contato/contato.php");
    $contato = new Contato();

    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem']))
    {
        $nome = $_POST['nome'];
        $email =$_POST['email'];
        $mensagem = $_POST['mensagem'];
        $contato->InserirNovoContato($nome, $email, $mensagem);
    }

    if (isset($_POST['id']) && isset($_POST['resposta']))
    {
        $id = $_POST['id'];
        $resposta = $_POST['resposta'];
        $contato->InserirNovaResposta($id, $resposta);
    }
?>