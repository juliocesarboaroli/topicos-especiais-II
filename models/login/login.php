<?php
    include('../../models/conexao/conexao.php');

    class Login 
    {
        public function Logar($usuario, $senha)
        {
            $conexao = new Conexao();
            $conexaoBanco = $conexao->CriarConexao();
            $resultado = $conexaoBanco->query("select usuario,senha from login where usuario = '".$usuario."' and senha = '".$senha."'");
            while ($linha = $resultado->fetch(PDO::FETCH_OBJ))
            {
                if ((MD5($usuario) == $linha->usuario) && (MD5($senha) == $linha->senha))
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
        }
    }
?>   