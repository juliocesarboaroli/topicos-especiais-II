<?php
    include("../../models/conexao/conexao.php");

    class Jogos
    {
        public function InserirNovoJogo($titulo, $preco)
        {
            $conexao = new Conexao();
            $conexaoBanco = $conexao->CriarConexao();
            $conexaoBanco->exec("insert into jogos (titulo,preco) values ('".$titulo."',".$preco.")") or die(print_r($conexaoBanco->errorInfo()));
        }

        public function ExcluirJogo($titulo)
        {

        }

        public function AtualizarJogo($titulo)
        {

        }

        public function ListarJogos()
        {

        }
    }
?>