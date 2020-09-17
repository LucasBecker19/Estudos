<?php 

$hora = $_POST['hora'];
$minuto = $_POST['minuto'];
$segundo = $_POST['segundo'];

$totalsegundosrestantes = 24*3600 - ($hora*3600 + $minuto*60 + $segundo);
echo "O total de segundos que faltam para terminar o dia é: $totalsegundosrestantes";




 ?>