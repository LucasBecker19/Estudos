<?php 

$a = NULL;
$b = NULL;
$c = 10;
$d = 20;

echo $a ?? $b ?? $c ?? $d;
/*
mostre a. mas se ele for nulo, mostre b. mas se for nulo, mostre c.
esse echo só vai mostrar a primeira variável que terá valor.
*/

 ?>