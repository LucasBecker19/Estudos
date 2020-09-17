<?php 

$frase = "hello darkness my old friend";

$palavra = "my";

$q = strpos($frase, $palavra); //encontra a posição que está a palavra "my" ... string position

//var_dump($q); //mostra a posição da palavra "my"

echo "<br>";

$texto = substr($frase, 0, $q); //copia do caracter 0 até a posição da palavra "my" ... substring

echo $texto . "<br>"; 

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase)); // copia depois da palavra "my" até o final da frase ... string length

echo $texto2 . "<br>";

echo $texto . $palavra . $texto2;

?>