###DROPS
#DROP DATABASE escola;
#DROP TABLE aluno;
#DROP TABLE curso;



###SELECTS e DESCRIBES
#SELECT * FROM aluno;
#DESCRIBE aluno;



###CREATES
CREATE DATABASE IF NOT EXISTS escola;
USE escola;

CREATE TABLE IF NOT EXISTS curso
(
idcurso int(11) PRIMARY KEY, nome VARCHAR(45)
);

CREATE TABLE IF NOT EXISTS aluno
(
idaluno int(11) PRIMARY KEY, nome VARCHAR(45)
);



###ALTER TABLE (DDL)
#Adicionar uma coluna em aluno
ALTER TABLE aluno ADD cpf char(11);

#Remover uma coluna em aluno
ALTER TABLE aluno DROP cpf;

#Modificar o tipo de dado da coluna
ALTER TABLE aluno MODIFY nome VARCHAR(100);

#Modificar o nome e o tipo
#ALTER TABLE aluno CHANGE nome nomealuno VARCHAR(90);

#Apagar chave primária
ALTER TABLE aluno DROP PRIMARY KEY;

#Adicionar chave primária
ALTER TABLE aluno ADD PRIMARY KEY (idaluno);

#Apagar chave primária e adicionar outras duas
#ALTER TABLE aluno DROP PRIMARY KEY, ADD PRIMARY KEY (idaluno, nome);

#Adicionando uma coluna e referenciando como uma chave estrangeira
ALTER TABLE aluno ADD idcurso int(11);
ALTER TABLE aluno ADD FOREIGN KEY (idcurso) REFERENCES curso(idcurso);



###INSERTS 
INSERT INTO curso VALUES (1,'GTI');
INSERT INTO curso VALUES (2,'METEOROLOGIA');

INSERT INTO aluno VALUES (1,'Lucas',1);
INSERT INTO aluno VALUES (2,'Maria',2);
INSERT INTO aluno VALUES (3,'Gustavo',2);



###DELETE
#DELETE FROM aluno; #Isso apaga todos os dados da tabela
DELETE FROM aluno WHERE idaluno=1; #Isso apagar apenas o aluno 1
DELETE FROM aluno WHERE idcurso=2; #Isso apagar todos os alunos do curso 2