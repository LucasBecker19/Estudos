<?php
$n1 = $_POST['n1'];

echo "<h3> Trabalhando com exponenciação </h3> <br>";
echo "O número $n1 elevado ao quadrado é :".($n1**2)."<br><br>";
echo "O número $n1 elevado ao quadrado é :".(pow($n1,2))."<br><br>";

echo "<h3> Trabalhando com radiciação (raiz quadrada) </h3> <br>";

echo "A raiz quadrada de $n1 é: ".sqrt($n1)."<br>";
echo "Formatando a raiz quadrada de $n1 com 2 casas decimais é: ".number_format(sqrt($n1),2)."<br>";



?>