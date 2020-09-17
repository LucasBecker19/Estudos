<?php 
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];

echo "PRIMEIRO NÚMERO<br>";
echo "Arredondamento utilizando 2 casas: ".round($n1,2)."<br>";
echo "Arredondamento para cima: ".ceil($n1)."<br>";
echo "Arredondamento para baixo ".floor($n1)."<br>";
echo "<br>SEGUNDO NÚMERO<br>";
echo "Arredondamento utilizando 2 casas: ".round($n2,2)."<br>";
echo "Arredondamento para cima: ".ceil($n2)."<br>";
echo "Arredondamento para baixo ".floor($n2)."<br>";
echo "<br>TERCEIRO NÚMERO<br>";
echo "Arredondamento utilizando 2 casas: ".round($n3,2)."<br>";
echo "Arredondamento para cima: ".ceil($n3)."<br>";
echo "Arredondamento para baixo ".floor($n3)."<br>";






 ?>