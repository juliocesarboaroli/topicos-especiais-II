<?php
    include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/conexao/conexao.php");
    include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/routes/routes.php");

    class Compras
    {
        public function InserirCompra($produto, $preco, $quantidade, $plataforma)
        {
            $conexao = new Conexao();
            $rotas = new Routes();
            $conexaoBanco = $conexao->CriarConexao();
            $conexaoBanco->exec("insert into compra (produto,preco,quantidade,plataforma) values ('".$produto."',".$preco.",'".$quantidade."','".$plataforma."')") or die(header("Location:".$rotas->routeErro.""));
            print "<script> 
                alert('Compra realizada com sucesso');
                window.location.href='../..';
            </script>";
        }

        public function ListarCompras()
        {
            $conexao = new Conexao();
            $conexaoBanco = $conexao->CriarConexao();
            $resultado = $conexaoBanco->query("select produto,preco,quantidade,plataforma from compra");
            while ($row = $resultado->fetch(PDO::FETCH_OBJ))
            {
                print "<tr>";
                    print "<td>".$row->produto."</td>";
                    print "<td>".$row->preco."</td>";
                    print "<td>".$row->quantidade."</td>";
                    print "<td>".$row->plataforma."</td>";
                print "</tr>";
            }
        }
    }
?>