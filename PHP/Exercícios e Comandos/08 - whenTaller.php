<?php 
/*Chico tem 1,50m e cresce 2 centímetros por
mês, enquanto Juca tem 1,10m e cresce 3
centímetros por mês. Construir um algoritmos
que calcule e imprima quantos meses serão
necessários para que Juca seja maior que
Chico*/

$chico = 1.50;
$crescimentoChico = 0.02;
$juca = 1.10;
$crescimentoJuca = 0.03;


	for ($mes=0; $juca <= $chico; $mes++) { 
		$chico += $crescimentoChico;
		$juca += $crescimentoJuca;
		//echo "Mês: $mes<br>Chico: $chico m<br>Juca: $juca m<br><br>";
	}
	
	echo "São necessários $mes mes(es) para Juca ser maior que Chico!";

 ?>

