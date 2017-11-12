<?php
    include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/jogos/jogos.php");
    $jogos = new Jogos();

    // Inserir um novo jogo
    if ((isset($_POST['titulo']) && isset($_POST['preco']) && (isset($_FILES['imagem']))))
    {
        $titulo = $_POST['titulo'];
        $preco = $_POST['preco'];
        $imagem = $_FILES['imagem']['tmp_name'];
        $tamanho_imagem = filesize($imagem);
        $jogos->InserirNovoJogo($titulo, $preco, $imagem, $tamanho_imagem);
    }

     // Atualizar um acessório existente
     if ((isset($_POST['id']) && (isset($_POST['titulo'])) && (isset($_POST['preco']))))
     {
         $jogos->AtualizarJogo($_POST['id'],$_POST['titulo'],$_POST['preco']);
     }

     // Deletar um acessório existente
     if (isset($_GET['excluir']))
     {
        $jogos->ExcluirJogo($_GET['excluir']);
     }

     function ListarJogos()
     {
         $jogos->ListarJogos();
     }

     function ListarInformacoesTextoJogos()
     {
         $jogos->ListarInformacoesTextoJogos();
     }

     function ListarJogosTelaCompras()
     {
         $jogos->ListarJogosTelaCompras();
     }
?>