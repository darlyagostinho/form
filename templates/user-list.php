<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Lista Usuarios</title>
</head>

<body>
    <section class="user_list">
        <div class="container">
            <h1 class="user_list_title text_center">Lista de Usuários</h1>
            <?php require 'footer.php'; ?>
            <table class="user_list_table mx_auto">
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                </tr>
                <?php
                require '../user.php';
                try {
                    $users = getAllUser();
                    foreach ($users as $user) :
                ?>
                <tr>
                    <td><?php echo $user['email']; ?></td>
                    <td><a href="user-edit.php?id=<?php echo $user['id']; ?>">Editar</a></td>
                    <td><a href="../actions/user-delete.php?id=<?php echo $user['id']; ?>">Excluir</a></td>
                </tr>
                <?php
                    endforeach;
                } catch (Exception $e) {
                    ?>
                <tr>
                    <td colspan="2">Não existem usuários cadastrados no banco de dados.</td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </section>
</body>

</html>