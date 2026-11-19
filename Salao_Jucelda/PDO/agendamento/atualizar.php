<?php

require_once '../API/conexao.php';

function atualizarDAO(PDO $pdo, array $dados): bool
{
    $sql = "UPDATE agendamento
            SET
                data_marcada = ?,
                fk_cliente = ?,
                fk_servico = ?,
                pagamento = ?,
                observacao = ?,
                hora_marcada = ?,
                fk_funcionario = ?
            WHERE pk_agendamento = ?";

    $stmt = $pdo->prepare($sql);

    return $stmt->execute([
        $dados['data_marcada'],
        $dados['fk_cliente'],
        $dados['fk_servico'],
        $dados['pagamento'],
        $dados['observacao'],
        $dados['hora_marcada'],
        $dados['fk_funcionario'],
        $dados['pk_agendamento']
    ]);
}

?>