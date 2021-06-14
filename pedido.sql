-- criando o banco de dados
create database pedido;

-- entrando no banco 
use pedido;

-- criando a tabela 
create table cadastro (
id integer auto_increment primary key,
nome varchar(100),
telefone varchar(50),
email varchar(50),
documento int(50),
estado char(2),
cidade varchar(50),
descricao varchar(200)
);

select * from cadastro;