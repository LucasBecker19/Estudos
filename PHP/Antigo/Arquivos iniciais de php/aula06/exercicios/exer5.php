<!DOCTYPE html>
<html>
<head>
	<title>Exercício 5</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="GET" action="exer5.php">
		<h3>Média aritmética de dois números</h3> <br><br>
		Digite o Primeiro Número: <input type="text" name="n1" required=""><br>
		Digite o Segundo Número: <input type="text" name="n2" required=""><br>
		<input type="submit" name="btnEnviar"  value="Enviar">

	</form>

	<?php 
	if (isset($_GET['n1']) && isset($_GET['n2']))  {
       $n1 = $_GET['n1'];
       $n2 = $_GET['n2'];
       $media = ($n1+$n2)/2;
       echo "A Média aritmetica dos números $n1 e $n2 é: $media";
}

	 ?>

</body>
</html>