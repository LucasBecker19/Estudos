<?php 

$saque = $_POST['saque'];


$n50 = intdiv($saque,50);
$r50 = $saque % 50;
$n20 = intdiv($r50,20);
$r20 = $r50 % 20;
$n10 = intdiv($r20,10);
$r10 = $r20 % 10;
$n2 = intdiv($r10, 2);
$r2 = $r10 % 2;
$totalnotas = $n50+ $n20+ $n10+ $n2;

echo "Valor do saque: $saque<br>";
echo "Total de notas entregues: $totalnotas <br>";
echo "Total de notas de R$ 50: $n50<br>";
echo "Total de notas de R$ 20: $n20<br>";
echo "Total de notas de R$ 10: $n10<br>";
echo "Total de notas de R$ 2: $n2<br>";







 ?>