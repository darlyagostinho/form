<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <form class="form_login" action="../actions/user-add.php" method="POST">
        <div class="container">
            <div class="section_wrapper">
                <h1>Cadastrar Usuário</h1>
                <input type="email" name="email" id="email" placeholder="E-mail" class="form_input" required>
                <input type="password" name="password" id="password" placeholder="Senha" class="form_input" required>
                <input type="submit" value="Cadastrar" class="form_submit">
            </div>
            <?php require 'footer.php' ?>
        </div>
    </form>
</body>

</html>