<?php 

define("BANCO_DE_DADOS",[
	'127.0.0.1',
	'root',
	'password',
	'test'
],true); //com o true, você pode chamar BANCO_DE_DADOS minusculo
		//sem o true, vc terá que chamar ele exatamente como foi declarado
////////o mais recomendado é não colocar o true


print_r(BANCO_DE_DADOS);
 ?>