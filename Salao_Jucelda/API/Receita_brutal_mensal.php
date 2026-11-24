<?php 
    Header("Content-type: application/json; charset=utf-8");
    require "conexao.php";

    try {
        $sql = "Select 
                    date_format(a.data_marcada, '%Y/%m')    as mes_ano, 
                    Sum(s.valor_servico)                    as total_receita_bruta 
                From agendamento as a 
                Inner Join servico_agendamento as sa on a.pk_agendamento = sa.fk_agendamento 
                Inner Join servico as s on s.pk_servico = sa.fk_servico 
                Where Status = 'Concluido' 
                Group by mes_ano 
                Order by mes_ano;";

        echo json_encode($pdo->query($sql)->fetchAll(), JSON_NUMERIC_CHECK);
    } catch(PDOException $e) {
        http_response_code(500);
        error_log($e->getMessage());
        echo json_encode(['erro' => 'Falha ao buscar dados']);
    }
?>