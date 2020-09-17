<?php 

interface Veiculo{

	public function acelerar($velocidade);
	public function frear($velocidade);
	public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo{ 
	
	public function acelerar($velocidade){ 

		echo "O carro acelerou ".$velocidade." km/h<br>";

	}
	
	public function frear($velocidade){

		echo "O carro freou ".$velocidade." km/h<br>";

	}
	
	public function trocarMarcha($marcha){

		echo "O carro trocou para a marcha ".$marcha."<br>";

	}
}

 ?>

 