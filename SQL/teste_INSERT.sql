-- =============================================
-- INSERTS de teste para desenvolvimento de query
-- =============================================

-- 1. ANAMNESE

/*
INSERT INTO anamnese (fk_cliente, cabelo, risco_saude) VALUES
(1, 'Cabelo cacheado, ressecado e com química', 'Alergia a amônia'),
(2, 'Cabelo liso, oleoso e natural', 'Nenhum risco informado'),
(3, 'Cabelo ondulado, tingido e quebradiço', 'Alergia a determinados produtos');
*/

-- 2. CLIENTE

INSERT INTO cliente (nome_cliente, celular_cliente, cpf, data_nascimento) VALUES
('Ana Carolina Silva', '47999998888', '12345678901', '1998-05-12'),
('Mariana Oliveira', '47988887777', '23456789012', '2000-09-23'),
('Juliana Santos', '47977776666', '34567890123', '1995-02-18');


-- 3. CREDITO_CLIENTE

INSERT INTO credito_cliente (fk_cliente, valor) VALUES
(1, 150.00),
(2, 80.50),
(3, 200.00);


-- 4. SERVICO

INSERT INTO servico (nome_servico, tempo, valor_servico) VALUES
('Corte Feminino', '01:00:00', 80.00),
('Pintura', '02:30:00', 180.00),
('Escova', '00:45:00', 50.00);


-- 5. PRODUTOS

INSERT INTO produtos (nome_produto, preco, quantidade) VALUES
('Shampoo Profissional', 45.90, 20),
('Condicionador Hidratante', 39.90, 15),
('Tintura Capilar', 29.90, 30);


-- 6. MOVIMENTACAO_PRODUTO

INSERT INTO movimentacao_produto (fk_produto, tipo_movimentacao, valor_gasto) VALUES
(1, 'E', 459.00),
(2, 'E', 199.50),
(3, 'S', 29.90);


-- 7. FUNCIONARIO

INSERT INTO funcionario (cpf_funcionario, numero_celular, nome_funcionario, data_nascimento) VALUES
('45678901234', '47966665555', 'Fernanda Costa', '1990-04-15'),
('56789012345', '47955554444', 'Camila Ferreira', '1996-08-21'),
('67890123456', '47944443333', 'Roberto Almeida', '1988-12-10');


-- 8. AGENDAMENTO

INSERT INTO agendamento
(data_marcada, fk_cliente, fk_servico, pagamento, observacao, status, hora_marcada, fk_funcionario) VALUES
('2026-11-16', 1, 1, 'Pix', 'Cliente deseja corte em camadas', 'Confirmado', '09:00:00', 1),
('2026-11-17', 2, 2, 'Credito', 'Deseja pintar o cabelo de castanho', 'Agendado', '14:00:00', 2),
('2026-11-18', 3, 3, 'Dinheiro', 'Escova para evento', 'Agendado', '10:30:00', 3);


-- 9. COBRANCA

INSERT INTO cobranca
(fk_cliente, fk_servico, data_inicio, data_fim, hora_inicio, hora_fim, saldo_devedor, observacao, status, total_pago) VALUES
(1, 1, '2026-11-10', '2026-11-10', '09:00:00', '10:00:00', 0.00, 'Pagamento realizado integralmente', 'Pago', 80.00),
(2, 2, '2026-11-11', '2026-11-11', '14:00:00', '16:30:00', 90.00, 'Pagamento realizado parcialmente', 'Parcial', 90.00),
(3, 3, '2026-11-12', '2026-11-12', '10:00:00', '10:45:00', 50.00, 'Aguardando pagamento', 'Pendente', 0.00);


-- 10. DESPESA

INSERT INTO despesa
(tipo_despesa, pago, fk_produto, valor_produto, categoria, data_inicio, data_fim) VALUES
('DF', TRUE, NULL, NULL, 'Aluguel', '2026-11-01', '2026-11-30'),
('DR', TRUE, 1, 459.00, 'Produtos', '2026-11-05', '2026-11-05'),
('DP', FALSE, NULL, NULL, 'Energia', '2026-11-01', '2026-11-30');


-- 11. SERVICO_AGENDAMENTO

INSERT INTO servico_agendamento (fk_agendamento, fk_servico) VALUES
(1, 1),
(2, 2),
(3, 3);


-- 12. PRODUTO_DESPESA

INSERT INTO produto_despesa (fk_produto, fk_despesa) VALUES
(1, 2),
(2, 2),
(3, 2);


-- 13. FUNCIONARIO_AGENDAMENTO

INSERT INTO funcionario_agendamento (fk_agendamento, fk_funcionario) VALUES
(1, 1),
(2, 2),
(3, 3);


-- =============================================
-- CONSULTA PARA CONFERIR OS REGISTROS
-- =============================================

-- SELECT * FROM anamnese;
SELECT * FROM cliente;
SELECT * FROM credito_cliente;
SELECT * FROM servico;
SELECT * FROM produtos;
SELECT * FROM movimentacao_produto;
SELECT * FROM funcionario;
SELECT * FROM agendamento;
SELECT * FROM cobranca;
SELECT * FROM despesa;
SELECT * FROM servico_agendamento;
SELECT * FROM produto_despesa;
SELECT * FROM funcionario_agendamento;
