CREATE DATABASE CRUD;
USE CRUD;

CREATE TABLE cliente (
cpf char(15) not null primary key,
nome varchar(50) not null,
telefone char(13) not null,
endereco varchar(250) not null
);

CREATE TABLE funcionario (
codigo char(4) not null primary key,
nome varchar(50) not null,
telefone char(13) not null,
cargo varchar(25) not null
);


