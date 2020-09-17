<?php 
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

echo "O número $n1 elevado a 5 potência e: ".pow($n1,5)."<br>";
echo "O número $n2 elevado a 5 potência e: ".pow($n2,5)."<br>";
echo "A raiz quadrada de $n1 é: ".sqrt($n1)."<br>";
echo "A raiz quadrada de $n2 é: ".sqrt($n2)."<br>";
echo "a soma dos números elevado a 5 potência e: ".pow(($n1+$n2),5)."<br>";
echo "a raiz quadrada da soma dos números e: ".sqrt($n1+$n2)."<br>";


 ?>