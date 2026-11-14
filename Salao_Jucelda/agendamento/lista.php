<?php

require_once '../backend/conexao.php';

$sql = "SELECT 
            a.pk_agendamento,
            c.nome_cliente,
            s.nome_servico,
            f.nome_funcionario,
            a.data_marcada,
            a.hora_marcada,
            a.pagamento,
            a.status
        FROM agendamento a
        INNER JOIN cliente c 
            ON a.fk_cliente = c.pk_cliente
        INNER JOIN servico s
            ON a.fk_servico = s.pk_servico
        INNER JOIN funcionario f
            ON a.fk_funcionario = f.pk_funcionario 
        ORDER BY a.pk_agendamento
            ";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$agendamentos = $stmt->fetchAll(PDO::FETCH_ASSOC);

/*
/*

?>