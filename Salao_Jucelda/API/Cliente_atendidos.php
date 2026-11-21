<?php
    Header("Content-Type: application/json; charset=utf-8");
    require "conexao.php";
    
    try {
        $sql = "Select
	                Count(pk_agendamento) 				as total_clientes,
                    date_format(data_marcada, '%Y/%m') 	as ano_mes
                From agendamento
                Where status = 'Concluido'
                Group by ano_mes
                Order by ano_mes;";

        echo json_encode($pdo->query($sql)->fetchAll(), JSON_NUMERIC_CHECK);
    } catch(PDOException $e) {
        http_response_code(500);
        error_log($e->getMessage());
        echo json_encode(['erro' => 'Falha ao buscar dados']);
    }
?>
