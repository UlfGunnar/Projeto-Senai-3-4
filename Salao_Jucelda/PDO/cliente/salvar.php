<?php

require_once '../API/conexao.php';
function salvarClienteDAO(PDO $pdo, array $dados): bool
{
    $sql = "INSERT INTO cliente (
                nome_cliente,
                fk_anamnese,
                nome_cliente,
                celular_cliente,
                cpf,
                data_nascimento
            )
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([
        $dados['nome_cliente'],
        $dados['fk_anamnese'],
        $dados['nome_cliente'],
        $dados['celular_cliente'],
        $dados['cpf'],
        $dados['data_nascimento']
        
    ])) {
        return (int) $pdo->lastInsertId();
    };
    return false;
}
?>