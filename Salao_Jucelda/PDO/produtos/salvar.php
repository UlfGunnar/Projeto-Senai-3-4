<?php

require_once '../API/conexao.php';
function salvarProdutosDAO(PDO $pdo, array $dados): bool
{
    $sql = "INSERT INTO produtos (
                nome_produto,
                preco,
                quantidade,
            )
            VALUES (?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([
        $dados['nome_produto'],
        $dados['preco'],
        $dados['quantidade'] 
    ])) {
        return (int) $pdo->lastInsertId();
    };
    return false;
}
?>