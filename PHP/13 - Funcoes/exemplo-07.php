<?php 

function soma(int ...$valores):string { //agora, com o :string, ele vai transformar o resultado em string depois de fazer o cálculo no return

	return array_sum($valores);
}

echo var_dump(soma(2, 2));
echo "<br>";

echo soma(2, 4);
echo "<br>";

echo soma(2.2, 1.1);   
echo "<br>";
 ?>