#DROP DATABASE IF EXISTS teste1;
CREATE DATABASE IF NOT EXISTS teste1;
USE teste1;

CREATE TABLE IF NOT EXISTS aluno
(
matricula INT(11) PRIMARY KEY, nome VARCHAR(45), sexo CHAR(1) DEFAULT 'F' 
);

INSERT INTO aluno (matricula,nome) VALUES (1,"Juvenaldo");

SELECT * FROM aluno;