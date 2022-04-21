<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <form class="form_login" action="../actions/user-update.php" method="POST">
        <div class="container">
            <div class="section_wrapper">
                <h1>Editar Usuário</h1>
                <?php
                require '../user.php';
                if (!empty($_GET['id'])) :
                    $user = getUser($_GET['id']);
                else :
                    $user = "";
                endif;
                ?>
                <input type="email" name="email" id="email" placeholder="E-mail" class="form_input input_disabled"
                    value="<?php echo $user['email']; ?>" required disabled
                    title="Não é permitido atualizar o e-mail do usuário">
                <input type="password" name="password" id="password" placeholder="Informe uma nova senha"
                    class="form_input" required>
                <input type="hidden" name="id" id="id" class="form_input" value="<?php echo $user['id']; ?>">
                <input type="submit" value="Salvar" class="form_submit">
            </div>
            <?php require 'footer.php'; ?>
        </div>
    </form>
</body>

</html>