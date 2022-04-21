<?php
session_start();
require '../user.php';

try {
    $user = getUserByEmail($_POST['email']);
    if (password_verify($_POST['password'], $user['password'])) {
        $message = "Olá, <strong>" . $_POST['email'] . "</strong>. Seja Bem-Vindo(a)!";
    } else {
        $message = "Usuário e/ou senha incorretos. Tente Novamente.";
    }
} catch (Exception $error) {
    $message = "Usuário e/ou senha incorretos. Tente Novamente.";
}

// Criando uma variável de sessão para ser acessível em outra página
$_SESSION['message'] = $message;

//Redirecionando para uma página 
header("Location: ../templates/message.php");