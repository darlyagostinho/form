<?php
session_start();
require '../user.php';

// 1 - Higienizar/Validar Dados
$data = array(
    'id'       => FILTER_VALIDATE_INT,
    'password' => FILTER_SANITIZE_SPECIAL_CHARS,
);
$data = filter_input_array(INPUT_POST, $data);

//Fazendo hash da senha
$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

// 2 - Atualizar Banco de Dados
$message = updateUserPassword($data);

// 3 - Criando uma variável de sessão para ser acessível em outra página
$_SESSION['message'] = $message;

// 4 - Redirecionando para uma página 
header("Location: ../templates/message.php");