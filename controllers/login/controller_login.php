<?php
    include("../../models/login/login.php");
    include("../../models/routes/routes.php");

    class ControllerLogin
    {
        public function LogarSistema()
        {
            $login = new Login();
            $rotas = new Routes();
            if (isset($_POST['usuario']) && isset($_POST['senha']))
            {
                $retorno_login = $login->VerificarUsuarioSenha($_POST['usuario'],$_POST['senha']);
                if ($retorno_login)
                {
                    echo "Usuário logado";
                }
                else
                {
                    echo "Usuário incorreto";
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