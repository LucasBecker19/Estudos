<?php 

	setlocale(LC_ALL,"Portuguese","pt_BR","pt_BR.utf-8");

	echo ucwords(strftime("Hoje é %A do mês de %B")); //ucwords é para deixar as iniciais maiúsculas... strftime é para mostrar alguma data por escrito

	//Para usar o strftime, pesquise a lista de comandos
	//$A é para o dia, $B é para o mês
 ?>