<?php

require_once '../API/conexao.php';
function salvarDespesaDAO(PDO $pdo, array $dados): bool
{
    $sql = "INSERT INTO despesa (
                tipo_despesa,
                pago,
                fk_produto,
                valor_despesa,
                data_inicio,
                data_fim,
            )
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    return $stmt->execute([
        $dados['tipo_despesa'],
        $dados['pago'],
        $dados['fk_produto'],
        $dados['valor_despesa'],
        $dados['data_inicio'],
        $dados['data_fim']
    ]);
}
?>