<?php 

$horas = $_POST['horas'];
$minutos = $_POST['minutos'];
$segundos = $_POST['segundos'];

echo "Faltam ",86400-((($horas*60)*60)+($minutos*60)+$segundos)," segundos para terminar o dia";

 ?>