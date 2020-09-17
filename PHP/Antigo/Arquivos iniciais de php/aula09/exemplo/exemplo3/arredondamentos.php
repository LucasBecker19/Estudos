<?php 

$n1 = $_POST['n1'];

echo "<h2> Trabalhando com arredondamentos </h2> <br><br>" ;
echo "1 Tipo - Arredondamento especificando a casa decimal - round <br><br>";
echo "O número é: $n1 <br>";
echo "Arredondamento com duas casas ".(round($n1,3))."<br><br>";
echo "2 Tipo - Arredondamento para mais - ceil <br><br>";
echo "Arredondamento com duas casas ".(ceil($n1))."<br><br>";

echo "3 Tipo - Arredondamento para menos - floor <br><br>";
echo "Arredondamento com duas casas ".(floor($n1))."<br><br>";

 ?>