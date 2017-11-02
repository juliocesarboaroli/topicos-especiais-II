<?php
    include("../../models/conexao/conexao.php");
    include("../../models/routes/routes.php");

    class Login 
    {
        public function VerificarUsuarioSenha($usuario, $senha)
        {
            $conexao = new Conexao();
            $conexaoBanco = $conexao->CriarConexao();
            $resultado = $conexaoBanco->query("select usuario,senha from login where usuario = '".MD5($usuario)."' and senha = '".MD5($senha)."'");
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
            $conexao->DestruirConexao($conexaoBanco);
        }

        public function LogarSistema()
        {
            $rotas = new Routes();
            if (isset($_POST['usuario']) && isset($_POST['senha']))
            {
                $login = new Login();
                $retorno_login = $login->VerificarUsuarioSenha($_POST['usuario'],$_POST['senha']);
                if ($retorno_login)
                {
                    
                }
                else
                {
                    
                }
            }
            else
            {
                header("Location:".$rotas->routeErro."");
            }
        }

        public function RedirecionarLogin()
        {
            $rotas = new Routes();
            header("Location:".$rotas->routeLogin."");
        }
    }
?>   