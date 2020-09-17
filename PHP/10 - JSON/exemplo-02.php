<?php 

$json = '[{"nome":"Lucas","idade":19}]';


$data = json_decode($json,true); //decodifica o json para um array  //precisa do true para que ele se torne array e não objetos

var_dump($data);
 ?>