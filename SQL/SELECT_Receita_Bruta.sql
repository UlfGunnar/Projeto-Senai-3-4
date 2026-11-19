Select
	Sum(s.valor_servico) as TOTAL_RECEITA_BRUTA
From servico_agendamento as sa
Inner Join servico as s on sa.fk_servico = pk_servico
Inner Join agendamento as a on sa.fk_agendamento = a.pk_agendamento;