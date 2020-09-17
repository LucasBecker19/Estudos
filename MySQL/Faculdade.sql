###drops
#drop database faculdade;
#drop table cursos;
#drop table professor;
#drop table matriculado;
#drop table aluno;

###selects 
#select * from cursos;
#select * from professor;
#select * from matriculado;
#select * from aluno;

###describres
#describe cursos;
#describe professor;
#describe matriculado;
#describe aluno;

###creates
create database if not exists Faculdade;
use Faculdade; 

create table if not exists professor(
cod text(1) primary key, nome text(1), telefone text(1)  
);

create table if not exists aluno(
cod text(1) primary key, nome text(1), telefone text(1)
);

create table if not exists cursos(
cod text(1) primary key, nome text(1), preco text(1), duracao text(1), codprofessor text(1) not null,
foreign key (codprofessor) references professor(cod)
);

create table if not exists matriculado(
codaluno text(1), codcurso text(1), primary key(codaluno, codcurso),
foreign key(codaluno) references aluno(cod), foreign key(codcurso) references cursos(cod)
);


#inserts
