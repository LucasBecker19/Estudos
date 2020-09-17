<?php 

interface Veiculo{

	public function acelerar($velocidade);
	public function frear($velocidade);
	public function trocarMarcha($marcha);
}
//uma classe pode implementar várias interfaces. ex: class Civic implements Veiculo, Teste, Teste2, Teste3{ ... 
class Civic implements Veiculo{ 
	//Quando se implementa uma interface, você precisa usar 
	//todos os métodos com o mesmo nome e o mesmo parâmetro dentro da classe implementada, 
	//e também precisa utilizar todos os métodos e usar as mesmas permissões 
	
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

$carro = new Civic();
$carro->trocarMarcha(2);
$carro->acelerar(50);
$carro->frear(50);

 ?>