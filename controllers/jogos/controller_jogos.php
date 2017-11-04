<?php
    include("../../models/jogos/jogos.php");
   
    RouterInserirJogo('',0,'');

    function RouterInserirJogo()
    {
        if ((isset($_POST['titulo']) && isset($_POST['preco'])))
        {
            $titulo = $_POST['titulo'];
            $preco = $_POST['preco'];

            $jogos = new Jogos();
            $jogos->InserirNovoJogo($titulo, $preco);
        }
     }

     function RouterDeletarJogo($titulo)
     {
        $jogos->ExcluirJogo($titulo);
     }

     function RouterAtualizarJogo($titulo)
     {
         $jogos->AtualizarJogo($titulo);
     }

     function RouterListarJogos()
     {
         $jogos->ListarJogos();
     }
?>