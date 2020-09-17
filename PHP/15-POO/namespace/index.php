<?php 

require_once("config.php");

use Cliente\Cadastro;

$lucas = new Cadastro();

$lucas->setNome("Lucas Becker");
$lucas->setEmail("lucas123@gmail.com");
$lucas->setSenha("123");

//echo $lucas; //esse echo irá usar o json_encode

$lucas->registrarVenda();

 ?>