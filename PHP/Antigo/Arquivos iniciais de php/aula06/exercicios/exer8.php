<!DOCTYPE html>
<html>
<head>
	<title>Exer 8</title>
	<meta charset="utf-8">
</head>
<body>

<form method="GET" action="exer8.php">
	
	Operações Aritméticas Básicas <br><br>
	Digite o primeiro numero: <input type="text" name="n1" required=""><br>
	Digite o segundo numero: <input type="text" name="n2" required=""><br>
	<input type="submit" name="btn_enviar" value="Enviar">
	
</form>

<?php 
if (isset($_GET['n1']) && isset($_GET['n2']) ){

$n1= $_GET['n1'];
$n2= $_GET['n2'];

echo "A soma dos números $n1 e $n2 é: ".($n1+$n2)."<br>";
echo "A subtração dos números $n1 e $n2 é: ".($n1-$n2)."<br>";
echo "A multiplicação dos números $n1 e $n2 é: ".($n1*$n2)."<br>";
echo "A divisão dos números $n1 e $n2 é: ".($n1/$n2)."<br>";

}
 ?>






</body>
</html>