CREATE DATABASE web_login_test
CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE web_login_test;

CREATE TABLE login (
	id SMALLINT AUTO_INCREMENT PRIMARY KEY,
	e_mail VARCHAR(50) NOT NULL,
    senha VARCHAR(30) NOT NULL
);

CREATE USER 'test1'@'localhost' IDENTIFIED BY 'pass123';
GRANT INSERT, SELECT, UPDATE, DELETE ON web_login_test.login TO 'test1';

INSERT login(e_mail, senha) VALUES ('aluno@senai.br', 'senha123');
