CREATE DATABASE IF NOT EXISTS salaoju
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE salaoju;

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
    valor DECIMAL(5,2)  NOT NULL,
    
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
    preco DECIMAL(5,2) NOT NULL,
    quantidade INT NOT NULL
)
DEFAULT CHARSET = utf8;

CREATE TABLE IF NOT EXISTS movimentacao_produto (
	pk_movimentacao INT AUTO_INCREMENT PRIMARY KEY,
    fk_produto INT,
    tipo_movimentacao INT,
    
)
DEFAULT CHARSET = utf8;