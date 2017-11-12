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
            $rotas = new Routes();

            if (isset($_POST['usuario']) && isset($_POST['senha']))
            {
                $retorno_login = $login->VerificarUsuarioSenha($_POST['usuario'],$_POST['senha']);
                if ($retorno_login)
                {
                    return true;
                }
                else
                {
                    return false;
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

        public function InserirUsuario($login, $senha)
        {
            $login = MD5($login);
            $senha = MD5($senha);
            $conexao = new Conexao();
            $rotas = new Routes();
            $conexaoBanco = $conexao->CriarConexao();
            $conexaoBanco->exec("insert into login (usuario,senha) values ('".$login."','".$senha."')") or die(header("Location:".$rotas->routeErro.""));
            header("Location:".$rotas->routeUsuario."");
        }

        public function ExcluirUsuario($id)
        {
            $conexao = new Conexao();
            $rotas = new Routes();
            $conexaoBanco = $conexao->CriarConexao();
            $conexaoBanco->exec("delete from login where id = ".$id."") or die(header("Location:".$rotas->routeErro.""));
            header("Location:".$rotas->routeUsuario."");
        }

        public function ListarUsuarios()
        {
            $conexao = new Conexao();
            $conexaoBanco = $conexao->CriarConexao();
            $resultado = $conexaoBanco->query("select id,usuario,senha from login");
            while ($row = $resultado->fetch(PDO::FETCH_OBJ))
            {
                print "<tr>";
                print "<td>".$row->usuario."</td>";
                print "<td>".$row->senha."</td>";
                print "<td>";
                    print "<a href='../../../controllers/login/controller_login_base.php?excluir=".$row->id."'><img src='../../../icons/trash.png' alt='Remover'/></a>";
                print "</td>";
                print "</tr>";
            }
        }
    }
?>   