<?php 

$a =10;

function trocaValor(&$a){ //o & troca o valor da variável raiz

	$a=50;

	return $a;

}

echo $a;
echo "<br>";

echo trocaValor($a);
echo "<br>";

echo $a;
echo "<br>";


 ?>