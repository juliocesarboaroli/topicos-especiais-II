<?php
    include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/conexao/conexao.php");
    include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/routes/routes.php");

    class Contato
    {
        public function InserirNovoContato($nome, $email, $mensagem)
        {
            $conexao = new Conexao();
            $rotas = new Routes();
            $conexaoBanco = $conexao->CriarConexao();
            $conexaoBanco->exec("insert into contato (nome,email,mensagem) values ('".$nome."','".$email."','".$mensagem."')") or die(header("Location:".$rotas->routeErro.""));
            header("Location:".$rotas->routeContato."");
        }

        public function ListarContatos()
        {
            $conexao = new Conexao();
            $conexaoBanco = $conexao->CriarConexao();
            $resultado = $conexaoBanco->query("select id,nome,email,mensagem,resposta from contato");
            while ($row = $resultado->fetch(PDO::FETCH_OBJ))
            {
                print "<tr>";
                    print "<td>".$row->nome."</td>";
                    print "<td>".$row->mensagem."</td>";
                    print "<td>".$row->email."</td>";
                    print "<td>".$row->resposta."</td>";
                    print "<td>";
                        print "<a href=resposta.php?id=".$row->id."><img src='../../../icons/forward.png' alt='Responder' /></a>";
                    print "</td>";
                print "</tr>";
            }
        }

        public function InserirNovaResposta($id, $resposta)
        {
            $conexao = new Conexao();
            $rotas = new Routes();
            $conexaoBanco = $conexao->CriarConexao();
            $conexaoBanco->exec("update contato set resposta = '".$resposta."' where id = ".$id."") or die(header("Location:".$rotas->routeErro.""));
            header("Location:".$rotas->routeContatos."");
        }
    }
?>