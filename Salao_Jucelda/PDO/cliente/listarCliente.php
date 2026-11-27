<?php

require_once '../API/conexao.php';

function listarCliente(PDO $pdo): array
{
    $sql = " SELECT
                    pk_cliente,
                    nome_cliente,
                    celular_cliente,
                    cpf,
                    data_nascimento
            FROM cliente
            ORDER BY pk_cliente";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>
