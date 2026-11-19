<?php

require_once '../API/conexao.php';

function excluirDAO(PDO $pdo, int $pk_agendamento): bool
{
    $sql = "DELETE FROM agendamento WHERE pk_agendamento = ?";

    $stmt = $pdo->prepare($sql);

    return $stmt->execute([$pk_agendamento]);
}

?>