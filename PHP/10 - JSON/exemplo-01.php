<?php 
//JSON == JavaScript Object Notation

$pessoas = array(); //criar array

array_push($pessoas, array('nome'=>'Lucas','idade'=>19)); // o array_push serve para adicionar algum item em um array!

echo json_encode($pessoas); //transforma array em json

 ?>
