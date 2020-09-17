<?php /*7) Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que o valor da variável B. A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”.*/ ?>
<form method="post">
	Valor A<input type="number" name="a">
	Valor B<input type="number" name="b">
	<input type="submit" name="btn_enviar">
	<br>
</form>

<?php 

if (isset($_POST['a'])!=NULL && isset($_POST['b'])!=NULL) {
	$a = $_POST['a'];
	$b = $_POST['b'];

	echo $a<$b?"A menor que B":"";
	echo $a>$b?"A maior que B":"";
	echo $a==$b?"A igual a B":"";
}
else 
	echo "Você precisa inserir um número";

 ?>