#drop database if exists empresa;
###CREATES
create database if not exists empresa;
USE empresa;

create table if not exists projeto(
cod int(11) primary key, nome varchar(45) not null, nomegerente varchar(45) not null
);

create table if not exists departamento(
coddepartamento int(11) primary key, nome varchar(45) not null
);

create table if not exists empregado(
matricula int(11) primary key, nome varchar(45) not null, codprojeto int(11), coddepartamento int(11),
foreign key(codprojeto) references projeto(cod), foreign key (coddepartamento) references departamento(coddepartamento)
);

alter table empregado modify codprojeto int(11) not null;

INSERT INTO projeto values (1, 'Projeto1', 'João');
INSERT INTO projeto values (2, 'Projeto2', 'Joaquim');
INSERT INTO projeto values (3, 'Projeto3', 'Cleber');

INSERT INTO departamento values (1,'DASS');
INSERT INTO departamento values(2,'DALTEC');
INSERT INTO departamento values(3,'Seilá');

INSERT INTO empregado values (123,'Lucas',1,1);
INSERT INTO empregado values (321,'Lucaszzz',1,2);
INSERT INTO empregado values (456,'aa',3,3);

SELECT * FROM projeto;
SELECT * FROM departamento;
SELECT * from empregado;