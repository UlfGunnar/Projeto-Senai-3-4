<?php

require_once '../API/conexao.php';
function salvarClienteDAO(PDO $pdo, array $dados): bool
{
    $sql = "INSERT INTO cliente (
                nome_cliente
            )
            VALUES (?)";

    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([
        $dados['nome_cliente']
    ])) {
        return (int) $pdo->lastInsertId();
    };
    return false;
}
?>