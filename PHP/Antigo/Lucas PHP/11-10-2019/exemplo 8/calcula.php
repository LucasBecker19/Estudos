<?php 

include("calculos.inc.php");
include("calculos1.inc.php");
$operacoes=$_POST['operacoes'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

if ($operacoes=="soma")
	echo "A soma dos números $n1 + $n2 = ".soma($n1,$n2);

else
	echo "A subtração dos números $n1 - $n2 = ".subtracao($n1,$n2);


if ($operacoes =="soma") 
	$simbolo = "+";

else
	$simbolo = "-";


echo "<br><br><br>A $operacoes dos números $n1 $simbolo $n2 = ".oper($operacoes,$n1,$n2);



 ?>