-- CRIAÇÃO DO BANCO DE DADOS
CREATE DATABASE TOPICOS;
-- CRIAÇÃO DAS TABELAS
CREATE TABLE LOGIN (ID INT AUTO_INCREMENT PRIMARY KEY, USUARIO VARCHAR(100), SENHA VARCHAR(100));
CREATE TABLE JOGOS (ID INT AUTO_INCREMENT PRIMARY KEY, TITULO VARCHAR(200), PRECO FLOAT, IMAGEM LONGBLOB);

