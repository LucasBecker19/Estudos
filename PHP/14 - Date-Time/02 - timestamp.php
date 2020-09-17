<?php 

	$timestamp = strtotime("2001-09-11"); //gera timestamp dessa data
	
	echo date("l, d/m/Y",$timestamp); //vai mostrar o dia da semana... dia, mês e ano do timestamp

	echo "<br>";

	$timestamp = strtotime("now"); //hoje
	
	echo date("l, d/m/Y",$timestamp); 
 
	echo "<br>";

	$timestamp = strtotime("+24 hours"); //pode ser usado seconds, day, week, month, year
	
	echo date("l, d/m/Y",$timestamp); 

	echo "<br>";
 ?>