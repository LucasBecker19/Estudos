use atividade5;
#1. Listar o nome do usuario e o nome dos seus dependentes
select u.nome as Usuário, d.nome as Dependente from usuario u, dependente d
where u.cod_usuario = d.cod_usuario;

#2. Listar  o  nome  do  usuario  e  o  nome  dos  seus  dependentes  ordenado  por  usuario  e dependente em ordem alfabética.
select u.nome as Usuário, d.nome as Dependente from usuario u, dependente d
where u.cod_usuario = d.cod_usuario  order by u.nome, d.nome;

#3.  Mostrar a quantidade de dependentes que o usuario fedra tem ----------------------------------
select count(*) as Qtd_Dependentes from dependente d, usuario u
where u.cod_usuario = d.cod_usuario and  u.nome like '%freda%';

#4. Criar a coluna sexo na tabela dependente como char(1) e inserir M ou F de acordo com o nome do dependente.
alter table dependente add sexo char(1);
update dependente set sexo = 'F' where cod_dependente = 1;
update dependente set sexo = 'M' where cod_dependente = 2;
update dependente set sexo = 'F' where cod_dependente = 3;
update dependente set sexo = 'F' where cod_dependente = 4;
update dependente set sexo = 'M' where cod_dependente = 5;
update dependente set sexo = 'M' where cod_dependente = 6;
update dependente set sexo = 'F' where cod_dependente = 7;

#5. Mostrar quantos dependentes são do sexo masculino.
select count(*) as Qtd_Homens from dependente where sexo like 'M'; 

#6. Mostrar quantos dependentes são do sexo feminino.
select count(*) as Qtd_Mulheres from dependente where sexo like 'F'; 

#7. Mostrar o dependente do usuario fedra que tem a maior idade --------------------------------
select MAX(d.datanascimento) as Nascimento_Maior, d.nome as Nome from dependente d, usuario u 
where u.cod_usuario = d.cod_usuario and u.nome like 'freda';

#8. Mostrar o dependente do usuario fedra que tem a menor idade --------------------------------
select min(d.datanascimento) from dependente d, usuario u where d.cod_usuario = u.cod_usuario and u.nome like '%freda%';

#9. Mostrar a diferença entre o dependente de maior idade e de menor idade do usuario fedra
#10. Mostrar a média de idade dos dependentes do usuario fedra