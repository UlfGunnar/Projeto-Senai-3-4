<?php 
    Header("Content-Type: application/json; charset=utf-8");
    require "conexao.php";

    $ano = isset($_GET['ano']) && $_GET['ano'] !== '' ? (int) $_GET['ano'] : null;

    function total(PDO $pdo, string $sql, ?int $ano): float {
        $stmt = $pdo->prepare($sql);
        $stmt->execute($ano ? [$ano] : []);
        return (float) $stmt->fetchColumn();
    }

    $filtroAgendamento = $ano ? "AND YEAR(a.data_marcada) = ?" : "";
    $filtroDespesa     = $ano ? "WHERE YEAR(data_marcada) = ?" : "";

    try {
        $valorReceber = total($pdo, "
            Select Sum(s.valor_servico)
            From servico_agendamento as sa
            Inner Join servico as s on sa.fk_servico = s.pk_servico
            Inner Join agendamento as a on sa.fk_agendamento = a.pk_agendamento
            Where a.status = 'Agendado' $filtroAgendamento", $ano);

        $receitaBruta = total($pdo, "
            Select Sum(s.valor_servico)
            From servico_agendamento as sa
            Inner Join servico as s on sa.fk_servico = s.pk_servico
            Inner Join agendamento as a on sa.fk_agendamento = a.pk_agendamento
            Where a.status = 'Concluido' $filtroAgendamento", $ano);

        $valorDespesa = total($pdo, "
            Select Sum(valor_despesa)
            From despesa $filtroDespesa", $ano);

        echo json_encode([
            'Valor_receber' => $valorReceber,
            'Receita_bruta' => $receitaBruta,
            'Valor_despesa' => $valorDespesa,
            'Valor_lucro'   => $receitaBruta - $valorDespesa
        ]);

    } catch (PDOException $e) {
        http_response_code(500);
        error_log($e->getMessage());
        echo json_encode(['erro' => 'Falha ao buscar dados']);
    }
?>