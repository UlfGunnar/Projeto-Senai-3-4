<?php

require_once 'config.php';

try {

    $pdo = new PDO(
        "mysql:host=" . DB_HOST .
        ";dbname=" . DB_NAME .
        ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, 
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
            PDO::ATTR_EMULATE_PREPARES   => false, // vai devolver valores inteiros como númericos
        ]
    );
} catch (PDOException $e) {
    http_response_code(500);
    header("Content-Type: application/json; charset=utf-8");
    error_log("Erro de conexão: " . $e->getMessage()); 
    echo json_encode(['erro' => 'Falha ao conectar ao banco de dados']);
    exit;
}