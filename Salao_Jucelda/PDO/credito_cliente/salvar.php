<?php

require_once '../API/conexao.php';
function salvarCreditoDAO(PDO $pdo, array $dados): bool
{
    $sql = "INSERT INTO credito_cliente (
                fk_cliente, 
                valor
            )
            VALUES (?, ?)";

    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([
        $dados['fk_cliente'],
        $dados['valor'] 
    ])) {
        return (int) $pdo->lastInsertId();
    };
    return false;
}
?>