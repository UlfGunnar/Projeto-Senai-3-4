<?php

require_once '../API/conexao.php';

function listarClienteAtendido(PDO $pdo): array
{
    $sql = "SELECT
                c.nome_cliente AS cliente,
                COUNT(*) AS concluidos
            FROM agendamento AS a
            INNER JOIN cliente AS c
                ON a.fk_cliente = c.pk_cliente
            WHERE a.status = 'Concluido'
            AND a.data_marcada >= DATE_FORMAT(CURDATE(), '%Y-%m-01')
            AND a.data_marcada < DATE_FORMAT(CURDATE(), '%Y-%m-01') + INTERVAL 1 MONTH
            GROUP BY c.pk_cliente, c.nome_cliente
            ORDER BY concluidos DESC";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>
