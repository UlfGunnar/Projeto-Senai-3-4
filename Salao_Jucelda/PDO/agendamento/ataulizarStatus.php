<?php

require_once '../API/conexao.php';

function atualizarStatusDAO(PDO $pdo, array $dados): bool
{
    $sql = "UPDATE agendamento
            SET
                status = ?
            WHERE pk_agendamento = ?";

    $stmt = $pdo->prepare($sql);

    return $stmt->execute([
        $dados['status']
    ]);
}

?>