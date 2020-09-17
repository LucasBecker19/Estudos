<?php 

for($i=0;$i<20;$i++){

	if ($i>10 && $i<15) continue; // se i for maior que 10 e menor que 15, ignora tudo abaixo até ser maior ou igual a 15
		
	echo "$i<br>";

	if ($i===18) break; // encerra o for se i for igual a 18

}

 ?>