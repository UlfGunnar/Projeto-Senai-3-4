<?php

require_once '../API/conexao.php';

function listarServicosDAO(PDO $pdo): array
{
    $sql = "SELECT
                nome_servico,
                tempo,
                valor_servico

            FROM servico";

    $stmt = $pdo->prepare($sql);

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>