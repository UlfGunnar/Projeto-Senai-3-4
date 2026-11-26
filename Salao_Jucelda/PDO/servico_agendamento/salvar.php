<?php

function salvarServicoAgendamentoDAO(PDO $pdo, int $fkAgendamento, int $fkServico): bool
 {
    $sql = "INSERT INTO servico_agendamento (
                fk_agendamento,
                fk_servico
            ) 
            VALUES (?, ?)";

    $stmt = $pdo->prepare($sql);

    return $stmt->execute([
        $fkAgendamento,
        $fkServico
    ]);
}