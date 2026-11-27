<?php

require_once '../API/conexao.php';

function listarClienteDesmarcado(PDO $pdo): array
{
    $sql = "SELECT
                c.nome_cliente AS cliente,
                COUNT(*) AS cancelado
            FROM agendamento AS a
            INNER JOIN cliente AS c
                ON a.fk_cliente = c.pk_cliente
            WHERE a.status = 'Cancelado'
            GROUP BY c.pk_cliente, c.nome_cliente
            ORDER BY cancelado DESC";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>
