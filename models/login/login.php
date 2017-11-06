<?php
    include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/conexao/conexao.php");
    include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/routes/routes.php");
    
    class Login 
    {
        public function VerificarUsuarioSenha($usuario, $senha)
        {
            $conexao = new Conexao();
            $conexaoBanco = $conexao->CriarConexao();
            $resultado = $conexaoBanco->query("select usuario,senha from login where usuario = '".MD5($usuario)."' and senha = '".MD5($senha)."'");
            while ($row = $resultado->fetch(PDO::FETCH_OBJ))
            {
                if ((MD5($usuario) == $row->usuario) && (MD5($senha) == $row->senha))
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
        }

        public function LogarSistema()
        {
            $login = new Login();

            if (isset($_POST['usuario']) && isset($_POST['senha']))
            {
                $retorno_login = $login->VerificarUsuarioSenha($_POST['usuario'],$_POST['senha']);
                if ($retorno_login)
                {
                    
                }
                else
                {
                    $login->RedirecionarLogin();
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