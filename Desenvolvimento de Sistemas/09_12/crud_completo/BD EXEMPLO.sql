CREATE DATABASE loja;
USE loja;

CREATE TABLE categoria (
	cod char(3) PRIMARY key NOT null,
    categoria VARCHAR(15) not null
);

INSERT INTO categoria (cod,categoria)
values
('fru','Fruta'),
('ver','Verdura'),
('nop','Não Perecivel'),
('aut', 'Automotivo')
;

SELECT * from categoria;

CREATE TABLE produtos (
	id int primary key auto_increment,
    nome varchar(100) NOT null unique,
    valor numeric(9,2) not null,
    quantidade int not null
);

alter TABLE produtos ADD COLUMN cat CHAR(3) not null;

DESCRIBE produtos;

UPDATE produtos SET cat = 'fru';  

ALTER TABLE produtos ADD CONSTRAINT fk_categoria FOREIGN KEY(cat) REFERENCES categoria(cod);

ALTER TABLE produtos DROP FOREIGN KEY fk_categoria;

insert into produtos (nome, valor, quantidade) values('Maçã', 10.89,59);

SELECT id, nome, valor, quantidade, categoria FROM produtos INNER JOIN categoria on produtos.cat = categoria.cod;

SELECT * FROM produtos INNER JOIN categoria on produtos.cat = categoria.cod;

describe produtos;
DESCRIBE categoria;

-- drop table produtos;
-- drop database loja;