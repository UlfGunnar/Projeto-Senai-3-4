<?php

function salvarProdutoDespesaDAO(PDO $pdo, int $fkProduto, int $fkDespesa): bool
 {
    $sql = "INSERT INTO produto_despesa (
                fk_produto,
                fk_despesa
            ) 
            VALUES (?, ?)";

    $stmt = $pdo->prepare($sql);

    return $stmt->execute([
        $fkProduto,
        $fkDespesa
    ]);
}