<?php
    include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/jogos/jogos.php");
    $jogos = new Jogos();

    if ((isset($_POST['titulo']) && isset($_POST['preco']) && (isset($_FILES['imagem']))))
    {
        $titulo = $_POST['titulo'];
        $preco = $_POST['preco'];
        $imagem = $_FILES['imagem']['tmp_name'];
        $tamanho_imagem = filesize($imagem);
        $jogos->InserirNovoJogo($titulo, $preco, $imagem, $tamanho_imagem);
    }

     function DeletarJogo($titulo)
     {
        $jogos->ExcluirJogo($titulo);
     }

     function AtualizarJogo($titulo)
     {
         $jogos->AtualizarJogo($titulo);
     }

     function ListarJogos()
     {
         $jogos->ListarJogos();
     }
?>