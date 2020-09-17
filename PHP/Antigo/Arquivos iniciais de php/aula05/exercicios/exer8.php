<?php 

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

$soma = $n1+$n2;
$subtracao = $n1-$n2;
$divisao = $n1/$n2;
$multiplicacao = $n1*$n2;

echo "A soma dos números $n1 e $n2 é: $soma <br>";
echo "A subtração dos números $n1 e $n2 é: $subtracao <br>";
echo "A divisão dos números $n1 e $n2 é: $divisao <br>";
echo "A multiplicação dos números $n1 e $n2 é: $multiplicacao <br>";

 ?>