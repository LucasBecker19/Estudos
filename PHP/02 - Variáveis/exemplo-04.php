<?php 

$nome = (int)$_GET["a"]; //o int convertou a string pro int
//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"]; //pega o ip de quem conecta
$LogDeAccesso = $_SERVER["SCRIPT_NAME"];    //caminho do arquivo?
echo $ip,"<br/>";
echo $LogDeAccesso;
 ?>