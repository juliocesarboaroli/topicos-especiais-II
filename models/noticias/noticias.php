<?php
    include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/conexao/conexao.php");
    include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/routes/routes.php");

    class Noticias
    {
        public function InserirNoticia($titulo, $descricao, $data)
        {
            $conexao = new Conexao();
            $rotas = new Routes();
            $conexaoBanco = $conexao->CriarConexao();
            $conexaoBanco->exec("insert into noticias (titulo,descricao,data) values ('".$titulo."','".$descricao."','".$data."')") or die(header("Location:".$rotas->routeErro.""));
            header("Location:".$rotas->routeNoticias."");
        }

        public function ExcluirNoticia($id)
        {
            $conexao = new Conexao();
            $rotas = new Routes();
            $conexaoBanco = $conexao->CriarConexao();
            $conexaoBanco->exec("delete from noticias where id = ".$id."") or die(header("Location:".$rotas->routeErro.""));
            header("Location:".$rotas->routeNoticias."");
        }

        public function ListarNoticias()
        {
            $conexao = new Conexao();
            $conexaoBanco = $conexao->CriarConexao();
            $resultado = $conexaoBanco->query("select id,titulo,descricao from noticias");
            while ($row = $resultado->fetch(PDO::FETCH_OBJ))
            {
                print "<tr>";
                print "<td>".$row->descricao."</td>";
                print "<td>";
                    print "<a href='../../../controllers/noticias/controller_noticias.php?excluir=".$row->id."'><img src='../../../icons/trash.png' alt='Remover'/></a>";
                print "</td>";
                print "</tr>";
            }
        }

        public function ListarNoticiasAreaUsuario()
        {
            $conexao = new Conexao();
            $conexaoBanco = $conexao->CriarConexao();
            $resultado = $conexaoBanco->query("select titulo,descricao from noticias");
            while ($row = $resultado->fetch(PDO::FETCH_OBJ))
            {
                print "<div>";
                    print "<h3>".$row->titulo."</h3>";
                    print "<p>".$row->descricao."</p>";
                print "</div>";  
            }
        }
    }
?>