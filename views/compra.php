<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionando ao carrinho</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div class="content">
        <ul class="menu">
            <li><a href="../index.php">HESS STORE</a></li>
            <li><a href="jogos.php">Jogos</a></li>
            <li><a href="">Acessórios</a></li>
            <li><a href="">Formas de pagamento</a></li>
            <li><a href="">Contato</a></li>
            <li><a href="">Carrinho</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
        <div class="center-align">
            <h1>Pro evolution soccer 2018</h1>
            <img src="../imagens-teste/img.png" alt="nome do jogo">
            <br>
            <span>Preço: R$ 200,00</span>
            <form>
                <label for="quantidade" class="inline">Quantidade</label>
                <input type="number" id="quantidade" name="quandidade">

                <label for="plataforma" class="inline">Plataforma</label>
                <select name="plataforma" id="plataforma">
                    <option value="xboxone">Xbox One</option>
                    <option value="xbox360">Xbox 360</option>
                    <option value="pc">PC</option>
                    <option value="ps4">PS4</option>
                    <option value="ps3">PS3</option>
                </select>
                <input type="submit" class="btn btn-green" value="Pronto">
            </form>
        </div>
    </div>
</body>
</html>