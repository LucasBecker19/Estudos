#DROP 
#DROP DATABASE IF EXISTS atv1;
#DROP TABLE IF EXISTS sexo;
#DROP TABLE IF EXISTS estcivil;
#DROP TABLE IF EXISTS telefone;
#DROP TABLE IF EXISTS pessoa;

#CREATE
CREATE DATABASE IF NOT EXISTS atv1;
USE atv1;

CREATE TABLE IF NOT EXISTS sexo
(
idsexo INT(11) PRIMARY KEY, sexo CHAR(1) DEFAULT 'M'
); 

CREATE TABLE IF NOT EXISTS estcivil
(
idestcivil INT(11) PRIMARY KEY, estcivil VARCHAR(20)
);

CREATE TABLE IF NOT EXISTS pessoa
(
idpessoa INT(11) PRIMARY KEY, nome VARCHAR(50), datanasc DATE, 
idestcivil INT(11), idsexo INT(11), dependente_pessoa int(11),
FOREIGN KEY (idestcivil) REFERENCES estcivil(idestcivil),
FOREIGN KEY (idsexo) REFERENCES sexo(idsexo),
FOREIGN KEY (dependente_pessoa) REFERENCES pessoa(idpessoa)
);

CREATE TABLE IF NOT EXISTS telefone
(
idpessoa INT(11), celular CHAR(14),
PRIMARY KEY (idpessoa,celular),
FOREIGN KEY (idpessoa) REFERENCES pessoa(idpessoa)
);


#INSERT
INSERT INTO sexo (idsexo) VALUES (1);
INSERT INTO sexo  VALUES (2,'F');

INSERT INTO estcivil VALUES (1,'Solteiro');
INSERT INTO estcivil VALUES (2,'Casado');
INSERT INTO estcivil VALUES (3,'Divorciado');

INSERT INTO pessoa VALUES (1,'José','1970/10/19', 2, 1, null);
INSERT INTO pessoa VALUES (2,'Felipe','1973/10/18', 3, 1, null);
INSERT INTO pessoa VALUES (3,'Maria','1972/10/17', 2, 2, null);
INSERT INTO pessoa VALUES (4,'Ricardo','1971/10/16', 1, 1, 1);
INSERT INTO pessoa VALUES (5,'Gustavo','1970/10/15', 2, 1, 1);
INSERT INTO pessoa VALUES (6,'MARTA','1970/10/14', 2, 1, 1);
INSERT INTO pessoa VALUES (7,'Sabrina','1970/10/13', 2, 1, 1);
INSERT INTO pessoa VALUES (8,'Paulo','1970/10/12', 2, 1, null);
INSERT INTO pessoa VALUES (9,'Beatriz','1970/10/11', 2, 1, null);

INSERT INTO telefone VALUES (1,'(48)99999-9999');
INSERT INTO telefone VALUES (1,'(48)99999-9998');
INSERT INTO telefone VALUES (2,'(48)99999-9997');
INSERT INTO telefone VALUES (2,'(48)99999-9996');
INSERT INTO telefone VALUES (3,'(48)99999-9995');
INSERT INTO telefone VALUES (3,'(48)99999-9994');

#SELECT
#SELECT * FROM sexo;
#SELECT * FROM estcivil;
#SELECT * FROM pessoa;
#SELECT * FROM telefone;