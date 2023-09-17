CREATE DATABASE loja CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE loja;

CREATE TABLE produto(
	id SMALLINT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    categoria VARCHAR(50) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    quantidade INT(5) NOT NULL
);

INSERT INTO produto(nome, categoria, preco, quantidade)
VALUES('Lenovo Ideapad S145', 'Notebook', 2250.50, 25);

DESCRIBE produto;
SELECT * FROM produto;

UPDATE loja.produto SET categoria = 'Notebooks' WHERE id = 1;
