
<?php

require_once '../API/conexao.php';

function listarAniversarioDAO(PDO $pdo): array
{
    $sql =  "SELECT
                nome_cliente AS cliente,
                data_nascimento
            FROM cliente
            WHERE data_nascimento IS NOT NULL
            ORDER BY MONTH(data_nascimento), DAY(data_nascimento)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
