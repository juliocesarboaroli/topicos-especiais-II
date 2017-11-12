<?php
    include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/conexao/conexao.php");
    include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/routes/routes.php");

    class Jogos
    {
        public function InserirNovoJogo($titulo, $preco, $imagem, $tamanhoImagem)
        {
            $conexao = new Conexao();
            $rotas = new Routes();
            $conexaoBanco = $conexao->CriarConexao();
            $imagem = addslashes(fread(fopen($imagem, "r"), $tamanhoImagem));
            $conexaoBanco->exec("insert into jogos (titulo,preco,imagem) values ('".$titulo."',".$preco.",'".$imagem."')") or die(header("Location:".$rotas->routeErro.""));
            header("Location:".$rotas->routeJogos."");
        }

        public function ExcluirJogo($id)
        {
            $conexao = new Conexao();
            $rotas = new Routes();
            $conexaoBanco = $conexao->CriarConexao();
            $conexaoBanco->exec("delete from jogos where id = ".$id."");
            header("Location:".$rotas->routeJogos."");
        }

        public function AtualizarJogo($id,$titulo,$preco)
        {
            $conexao = new Conexao();
            $rotas = new Routes();
            $conexaoBanco = $conexao->CriarConexao();
            $conexaoBanco->exec("update jogos set titulo = '".$titulo."', preco = ".$preco."  where id = ".$id."");
            header("Location:".$rotas->routeJogos."");         
        }

        public function ListarJogos()
        {
            $conexao = new Conexao();
            $conexaoBanco = $conexao->CriarConexao();
            $resultado = $conexaoBanco->query("select id,titulo,preco,imagem from jogos");
            while ($row = $resultado->fetch(PDO::FETCH_OBJ))
            {
                print "<input type='hidden' id='id' name='id' value='".$row->id."'/>"; 
                print "<div class='card'>";
                print "<div class='card-title' id='titulo' name='titulo'>".$row->titulo."</div>";
                print "<div class='card-image'>";
                    print "<img height='200' width='200' src='data:image/jpeg;base64,".base64_encode($row->imagem)."' alt='".$row->titulo."'>";
                print "</div>";
                print "<div class='card-info'>";
                    print "R$ ".$row->preco."";
                print "</div>";
                print "<div class='card-footer'>";
                    print "<a href='compra.php?id=".$row->id."&tipo=jogo' class='btn btn-green'> Comprar </a>";
                print "</div>";
                print "</div>";
            }
        }

        public function ListarInformacoesTextoJogos()
        {
            $conexao = new Conexao();
            $conexaoBanco = $conexao->CriarConexao();
            $resultado = $conexaoBanco->query("select id,titulo,preco from jogos");
            while ($row = $resultado->fetch(PDO::FETCH_OBJ))
            {
                print "<tr>";
                print "<td>".$row->titulo."</td>";
                print "<td>".$row->preco."</td>";
                print "<td value='".$row->id."'>";
                    print "<a href='formulario.php?id=".$row->id."'><img src='../../../icons/pencil.png' alt='Editar'/></a>";
                    print "<a href='../../../controllers/jogos/controller_jogos.php?excluir=".$row->id."'><img src='../../../icons/trash.png' alt='Remover'/></a>";
                print "</td>";
                print "</tr>";
            }
        }

        public function ListarJogosTelaCompras($id)
        {
            $conexao = new Conexao();
            $conexaoBanco = $conexao->CriarConexao();
            $resultado = $conexaoBanco->query("select id,titulo,preco,imagem from jogos where id=".$id."");
            while ($row = $resultado->fetch(PDO::FETCH_OBJ))
            {
                print "<form method='post' action='../controllers/compra/controller_compra.php'>";
                    print "<input type='hidden' id='produto' name='produto' value='".$row->titulo."' />";
                    print "<input type='hidden' id='preco' name='preco' value='".$row->preco."' />";
                    print "<h1>".$row->titulo."</h1>";
                    print "<img height='250' width='250' src='data:image/jpeg;base64,".base64_encode($row->imagem)."' alt='".$row->titulo."'>";
                    print "<br>";
                    print "<h4>Preço: R$ ".$row->preco." </h4>";
                    print "<label for='quantidade' class='inline'>Quantidade</label>";
                    print "<input type='number' id='quantidade' name='quantidade'>";
                    print "<label for='plataforma' class='inline'>Plataforma</label>";
                    print "<select name='plataforma' id='plataforma'>";
                        print "<option value='xboxone'>Xbox One</option>";
                        print "<option value='xbox360'>Xbox 360</option>";
                        print "<option value='pc'>PC</option>";
                        print "<option value='ps4'>PS4</option>";
                        print "<option value='ps3'>PS3</option>";
                    print "</select>";
                    print "<input type='submit' class='btn btn-green' value='Pronto'>";
                print "</form>";
            }
        }

        public function BuscarDadosJogos($id)
        {
            $conexao = new Conexao();
            $conexaoBanco = $conexao->CriarConexao();
            $resultado = $conexaoBanco->query("select id,titulo,preco from jogos where id=".$id."");
            while ($row = $resultado->fetch(PDO::FETCH_OBJ))
            {
                print "<form action='../../../controllers/jogos/controller_jogos.php' method='post' id='upload-jogos' name='upload-jogos' enctype='multipart/form-data'>";
                    print "<input type='hidden' id='id' name='id' value='".$row->id."'/>";
                    print "<label for='nome'>Nome</label>";
                    print "<input type='text' id='titulo' name='titulo' class='field-full-width' value='".$row->titulo."'/>";
                    print "<label for='preco'>Preço</label>";
                    print "<input type='text' id='preco' name='preco' class='field-full-width' value='".$row->preco."'/>";
                    print "<input type='submit' value='Editar' class='btn btn-green btn-full-width' />";
                print "</form>";
            }
        }


    }
?>