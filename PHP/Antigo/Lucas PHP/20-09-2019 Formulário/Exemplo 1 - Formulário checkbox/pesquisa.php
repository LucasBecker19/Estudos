<?php 

$nome = $_POST['nome'];
$idade = $_POST['idade'];

echo "Sr(a) $nome<br><br>";
//verificando as musicas
if (isset($_POST['musicas'])) //o isset verifica se algum gênero de música foi selecionado.
{
	echo "<b>Gênero(s) de música(s) preferida(s)</b><br>";
	foreach ($_POST['musicas'] as $indice => $valor) //
	{
		echo "- ".$valor."<br>"; //quando digitamos .$valor. chamamos a variável para apresentar o valor
	}
}
else //se o isset verificar que nenhum gênero foi selecionado, o programa entrará no else.
{
	echo "Você não marcou nenhum gênero musical. Caso mude de ideia estaremos à disposição. Obrigado! <br><br>";
}
echo "<br>";
//verificando os filmes
if (isset($_POST['filmes']))
{
	echo "<b>Gênero(s) de filme(s) preferido(s)</b><br>";
	foreach ($_POST['filmes'] as $indice => $valor) //foreach é um "for" do c++ melhorado. Índice é a posição (o,1,2...) e valor é o conteúdo (funk,rock, etc). Ele irá testar cada índice, pular os índices não selecionados e mostrar os índices selecionados.
	{
		echo "- ".$valor."<br>"; //quando digitamos .$valor. chamamos a variável para apresentar o valor
	}
}
else
{
	echo "Você não marcou nenhum gênero de filme. Caso mude de ideia estaremos à disposição. Obrigado! <br><br>";
}
echo "<br>";
//vereficando compartilhamento de informações
if (isset($_POST['fimes']) or isset($_POST['musicas']))
{
	if(isset ($_POST['respostas']))
	{
		echo"Suas respostas serão compartilhadas com outros usuários<br><br>";
	}
	else
	{
		echo"Apesar de você ter escolhido suas preferências, as mesmas não serão compartilhadas com outros usuários de acordo com sua decisão. Caso mude de ideia estaremos à sua disposição. Obrigado!<br><br>";
	}
}
else
{
	echo "Você não marcou nenhum gênero de filme e música. Por esse motivo você não tem informações para compartilhar. <br><br>";
}


 ?>