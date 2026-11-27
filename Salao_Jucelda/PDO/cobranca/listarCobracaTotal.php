<?php

require_once '../API/conexao.php';

function listarCobrancaTotalDAO(PDO $pdo): array
{
    $sql = "SELECT
                s.nome_servico,
                SUM(c.total_pago) AS total_pago
            FROM cobranca AS c
            INNER JOIN servico AS s
                ON s.pk_servico = c.fk_servico
            WHERE c.status = 'Pago'
            GROUP BY s.pk_servico, s.nome_servico
            ORDER BY total_pago DESC'";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>
