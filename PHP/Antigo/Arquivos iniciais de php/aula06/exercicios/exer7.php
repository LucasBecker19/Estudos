<!DOCTYPE html>
<html>
<head>
	<title>Exercício 7</title>
	<meta charset="utf-8">
</head>
<body>
<form method="GET" action="exer7.php">
	Digite o seu salário: <input type="text" name="salario" required=""> <br><br>
	<input type="submit" name="btn_enviar" value="Enviar">
	
</form>

<?php 
if (isset($_GET['salario'])) {
$salario = $_GET['salario'];
$imposto = $salario *0.2;
echo "O imposto é: $imposto";
}

 ?>


</body>
</html>