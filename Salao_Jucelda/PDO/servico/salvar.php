<?php

require_once '../API/conexao.php';
function salvarServicoDAO(PDO $pdo, array $dados): bool
{
    $sql = "INSERT INTO servico (
                nome_servico,
                tempo,
                valor_servico
            )
            VALUES (?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([
        $dados['nome_servico'],
        $dados['tempo'],
        $dados['valor_servico']
    ])) {
        return (int) $pdo->lastInsertId();
    };
    return false;
}
?>