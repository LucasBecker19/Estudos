<?php 

$horas = $_POST['horas'];
$minutos = $_POST['minutos'];
$segundos = $_POST['segundos'];

echo "Se passaram: ",(($horas*60)*60)+($minutos*60)+$segundos," segundos";



 ?>