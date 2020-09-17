<?php /*5) Solicite a entrada de um número e descubra se um número digitado é par ou ímpar. */ ?>

<form method="post">
	Digite um número
	<input type="number" name="numero">
	<input type="submit" name="btn_enviar">
	<br>
</form>

<?php 

	$isset = isset($_POST['numero']);

	if ($isset!=NULL) {
		$n = intval($_POST['numero']); // transforma string em int

		if ($n % 2==0) 
			echo "Par"; 
		
		else
			echo "Ímpar";

	}
	else if ($isset==NULL)
		echo "Você deve inserir um número";

 ?>