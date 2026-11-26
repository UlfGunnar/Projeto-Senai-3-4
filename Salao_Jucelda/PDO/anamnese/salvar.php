<?php

require_once '../API/conexao.php';
function salvarAnamneseDAO(PDO $pdo, array $dados): bool
{
    $sql = "INSERT INTO anamnese (
                fk_cliente,
                cabelo,
                risco_saude
            )
            VALUES (?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    return $stmt->execute([
        $dados['fk_cliente'],
        $dados['cabelo'],
        $dados['risco_saude']
    ]);
}
?>