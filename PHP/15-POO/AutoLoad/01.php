<?php 
//se estiver na mesma pasta
function __autoload($nomeClasse){
	var_dump($nomeClasse); //para comprovar que chamou as duas classes necessárias (DelRey e Automovel)
	require_once("$nomeClasse.php");
}

$carro = new DelRey();
$carro->acelerar(80);

 ?>