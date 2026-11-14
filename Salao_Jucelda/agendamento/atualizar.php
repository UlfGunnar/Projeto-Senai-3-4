<?php

require_once '../backend/conexao.php';

$sql = "UPDATE agendamento
            SET
                data_marcada = ?,
                fk_cliente = ?,
                fk_servico = ?,
                pagamento = ?,
                observacao = ?,
                hora_marcada = ?,
                fk_funcionario = ?
            WHERE 
                pk_agendamento = ?";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    $_POST['data_marcada'],
    $_POST['fk_cliente'],
    $_POST['fk_servico'],
    $_POST['pagamento'],
    $_POST['observacao'],
    $_POST['hora_marcada'],
    $_POST['fk_funcionario'],
    $_POST['pk_agendamento']
]);

/*
teste
/*

?>