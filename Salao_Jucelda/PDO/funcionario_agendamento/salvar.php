<?php

function salvarFuncionarioAgendamentoDAO(PDO $pdo, int $fkAgendamento, int $fkFuncionario): bool
 {
    $sql = "INSERT INTO funcionario_agendamento (
                fk_agendamento,
                fk_funcionario
            ) 
            VALUES (?, ?)";

    $stmt = $pdo->prepare($sql);

    return $stmt->execute([
        $fkAgendamento,
        $fkFuncionario
    ]);
}