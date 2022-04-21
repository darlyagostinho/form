<?php
require 'connection.php';

function addUser(array $data): string
{
    $conn = getConnection();
    $result = array();
    $sql = 'INSERT INTO users (email, password) 
            VALUES (:email, :password)';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':email', $data['email']);
    $stmt->bindValue(':password', $data['password']);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $result = "Usuário incluído com sucesso!";
    } else {
        throw new Exception("Não foi possível inserir o usuário");
    }
    return $result;
}

function getAllUser(): array
{
    $conn = getConnection();
    $result = array();
    $sql = 'SELECT * 
            FROM users';
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    } else {
        throw new Exception("Não exitem usuários cadastrados no banco de dados.");
    }
    return $result;
}

function getUser(int $id): array
{
    $conn = getConnection();
    $result = array();

    $sql = 'SELECT * 
            FROM users 
            WHERE id = :id';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    } else {
        throw new Exception("id {$id} inexistente");
    }
    return $result;
}

function getUserByEmail(string $email): array
{
    $conn = getConnection();
    $result = array();

    $sql = 'SELECT * 
            FROM users 
            WHERE email = :email';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    } else {
        throw new Exception("E-mail inexistente");
    }
    return $result;
}

function updateUserPassword(array $data): string
{
    $conn = getConnection();
    $result = array();

    $sql = 'UPDATE users 
            SET password = :password
            WHERE id = :id';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $data['id']);
    $stmt->bindValue(':password', $data['password']);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $result = "Senha atualizada com sucesso!";
    } else {
        throw new Exception("Não foi redefinir a senha do usuário.");
    }
    return $result;
}

function deleteUser(int $id): string
{
    $conn = getConnection();
    $result = array();

    $sql = 'DELETE FROM users 
            WHERE id = :id';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $result = "Usuário excluído com sucesso!";
    } else {
        throw new Exception("Não foi possível excluir o usuário.");
    }
    return $result;
}