<?php
    class Conexao
    {
        public function CriarConexao()
        {
            $conexao = new PDO('mysql:host=localhost;port=3306;dbname=topicos', 'root', '');
            return $conexao;
        }
    }
?>