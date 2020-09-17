#DROPS
#DROP DATABASE IF EXISTS teste;
#DROP TABLE IF EXISTS estado;
#DROP TABLE IF EXISTS cidade;

#CREATES DATABASE E TABLE

CREATE DATABASE IF NOT EXISTS teste;
USE teste;

CREATE TABLE IF NOT EXISTS estado
(
cod_estado INT(11) PRIMARY KEY, nome VARCHAR(45) NOT NULL, uf CHAR(2)
);

CREATE TABLE IF NOT EXISTS cidade
(
cod_cidade INT(11) PRIMARY KEY, nome VARCHAR(45) NOT NULL, cod_estado INT(11),
FOREIGN KEY (cod_estado) REFERENCES estado(cod_estado) on delete restrict
#on delete restrict ==== bloqueia, nao permite (quando tem (FK) chave estrangeira)
#on delete cascade  ==== apaga em cascata (exclui junto a tabela referenciada com FK
#on delete set null ==== vai deixar o campo nulo

#ao invés de delete, posso usar update nas 3 situações acima
);

#INSERTS

INSERT INTO estado VALUES (1,"Santa Catarina","SC");
INSERT INTO estado VALUES (2,"Paraná","PR");
INSERT INTO estado VALUES (3,"Rio Grande do Sul","RS");

INSERT INTO cidade VALUES (1,"Florianópolis",1);
INSERT INTO cidade VALUES (2,"Curitiba",2);
INSERT INTO cidade VALUES (3,"Porto Alegre",3);

#SELECT * FROM estado;
#SELECT * FROM cidade;

#DELETE -- como apagar linhas;

#DELETE FROM estado WHERE cod_estado=1;