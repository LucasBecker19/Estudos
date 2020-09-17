<!DOCTYPE html>
<html>
<head>
	<title>Exercício 2</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="GET" action="exer2.php">
		<h3>Multiplicar três números</h3> <br><br>
		Digite o Primeiro Número: <input type="text" name="n1" required=""><br>
		Digite o Segundo Número: <input type="text" name="n2" required=""><br>
		Digite o Terceiro Número: <input type="text" name="n3" required=""><br><br>
		<input type="submit" name="btnEnviar"  value="Enviar">

	</form>

	<?php 
	if (isset($_GET['n1']) && isset($_GET['n2']) && isset($_GET['n3']))  {
       $n1 = $_GET['n1'];
       $n2 = $_GET['n2'];
       $n3 = $_GET['n3'];
       $multi = $n1*$n2*$n3;
       echo "A multiplicação dos números $n1*$n2*$n3=$multi";
}

	 ?>

</body>
</html>