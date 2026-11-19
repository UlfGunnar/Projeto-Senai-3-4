Select
	Count(pk_agendamento) 				as TOTAL_AGENDAMENTO,
    date_format(data_marcada, "%m/%Y") 	as DAT_REFERENCIA
From agendamento
Group by DAT_REFERENCIA;