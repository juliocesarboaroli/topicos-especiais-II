<?php
    include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/acessorios/acessorios.php");
    $acessorios = new Acessorios();

    if ((isset($_POST['nome']) && isset($_POST['preco']) && (isset($_FILES['imagem']))))
    {
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $imagem = $_FILES['imagem']['tmp_name'];
        $tamanho_imagem = filesize($imagem);
        $acessorios->InserirNovoAcessorio($nome, $preco, $imagem, $tamanho_imagem);
    }

     function DeletarAcessorio($nome)
     {
        $acessorios->ExcluirAcessorio($nome);
     }

     function AtualizarAcessorio($nome)
     {
         $acessorios->AtualizarAcessorio($nome);
     }

     function ListarAcessorios()
     {
         $acessorios->ListarAcessorios();
     }
?>