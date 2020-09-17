<?php 

require_once("config.php");

session_regenerate_id(); //cria nova sessão sempre que atualiza a página

echo session_id();

 ?>