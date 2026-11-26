<?php

require_once '../API/conexao.php';
function salvarFuncionarioDAO(PDO $pdo, array $dados): bool
{
    $sql = "INSERT INTO funcionario (
                cpf_funcionario,
                numero_celular,
                nome_funcionario,
                data_nascimento
            )
            VALUES (?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([
        $dados['cpf_funcionario'],
        $dados['numero_celular'],
        $dados['nome_funcionario'],
        $dados['data_nascimento']
    ])) {
        return (int) $pdo->lastInsertId();
    };
    return false;
}
?>