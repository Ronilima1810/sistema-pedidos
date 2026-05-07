CREATE DATABASE pedidos_online;
USE pedidos_online;

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    descricao TEXT,
    preco DECIMAL(10,2),
    imagem VARCHAR(255),
    ativo INT DEFAULT 1
);

CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_cliente VARCHAR(255),
    email_cliente VARCHAR(255),
    whatsapp VARCHAR(30),
    valor_total DECIMAL(10,2),
    status VARCHAR(50),
    data_pedido TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE itens_pedido (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pedido_id INT,
    produto_id INT,
    quantidade INT,
    cor VARCHAR(100),
    tamanho VARCHAR(50),
    texto_personalizado TEXT,
    arte_upload VARCHAR(255),
    arte_pronta VARCHAR(255),
    valor_unitario DECIMAL(10,2)
);

CREATE TABLE status_historico (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pedido_id INT,
    status VARCHAR(100),
    data_status TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);