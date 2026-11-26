lista de aniversariantes 

SELECT 

	nome cliente,
	data_nascimento

FROM cliente 

ORDER BY data_nascimento;
	
------------------------------------

listar cobrança (total)

SELECT
	
	SUM(saldo_devedor) 	AS Total_receber,
	SUM(total_pago)		AS Total_pago

FROM cobranca; 	 

listar cobrança (cada divida)

SELECT
    total_pago,
    nome_servico

FROM cobranca AS c;

INNER JOIN servico AS s 
    on s.fk_servico = c.pk_servico 

WHERE c.status = 'Pago';

------------------------------------

listar valor cliente devendo

SELECT

    cl.nome_cliente AS cliente,
    SUM(c.saldo_devedor) as devendo

FROM cobranca AS c

INNER JOIN cliente AS cl 
    on c.fk_cliente = cl.pk_cliente 

WHERE 
status IN ('Pendente', 'Parcial', 'Vencido');

------------------------------------

listar quantas vezes o cliente desmarcou

SELECT 

    c.nome_cliente AS cliente,
    COUNT(a.status) AS cancelado

FROM agendamento AS a

INNER JOIN cliente AS c 
    on a.fk_cliente = c.pk_cliente

WHERE status = 'Cancelado'

------------------------------------

listar quantas vezes o cliente foi atendido

SELECT 

    c.nome_cliente AS cliente,
    COUNT(a.status) AS concluidos

FROM agendamento AS a

INNER JOIN cliente AS c 
    on a.fk_cliente = c.pk_cliente

WHERE status = 'Concluido'
    AND a.data_marcada >= DATEFROMPARTS(YEAR(GETDATE()), MONTH(GETDATE()), 1)
    AND a.data_marcada < DATEADD(MONTH, 1, DATEFROMPARTS(YEAR(GETDATE()), MONTH(GETDATE()), 1));

------------------------------------

listar cliente cadastrados

SELECT

    pk_cliente
    nome_cliente
    celular_cliente
    cpf
    data_nascimento

FROM cliente

ORDER BY pk_cliente

------------------------------------

listar agendamentos

SELECT 

    a.pk_agendamento
    c.nome_cliente AS cliente,
    s.nome_servico AS servico,
    a.pagamento AS pagamento,
    a.observacao AS observacao,
    a.status AS status,
    a.hora_marcad AS hora,
    a.data_marcada AS data

FROM agendamento AS a

INNER JOIN cliente AS c 
    on a.fk_cliente = c.pk_cliente

INNER JOIN servico AS s
    on a.fk_servico = s.pk_servico;

------------------------------------

Listar produtos

SELECT

    nome_produto,
    preco,
    quantidade

FROM produtos
ORDER BY pk_produto

------------------------------------

Listar servicos

SELECT

    nome_servico,
    tempo,
    valor_servico

FROM servico

------------------------------------

