<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="templates/assets/css/style.css">
</head>

<body>
    <form class="form_login" action="actions/user-login.php" method="POST">
        <div class="container">
            <div class="section_wrapper">
                <h1>Login</h1>
                <input type="email" name="email" id="email" placeholder="E-mail" class="form_input" required>
                <input type="password" name="password" id="password" placeholder="Senha" class="form_input" required>
                <input type="submit" value="Entrar" class="form_submit">
                <a href="templates/user-add.php" class="pt_2rem">Cadastrar</a>
                <a href="templates/user-list.php" class="pt_2rem">Listar Usuários</a>
            </div>
        </div>
    </form>
</body>

</html>