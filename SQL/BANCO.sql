CREATE TABLE IF NOT EXISTS anamnese (
	pk_anamnese INT AUTO_INCREMENT PRIMARY KEY,
    fk_cliente INT NOT NULL,
    cabelo VARCHAR(150) NOT NULL,
    risco_saude VARCHAR(150) NOT NULL
)
DEFAULT CHARSET = utf8;

CREATE TABLE IF NOT EXISTS cliente (
	pk_cliente INT AUTO_INCREMENT PRIMARY KEY,
    fk_anamnese INT NOT NULL,
    nome_cliente VARCHAR(150) NOT NULL,
    celular_cliente CHAR(11),
    cpf CHAR(11),
    data_nascimento DATE,
    
    FOREIGN KEY (fk_anamnese) REFERENCES anamnese(pk_anamnese )
)
DEFAULT CHARSET = utf8;

CREATE TABLE IF NOT EXISTS credito_cliente (
	pk_credito  INT AUTO_INCREMENT PRIMARY KEY,
    fk_cliente INT NOT NULL,
    valor DECIMAL(10,2)  NOT NULL,
    
	FOREIGN KEY (fk_cliente) REFERENCES cliente(pk_cliente)
)
DEFAULT CHARSET = utf8;

CREATE TABLE IF NOT EXISTS servico (
		pk_servico  INT AUTO_INCREMENT PRIMARY KEY,
        nome_servico VARCHAR(80) NOT NULL, 
        tempo TIME NOT NULL
) 
DEFAULT CHARSET = utf8;

CREATE TABLE IF NOT EXISTS produtos (
	pk_produto INT AUTO_INCREMENT PRIMARY KEY,
    nome_produto VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    quantidade INT NOT NULL
)
DEFAULT CHARSET = utf8;

CREATE TABLE IF NOT EXISTS movimentacao_produto (
	pk_movimentacao INT AUTO_INCREMENT PRIMARY KEY,
    fk_produto INT,
    tipo_movimentacao ENUM('E', 'S') NOT NULL,
    valor_gasto DECIMAL(10,2),  
    
    FOREIGN KEY (fk_produto) REFERENCES produtos (pk_produto)
)
DEFAULT CHARSET = utf8;

CREATE TABLE IF NOT EXISTS funcionario (
	pk_funcionario INT AUTO_INCREMENT PRIMARY KEY,
    cpf_funcionario CHAR(11) NOT NULL,
    numero_celular CHAR(11),
    data_nascimento DATE
)
DEFAULT CHARSET = utf8;

CREATE TABLE IF NOT EXISTS agendamento (
	pk_agendamento INT AUTO_INCREMENT PRIMARY KEY,
    data_marcada DATE NOT NULL,
    fk_cliente INT,
    fk_servico INT,
    pagamento ENUM('Credito', 'Debito', 'Pix', 'Dinheiro', 'Boleto', 'Gratis') NOT NULL,
    observacao VARCHAR(150),
    status ENUM('Agendado', 'Confirmado', 'Em Andamento', 'Concluido', 'Cancelado', 'Faltou') NOT NULL DEFAULT 'Agendado',
    hora_marcada TIME,
    fk_funcionario INT,
    valor_tx_cobraca DECIMAL(10,2),
    
    FOREIGN KEY (fk_cliente) REFERENCES cliente (pk_cliente),
    FOREIGN KEY (fk_servico) REFERENCES servico (pk_servico),
    FOREIGN KEY (fk_funcionario) REFERENCES funcionario (pk_funcionario)
)
DEFAULT CHARSET = utf8;

CREATE TABLE IF NOT EXISTS cobranca (
	pk_cobranca INT AUTO_INCREMENT PRIMARY KEY,
    fk_cliente INT,
    data_inicio DATE,
    data_fim DATE,
    hora_inicio TIME,
    hora_fim TIME,
    saldo_devedor DECIMAL(10,2),
    observacao VARCHAR(150),
    status ENUM('Pendente', 'Parcial', 'Pago', 'Vencido','Cancelado') NOT NULL DEFAULT 'Pendente',
    total_pago DECIMAL(10,2),
    
    FOREIGN KEY (fk_cliente) REFERENCES cliente (pk_cliente)
)
DEFAULT CHARSET = utf8;

CREATE TABLE IF NOT EXISTS despesa (
	pk_despesa INT AUTO_INCREMENT PRIMARY KEY,
    tipo_despesa ENUM('DF', 'DR', 'DP') NOT NULL,
    pago BOOLEAN,
    fk_produto INT,
    valor_produto DECIMAL(10,2),
    categoria VARCHAR(15),
    data_inicio DATE,
    data_fim DATE,
    
    FOREIGN KEY (fk_produto) REFERENCES produtos (pk_produto)
)
DEFAULT CHARSET = utf8;


CREATE TABLE IF NOT EXISTS servico_agendamento (
	pk_servico_agendamento INT AUTO_INCREMENT PRIMARY KEY,
    fk_agendamento INT,
    fk_servico INT,
    
    FOREIGN KEY (fk_agendamento) REFERENCES agendamento (pk_agendamento),
	FOREIGN KEY (fk_servico) REFERENCES servico (pk_servico)
)
DEFAULT CHARSET = utf8;

CREATE TABLE IF NOT EXISTS produto_despesa (
	pk_produto_despesa INT AUTO_INCREMENT PRIMARY KEY,
    fk_produto INT,
    fk_despesa INT,
    
    FOREIGN KEY (fk_produto) REFERENCES produtos (pk_produto),
	FOREIGN KEY (fk_despesa) REFERENCES despesa (pk_despesa)
)
DEFAULT CHARSET = utf8;

CREATE TABLE IF NOT EXISTS funcionario_agendamento (
	pk_funcionario_agendamento INT AUTO_INCREMENT PRIMARY KEY,
    fk_agendamento INT,
    fk_funcionario INT,
    
    FOREIGN KEY (fk_funcionario) REFERENCES funcionario (pk_funcionario),
	FOREIGN KEY (fk_agendamento) REFERENCES agendamento (pk_agendamento)
)
DEFAULT CHARSET = utf8;