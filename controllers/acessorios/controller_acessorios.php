<?php
    include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/acessorios/acessorios.php");
    $acessorios = new Acessorios();
    
    // Inserir um novo acessório
    if ((isset($_POST['nome']) && isset($_POST['preco']) && (isset($_FILES['imagem']))))
    {
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $imagem = $_FILES['imagem']['tmp_name'];
        $tamanho_imagem = filesize($imagem);
        $acessorios->InserirNovoAcessorio($nome, $preco, $imagem, $tamanho_imagem);
    }

     // Atualizar um acessório existente
     if ((isset($_POST['id']) && (isset($_POST['nome'])) && (isset($_POST['preco']))))
     {
         $acessorios->AtualizarAcessorios($_POST['id'],$_POST['nome'],$_POST['preco']);
     }

     // Deletar um acessório existente
     if (isset($_GET['excluir']))
     {
        $acessorios->ExcluirAcessorios($_GET['excluir']);
     }

     function ExcluirAcessorio($id)
     {
        $acessorios->ExcluirAcessorio($id);
     }

     function AtualizarAcessorio($id)
     {
         $acessorios->AtualizarAcessorio($id);
     }

     function ListarAcessorios()
     {
         $acessorios->ListarAcessorios();
     }

     function ListarInformacoesTextoAcessorios()
     {
         $acessorios->ListarInformacoesTextoAcessorios();
     }

     function BuscarDadosAcessorios($id)
     {
         $acessorios->BuscarDadosAcessorios($id);
     }
?>