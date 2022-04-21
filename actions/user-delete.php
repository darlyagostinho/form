<?php
session_start();
require '../user.php';

//1 - Higienizando o id do usuário
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

// 2 - Deletar no banco de Dados
try {
    $message = deleteUser($id);
} catch (Exception $e) {
    $message = "Não foi possível excluir o usuário. Tente novamente.";
}

// 3 - Criando uma variável de sessão para ser acessível em outra página
$_SESSION['message'] = $message;

// 4 - Redirecionando para uma página 
header("Location: ../templates/message.php");