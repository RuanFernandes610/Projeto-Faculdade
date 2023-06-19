CREATE DATABASE bancoa3; USE bancoa3;

bancoa3CREATE TABLE login(
nome VARCHAR (300),
login VARCHAR (300),
senha VARCHAR (300),

PRIMARY KEY (login)
);

INSERT INTO login (nome,login,senha)
VALUES ('adminstrador','admin','fpb123');