<?php

require_once '../API/conexao.php';
function salvarMovProdutosDAO(PDO $pdo, array $dados): bool
{
    $sql = "INSERT INTO movimentacao_produto (
                fk_produto,
                tipo_movimentacao,
                valor_gasto
            )
            VALUES (?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([
        $dados['fk_produto'],
        $dados['tipo_movimentacao'],
        $dados['valor_gasto'] 
    ])) {
        return (int) $pdo->lastInsertId();
    };
    return false;
}
?>