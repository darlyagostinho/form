<?php

function getConnection()
{
    $db['dsn'] = 'mysql:host=localhost; dbname=phpform';
    $db['user'] = 'root';
    $db['password'] = '';

    try {
        $conn = new PDO($db['dsn'], $db['user'], $db['password']);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        exit("Erro ao realizar a conexão com o banco de dados. <strong>Mensagem:</strong> " . $e->getMessage());
    }
}