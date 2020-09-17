<?php 
/*1) - Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".*/
?>

<form>
	Digite um número
	<input type="number" name="numero">
	<input type="submit" name="btn_enviar">
	<br>
</form>

<?php 
	
	if(isset($_GET['numero']) && $_GET['numero']==NULL)
		echo "Você precisa inserir um número<br>";
	
	else if (isset($_GET['numero'])){
		$numero = $_GET['numero'];

		if ($numero==0) 
			echo "Igual a Zero!";
		else if ($numero<0)
			echo "Negativo";
		else if ($numero>0)
			echo "Positivo";
	}

 ?>