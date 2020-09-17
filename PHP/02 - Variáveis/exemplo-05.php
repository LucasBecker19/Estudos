<?php 

$nome = "Lucas";

function teste(){
	global $nome;
	echo $nome;
}

teste();
 ?>