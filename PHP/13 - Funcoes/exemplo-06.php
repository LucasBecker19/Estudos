<?php 

function soma(int ...$valores){ //cria um array que armazena todos os parâmetros

	return array_sum($valores); //soma todos os slots do array
}

echo soma(2, 2);
echo "<br>";

echo soma(2, 4);
echo "<br>";

echo soma(2.2, 1.1); //como aqui é float e na function estou dizendo que todos os valores serão "int", o programa vai ignorar tudo oq estiver depois do ponto. // exemplo: 2.2 será 2    // exemplo: 1.1 será 1 //   
echo "<br>";
 ?>