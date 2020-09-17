<?php 

	$dt = new DateTime();

	echo "Data atual: " . $dt->format("d/m/Y H:i:s"); //irá mostrar a data no formato especificado
	
	echo "<br>";
	
	///////////////////////////////////////////
	//Adicionando um período de dias
	$periodo = new DateInterval("P15D"); //'P'eríodo de '15' 'D'ias

	$dt->add($periodo); //a classe add() aguarda um intervalo de período

	echo "Adicionando 15 dias" . $dt->format("d/m/Y H:i:s");

	echo "<br>";

	///////////////////////////////////////////
	//Subtraindo um período de dias
	$periodo = new DateInterval("P5D");

	$periodo->invert = 1; //transforma em negativo, ou seja, 5 dias atrás

	$dt->add($periodo);

	echo "Subtraindo 5 dias: " . $dt->format("d/m/Y H:i:s");

	echo "<br>";

	///////////////////////////////////////////
	//Somando 10 horas
	$periodo = new DateInterval("PT10H");//periodo de tempo de 10 horas

	$dt->add($periodo);

	echo "Adicionando 10h: " . $dt->format("d/m/Y H:i:s");

	echo "<br>";

 ?>