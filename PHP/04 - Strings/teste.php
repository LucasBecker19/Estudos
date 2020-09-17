<?php 

$name = "HCode Treinamentos";
$replace = "Cursos";

$newname = substr($name, 0, strpos($name, 'T')) . $replace;
echo $newname; 

 ?>