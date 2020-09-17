<?php 

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];


echo "TRABALHANDO COM O PRIMEIRO NUMERO <BR>";
echo "Número original: $n1 <br>";
echo "Número com duas casas decimais: ".number_format($n1,2)."<br>";
echo "Número com três casas decimais e separador de milhar: ".number_format($n1,3,",",".")."<br>
";
echo "Soma dos números com quatro casas decimais: ".number_format(($n1+$n2),4)."<br>
";

echo "<BR>TRABALHANDO COM O SEGUNDO NUMERO <BR>";
echo "Número original: $n2 <br>";
echo "Número com duas casas decimais: ".number_format($n2,2)."<br>";
echo "Número com três casas decimais e separador de milhar: ".number_format($n2,3,",",".")."<br>
";
echo "Soma dos números com quatro casas decimais: ".number_format(($n1+$n2),4)."<br>
";






 ?>