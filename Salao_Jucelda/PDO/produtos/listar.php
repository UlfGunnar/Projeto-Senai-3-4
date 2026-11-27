<?php

require_once '../API/conexao.php';

function listarProdutosDAO(PDO $pdo): array
{
    $sql = "SELECT
            nome_produto,
            preco,
            quantidade
        FROM produtos
        ORDER BY pk_produto";

    $stmt = $pdo->prepare($sql);

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>