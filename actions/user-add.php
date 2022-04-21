<?php
session_start();
require '../user.php';

// 1 - Higienizar/Validar Dados
$data = array(
    'email'    => FILTER_SANITIZE_SPECIAL_CHARS,
    'password' => FILTER_SANITIZE_SPECIAL_CHARS,
);
$data = filter_input_array(INPUT_POST, $data);

//Fazendo hash da senha
$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

// 2 - Salvar Banco de Dados
try {
    $message = addUser($data);
} catch (Exception $error) {
    $message = "Não foi possível adicionar o usuário. Tente novamente.";
    error_log("Erro ao adicionar usuário no banco de dados. Mensagem: " . $error, dirname(__DIR__) . '/log.error');
}
// 3 - Criando uma variável de sessão para ser acessível em outra página
$_SESSION['message'] = $message;

// 4 - Redirecionando para uma página 
header("Location: ../templates/message.php");