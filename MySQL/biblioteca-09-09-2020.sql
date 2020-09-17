select nome, email from atendente;

select nome from curso where cod_curso=3;

select * from livro;

select titulo from livro where ano_publicacao =2007;

select titulo from livro where edicao = 'Editora Pearson';

select edicao from livro where titulo like '%software';

#####################
alter table usuario add numero int(11);
describe usuario;
select numero, cod_usuario from usuario;
alter table usuario modify numero char(14);
update usuario set numero = '(48)99999-9999' where cod_usuario=1;
update usuario set numero = '(48)99999-9998' where cod_usuario=2;
update usuario set numero = '(48)99999-9997' where cod_usuario=3;
update usuario set numero = '(48)99999-9996' where cod_usuario=4;
update usuario set numero = '(48)99999-9995' where cod_usuario=5;
#####################

select numero from usuario where nome = 'Alex';

select nome from usuario where numero like '(48)99999%';

select nome from usuario where numero like '%999_';

select nome from usuario where numero like '%9__';

select isbn as Identificador ,titulo as NomeLivro from livro ;

select usuario.nome as Usuário , curso.nome as Curso, atendente.nome as Atendente 
from usuario, curso, atendente, emprestimo
where usuario.cod_curso = curso.cod_curso and usuario.cod_usuario = emprestimo.cod_usuario and atendente.cod_atendente = emprestimo.cod_atendente;
