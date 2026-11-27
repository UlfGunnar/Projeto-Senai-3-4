<?php

require_once '../API/conexao.php';

function listarClienteDevedor(PDO $pdo): array
{
    $sql = "SELECT
                cl.nome_cliente AS cliente,
                SUM(c.saldo_devedor) AS devendo
            FROM cobranca AS c
            INNER JOIN cliente AS cl
                ON c.fk_cliente = cl.pk_cliente
            WHERE c.status IN ('Pendente', 'Parcial', 'Vencido')
            GROUP BY cl.pk_cliente, cl.nome_cliente
            HAVING SUM(c.saldo_devedor) > 0
            ORDER BY devendo DESC";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>
