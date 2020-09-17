<?php 

	function __autoload($nomeClasse){
		
		require_once("$nomeClasse.php"); 
		//sempre que for instanciar uma classe, ela será chamada automaticamente para o código (se estiver na mesma pasta)
		//se estiver em outra pasta, faça mudanças no require_once
		//para ver exemplos, vá na pasta autoload
	}

	

 ?>
