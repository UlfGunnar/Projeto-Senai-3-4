<?php

require_once '../API/conexao.php';
function salvarCobrancaDAO(PDO $pdo, array $dados): bool
{
    $sql = "INSERT INTO cobranca (
                fk_cliente,
                fk_servico,
                data_inicio,
                data_fim,
                hora_inicio,
                hora_fim,
                saldo_devedor,
                observacao,
                status ,
                total_pago
            )
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    return $stmt->execute([
        $dados['fk_cliente'],
        $dados['fk_servico'],
        $dados['data_inicio'],
        $dados['data_fim'],
        $dados['hora_inicio'],
        $dados['hora_fim'],
        $dados['saldo_devedor'],
        $dados['observacao'],
        $dados['status'],
        $dados['total_pago']
    ]);
}
?>