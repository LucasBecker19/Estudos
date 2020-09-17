<?php 
// a classe abstrata não pode ser instanciada. ela só pode ser extendida por outra classe
//Instanciar uma classe significa criar um objeto daquela classe
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

class DelRey extends Automovel{
	//Além de possuir os métodos presentes na classe automóvel, 
	//a classe DelRey poderá ter seus próprios métodos aqui também
}

$carro = new DelRey();
$carro->acelerar(50);

//$carro1 = new Automovel(); //imposível instanciar uma classe abstrata

 ?>