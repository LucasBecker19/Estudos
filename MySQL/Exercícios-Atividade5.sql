use atividade5;
#1
select a.nome as NomeAtendente from emprestimo e, atendente a, usuario u where u.cod_usuario = e.cod_usuario
and a.cod_atendente = e.cod_atendente and u.cod_usuario=2;

#2
select l.titulo as Livros from livro l, curso c, usuario u, emprestimo e, emprestimo_livro el
where c.cod_curso = 1 
and l.cod_livro = el.cod_livro
and e.cod_emprestimo = el.cod_emprestimo
and u.cod_usuario = e.cod_usuario
and c.cod_curso = u.cod_curso;

#3
select l.titulo as Livro, e.data as Data, e.hora as Hora from usuario u, emprestimo e, emprestimo_livro el, livro l
where u.cod_usuario = 1
and l.cod_livro = el.cod_livro
and e.cod_emprestimo = el.cod_emprestimo
and u.cod_usuario = e.cod_usuario;

#4
select l.titulo as Livro, e.data as Data, u.nome as Usuário, u.email as Email
from usuario u, emprestimo e, emprestimo_livro el, livro l
where l.cod_livro = el.cod_livro
and e.cod_emprestimo = el.cod_emprestimo
and u.cod_usuario = e.cod_usuario;

#5
select l.titulo as Livro, el.data_prevista_entrega as Data_Entrega, e.hora as Hora, 
a.nome as Atendente, u.nome as Usuário, c.nome as Curso 
from atendente a, usuario u, emprestimo e, emprestimo_livro el, livro l, curso c
where l.cod_livro = el.cod_livro
and c.cod_curso = u.cod_curso
and e.cod_emprestimo = el.cod_emprestimo
and u.cod_usuario = e.cod_usuario
and e.cod_atendente = a.cod_atendente;

#6
select l.titulo as Livro, el.data_prevista_entrega as Data_Entrega, 
e.hora as Hora, a.nome as Atendente, c.nome as Curso
from livro l, emprestimo e, emprestimo_livro el, curso c, usuario u, atendente a
where u.cod_usuario = 5 
and l.cod_livro = el.cod_livro
and e.cod_emprestimo = el.cod_emprestimo
and u.cod_usuario = e.cod_usuario
and e.cod_atendente = a.cod_atendente
and u.cod_curso = c.cod_curso;

#7
select l.titulo as Livro, u.nome as Usuário, c.nome as Curso
from livro l, usuario u, curso c, emprestimo e, emprestimo_livro el
where el.data_prevista_entrega = '2015-11-15'
and l.cod_livro = el.cod_livro
and e.cod_emprestimo = el.cod_emprestimo
and u.cod_usuario = e.cod_usuario
and u.cod_curso = c.cod_curso;