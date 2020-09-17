<?php 

$hora = $_POST['hora'];
$minuto = $_POST['minuto'];
$segundo = $_POST['segundo'];

$totalsegundos = $hora*3600 + $minuto*60 + $segundo;
echo "O total de segundos que já se passaram foi: $totalsegundos";




 ?>