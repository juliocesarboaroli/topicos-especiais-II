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

        public function ExcluirAcessorios($id)
        {
            $conexao = new Conexao();
            $rotas = new Routes();
            $conexaoBanco = $conexao->CriarConexao();
            $conexaoBanco->exec("delete from acessorios where id = ".$id."");
            header("Location:".$rotas->routeAcessorios."");
        }

        public function AtualizarAcessorios($id,$nome,$preco)
        {
            $conexao = new Conexao();
            $rotas = new Routes();
            $conexaoBanco = $conexao->CriarConexao();
            $conexaoBanco->exec("update acessorios set nome = '".$nome."', preco = ".$preco."  where id = ".$id."");
            header("Location:".$rotas->routeAcessorios."");
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
                    print "<a href='compra.php' class='btn btn-green'> Comprar </a>";
                print "</div>";
                print "</div>";
            }
        }

        public function ListarInformacoesTextoAcessorios()
        {
            $conexao = new Conexao();
            $conexaoBanco = $conexao->CriarConexao();
            $resultado = $conexaoBanco->query("select id,nome,preco,imagem from acessorios");
            while ($row = $resultado->fetch(PDO::FETCH_OBJ))
            {
                print "<tr>";
                    print "<td>".$row->nome."</td>";
                    print "<td>".$row->preco."</td>";
                    print "<td>";
                        print "<a href='formulario.php?id=".$row->id."'><img src='../../../icons/pencil.png' alt='Editar'/></a>";
                        print "<a href='../../../controllers/acessorios/controller_acessorios.php?excluir=".$row->id."'> <img src='../../../icons/trash.png' alt='Remover'/></a>";
                    print "</td>";
                print "</tr>";
            }
        }

        public function BuscarDadosAcessorios($id)
        {
            $conexao = new Conexao();
            $conexaoBanco = $conexao->CriarConexao();
            $resultado = $conexaoBanco->query("select id,nome,preco from acessorios where id=".$id."");
            while ($row = $resultado->fetch(PDO::FETCH_OBJ))
            {
                print "<form action='../../../controllers/acessorios/controller_acessorios.php' method='post' id='upload-jogos' name='upload-jogos' enctype='multipart/form-data'>";
                    print "<input type='hidden' id='id' name='id' value='".$row->id."'/>";
                    print "<label for='nome'>Nome</label>";
                    print "<input type='text' id='nome' name='nome' class='field-full-width' value='".$row->nome."'/>";
                    print "<label for='preco'>Preço</label>";
                    print "<input type='text' id='preco' name='preco' class='field-full-width' value='".$row->preco."'/>";
                    print "<input type='submit' value='Editar' class='btn btn-green btn-full-width' />";
                print "</form>";
            }
        }



    }
?>