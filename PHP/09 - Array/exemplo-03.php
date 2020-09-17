<?php 

$pessoas = array(); //criar array

array_push($pessoas, array('nome'=>'Lucas','idade'=>19)); // o array_push serve para adicionar algum item em um array!

print_r($pessoas); //vai printar o array inteiro,incluindo o segundo array que contém as informações das pessoas
echo "<br><br>";

print_r($pessoas[0]); //vai aparecer apenas as informaçoes da pessoa 0
echo "<br><br>";

print_r($pessoas[0]['nome']); //vai aparecer apenas o nome da pessoa 0

 ?>