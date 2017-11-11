<?php
    include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/conexao/conexao.php");
    include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/routes/routes.php");

    class Acessorios
    {
        public function InserirNovoAcessorio($nome, $preco, $imagem, $tamanhoImagem)
        {
            $conexao = new Conexao();
            $rotas = new Routes();
            $conexaoBanco = $conexao->CriarConexao();
            $imagem = addslashes(fread(fopen($imagem, "r"), $tamanhoImagem));
            $conexaoBanco->exec("insert into acessorios (nome,preco,imagem) values ('".$nome."',".$preco.",'".$imagem."')") or die(header("Location:".$rotas->routeErro.""));
            header("Location:".$rotas->routeAcessorios."");
        }

        public function ExcluirAcessorios($nome)
        {
            
        }

        public function AtualizarAcessorios($nome)
        {

        }

        public function ListarAcessorios()
        {
            $conexao = new Conexao();
            $conexaoBanco = $conexao->CriarConexao();
            $resultado = $conexaoBanco->query("select id,nome,preco,imagem from acessorios");
            while ($row = $resultado->fetch(PDO::FETCH_OBJ))
            {
                print "<div class='card'>";
                print "<div class='card-title'>".$row->nome."</div>";
                print "<div class='card-image'>";
                    print "<img height='200' width='200' src='data:image/jpeg;base64,".base64_encode($row->imagem)."' alt='".$row->nome."'>";
                print "</div>";
                print "<div class='card-info'>";
                    print "R$ ".$row->preco."";
                print "</div>";
                print "<div class='card-footer'>";
                    print "<a href='' class='btn btn-green'>Adicionar ao Notícias</a>";
                print "</div>";
                print "</div>";
            }
        }


    }
?>