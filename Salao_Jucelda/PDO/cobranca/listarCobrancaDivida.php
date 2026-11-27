<?php

require_once '../API/conexao.php';

function listarCobrancaDivida(PDO $pdo): array
{
    $sql = "SELECT
                COALESCE(SUM(CASE
                    WHEN status IN ('Pendente', 'Parcial', 'Vencido') THEN saldo_devedor
                    ELSE 0
                END), 0) AS Total_receber,
                COALESCE(SUM(total_pago), 0) AS Total_pago
            FROM cobranca";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>
SELECT
    s.nome_servico,
    SUM(c.total_pago) AS total_pago
FROM cobranca AS c
INNER JOIN servico AS s
    ON s.pk_servico = c.fk_servico
WHERE c.status IN ('Pago', 'Parcial')
GROUP BY s.pk_servico, s.nome_servico
ORDER BY total_pago DESC