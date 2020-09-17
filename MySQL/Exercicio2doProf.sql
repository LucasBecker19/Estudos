# drop database if exists atividade2;
create database if not exists atividade2;
use atividade2;
# criação das tabelas

create table if not exists sexo
(
idsexo int(11) primary key, sexo char(1) default 'M'
);


create table if not exists estcivil 
(
idestcivil int(11) primary key, estcivil varchar(2)
);

create table if not exists pessoa 
(
idpessoa int(11) primary key, nome varchar(45), datanasc date, dependente_pessoa int(11), pessoa_idestcivil int(11), pessoa_idsexo int(11), 
foreign key (dependente_pessoa) references pessoa(idpessoa), foreign key (pessoa_idestcivil) references estcivil(idestcivil), foreign key (pessoa_idsexo) 
references sexo(idsexo)
);

create table if not exists telefone 
(
idpessoa int(11), celular char(14), primary key(idpessoa,celular), foreign key (idpessoa) references pessoa(idpessoa)
);