SELECT 
	s.nome_servico,
    Count(sa.fk_servico) as quantidade_servico
From servico as s
Inner Join servico_agendamento as sa on sa.fk_servico = s.pk_servico
Group by s.nome_servico;