<?php

require_once '../API/conexao.php';

function listarDAO(PDO $pdo): array
{
    $sql = "SELECT
                a.pk_agendamento,
                c.nome_cliente,
                s.nome_servico,
                f.nome_funcionario,
                a.data_marcada,
                a.hora_marcada,
                a.pagamento,
                a.status,
                a.observacao
            FROM agendamento a
            LEFT JOIN cliente c
                ON a.fk_cliente = c.pk_cliente
            LEFT JOIN servico s
                ON a.fk_servico = s.pk_servico
            LEFT JOIN funcionario f
                ON a.fk_funcionario = f.pk_funcionario
            ORDER BY a.data_marcada, a.hora_marcada";

    $stmt = $pdo->prepare($sql);

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>