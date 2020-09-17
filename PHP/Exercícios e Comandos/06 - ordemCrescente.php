<?php /*6) Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5".*/ ?>

<form method="post">
	Digite o valor de A<input type="number" name="a">
	Digite o valor de B<input type="number" name="b"><br>
	<input type="submit" name="btn_enviar"> <br>
</form>

<?php 
	if(isset($_POST['a'])==NULL && isset($_POST['b'])==NULL)
			echo "Você deve preencher todos os campos";
	
	else if (isset($_POST['a']) && isset($_POST['b'])) {
		
		$a = $_POST['a'];
		$b = $_POST['b'];	
		if ($a<$b)
			echo "$a  $b";
		else
			echo "$b  $a";
		
	}

 ?>