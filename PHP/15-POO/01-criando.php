<?php 
//Uma classe é um conjunto de métodos e atributos
class Pessoa { //criando classe

	public $nome; //atributo

	public function falar(){ //método

		return "Meu nome é " . $this->nome; //usando o atributo nome dentro do método
		//se for utilizar fora do método, utilize normalmente, sem o $this->

	}
}

$lucas = new Pessoa();
$lucas->nome = "Lucas Becker";
echo $lucas->falar();

 ?>