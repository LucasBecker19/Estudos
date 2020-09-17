<?php 

require_once("config.php"); //chama o arquivo config.php

session_unset($_SESSION['nome']); //apaga a sessao
//se não colocar nada entre parenteses, apaga todas as sessoes

echo $_SESSION["nome"];

session_destroy($_SESSION['nome']); //ele limpa a variavel e remove o usuário

 ?>