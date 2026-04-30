<?php

class User
{
    private PDO $conn;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=simple_auth_mvc;charset=utf8mb4';
        $this->conn = new PDO($dsn, 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    public function create(string $name, string $email, string $password): bool
    {
        $sql = 'INSERT INTO users (name, email, password) VALUES (:name, :email, :password)';
        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':password' => password_hash($password, PASSWORD_DEFAULT),
        ]);
    }

    public function findByEmail(string $email): ?array
    {
        $stmt = $this->conn->prepare('SELECT * FROM users WHERE email = :email LIMIT 1');
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch();

        return $user ?: null;
    }
}
