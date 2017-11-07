<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div class="content">
        <form class="login" id="login" name="login" action="../controllers/login/controller_login.php" method="post" />
            <label for="usuario">Usuário</label>
            <input type="text" class="field-full-width" name="usuario" id="usuario" placeholder="Seu usuário">
            <label for="senha">Senha</label>
            <input type="password" class="field-full-width" name="senha" id="senha" placeholder="Sua senha">
            <button type="submit" class="btn-green btn-full-width"> Entrar </button>
        </form>
    </div>
</body>
</html>