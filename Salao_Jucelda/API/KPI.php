<?php 
    Header("Content-Type: application/json; charset=utf-8");
    require "conexao.php";

    try {
        $valorReceber = $pdo->query ("Select
	                                    Sum(s.valor_servico) as Total_receber
                                    From servico_agendamento as sa
                                    Inner Join servico as s on sa.fk_servico = pk_servico
                                    Inner Join agendamento as a on sa.fk_agendamento = a.pk_agendamento
                                    Where a.status = 'Agendado';")->fetchColumn();
                                        
        $ReceitaBruta = $pdo->query ("Select
	                                    Sum(s.valor_servico) as TOTAL_RECEITA_BRUTA
                                        From servico_agendamento as sa
                                      Inner Join servico as s on sa.fk_servico = pk_servico
                                      Inner Join agendamento as a on sa.fk_agendamento = a.pk_agendamento
                                      Where a.status = 'Concluido';")->fetchColumn();               

        echo json_encode([
            'Valor_receber' => (float) $valorReceber,
            'Receita_bruta'  => (float) $ReceitaBruta
        ]);

    } catch (PDOException $e) {
        http_response_code(500);
        error_log($e->getMessage());
        echo json_encode(['erro' => 'Falha ao buscar dados']);
    }
?>