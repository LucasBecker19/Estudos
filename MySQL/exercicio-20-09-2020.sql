use atividade5;

#1. Listar o nome do usuario e o nome dos seus dependentes
select u.nome as Usuário, d.nome as Dependente from usuario u, dependente d
where u.cod_usuario = d.cod_usuario;

#2. Listar  o  nome  do  usuario  e  o  nome  dos  seus  dependentes  ordenado  por  usuario  e dependente em ordem alfabética.
select u.nome as Usuário, d.nome as Dependente from usuario u, dependente d
where u.cod_usuario = d.cod_usuario  order by u.nome, d.nome;

#3.  Mostrar a quantidade de dependentes que o usuario fedra tem 
select u.nome as Usuario_Nome, count(d.nome) as Qtd_Dependentes 
from usuario u, dependente d where u.cod_usuario = d.cod_usuario and u.nome like 'Fedra';

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

#7. Mostrar o dependente do usuario fedra que tem a maior idade ------------??????


#8. Mostrar o dependente do usuario fedra que tem a menor idade  -----------??????


#9. Mostrar a diferença entre o dependente de maior idade e de menor idade do usuario fedra
select datediff(max(d.datanascimento),min(d.datanascimento)) div 365 as Diferença_Idade from dependente d, usuario u
where u.cod_usuario = d.cod_usuario and u.nome like 'fedra';

#10. Mostrar a média de idade dos dependentes do usuario fedra
select AVG(datediff(now(),d.datanascimento)) div 365 as Média_Idades from dependente d, usuario u
where u.cod_usuario = d.cod_usuario and u.nome like 'fedra';

#11. Mostrar uma projeção de quanto cada funcionário receberia de aumento caso o salario fosse reajustado em 10%.
select nome as Funcionário, salario as Salário, round((salario*0.1),2) as Aumento from usuario;

#12. Mostrar o novo salario de cada funcionário com o reajuste de 10%.
select nome as Funcionario, round((salario*1.1),2) as Salário_Final from usuario;

#13. Mostrar o nome de todos os funcionarios que não comecem o nome pela letra a (usar o not like)
select nome from usuario where nome not like 'a%';

#14. Criar a coluna esporte na tabela dependente como varchar(20) e executar o script abaixo
alter table dependente add esporte varchar(20);
UPDATE dependente SET esporte = 'basquetinho' WHERE (cod_dependente = '1');
UPDATE dependente SET esporte = 'basquete' WHERE (cod_dependente = '2');
UPDATE dependente SET esporte = 'volei' WHERE (cod_dependente = '3');
UPDATE dependente SET esporte = 'basquetebol' WHERE (cod_dependente = '4');
UPDATE dependente SET esporte = 'futeba' WHERE (cod_dependente = '5');
UPDATE dependente SET esporte = 'futebol' WHERE (cod_dependente = '6');
UPDATE dependente SET esporte = 'voleibol' WHERE (cod_dependente = '7');

#15. Mostrar os dependentes agrupados por esporte
select nome as Dependente, esporte as Esporte  from dependente group by esporte;