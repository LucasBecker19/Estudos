#drop database Atividade1;
create database Atividade1;
use Atividade1;

create table if not exists projeto(
cod int (11) primary key, nome varchar(45), nomegerente varchar(45)
);

create table if not exists departamento(
coddepartamento int(11) primary key, nome varchar(45)
);

create table if not exists empregado(
matricula int(11) primary key, nome varchar(45), codprojeto int(11) not null, coddepartamento int(11),
foreign key(codprojeto) references projeto(cod), 
foreign key(coddepartamento) references departamento(coddepartamento)
);

#describe empregado;
#describe departamento;
#describe projeto;

alter table empregado modify matricula int(3);
alter table empregado change nome nomeempregado varchar(70);
alter table empregado add telefone char(14);
alter table empregado add sexo set ('M','F');

alter table departamento add setor varchar(30);

alter table projeto add patrocinador varchar(40);

######INSERTS PROJETO
insert into projeto values (1,'Robótica','Paulo Renato','Amazon');
insert into projeto values (2,'Inteligência Artificial','Roberto Santos','Amazon');
insert into projeto values (3,'Internet das Coisas','Alan Firmino','Amazon');
insert into projeto values (4,'Análise de DNA','Patricia Pereira','UNIMED');
insert into projeto values (5,'Refrigerador Inteligente','Marta Lucas','CLIMATEL');

######INSERTS DEPARTAMENTO
insert into departamento values (1,'Informática','Exatas');
insert into departamento values (2,'Biologia','Saúde');
insert into departamento values (3,'Mecânica','Engenharia');

######INSERTS EMPREGADO
insert into empregado values (1,'Paulo Renato',1,1,'(48)99999-8888','M');
insert into empregado values (2,'Roberto Santos',2,1,'(48)88888-8888','M');
insert into empregado values (3,'Patricia Pereira',4,2,'(48)99999-7777','M');
insert into empregado values (4,'Alan Firmino',3,1,'(48)88888-7777','M');
insert into empregado values (5,'Marta Lucas',5,3,'(48)99988-2222','F');
insert into empregado values (6,'Felipe Bras',4,2,'(48)99988-2221','F');
insert into empregado values (7,'Raquel Santos',2,1,'(48)99988-1111','F');

#####UPDATES EMPREGADO
update empregado set sexo = 'M' where matricula=5;
update empregado set codprojeto = 1, coddepartamento= 1, sexo ='M' where matricula = 6;
update empregado set codprojeto = 4, coddepartamento= 2, sexo ='F' where matricula = 7;

#select * from empregado;