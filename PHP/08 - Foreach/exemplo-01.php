<?php 

	$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
	$dias = array("01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");
	foreach ($meses as $mes) { //coloca-se o array que deseja percorrer e em seguida cria-se uma variável que irá receber o valor de cada slot do array
		foreach($dias as $dia){

			echo "$dia / $mes / 2020<br>";

		}
		echo "<br><br>";
	}

	echo "<hr>";

	foreach ($meses as $index => $mes) { //agora, (index = índice) irá mostrar o número do slot
		foreach($dias as $dia){

			echo "ID: $index ... $dia / $mes / 2020<br>";

		}
		echo "<br><br>";
	}

 ?>