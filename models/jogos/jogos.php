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
            header("Location:".$rotas->routeListagemJogos."");
        }

        public function ExcluirJogo($titulo)
        {
            
        }

        public function AtualizarJogo($titulo)
        {

        }

        public function ListarJogos()
        {
            $conexao = new Conexao();
            $conexaoBanco = $conexao->CriarConexao();
            $resultado = $conexaoBanco->query("select id,titulo,preco,imagem from jogos");
            while ($row = $resultado->fetch(PDO::FETCH_OBJ))
            {
                print "<div class='card'>";
                print "<div class='card-title'>".$row->titulo."</div>";
                print "<div class='card-image'>";
                    print "<img height='200' width='200' src='data:image/jpeg;base64,".base64_encode($row->imagem)."' alt='".$row->titulo."'>";
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
                    print "<a href='formulario.php'><img src='../../../icons/pencil.png' alt='Editar'/></a>";
                    print "<a href=''><img src='../../../icons/trash.png' alt='Remover'/></a>";
                print "</td>";
                print "</tr>";
            }
        }


    }
?>