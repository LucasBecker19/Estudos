<?php 
//se estiver em pastas diferentes
function incluirClasses($nomeClasse){

	if (file_exists($nomeClasse . ".php") === true){
		require_once($nomeClasse.".php");
	}

}
//classes que estao na mesma pasta
spl_autoload_register("incluirClasses"); // spl = standard php library              

///////////////////////////////////////////////////////////////////////////////    
// classes que estao na pasta ClassesAbstratas
spl_autoload_register(function($nomeClasse){										
	if(file_exists("ClassesAbstratas". DIRECTORY_SEPARATOR .$nomeClasse.".php") === true){
		require_once("ClassesAbstratas".DIRECTORY_SEPARATOR.$nomeClasse.".php");
	}
});
///////////////////////////////////////////////////////////////////////////////

$carro = new DelRey();
$carro->acelerar(80);

 ?>