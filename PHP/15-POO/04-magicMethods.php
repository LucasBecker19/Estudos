<?php 

class Endereco{
	private $logradouro;
	private $numero;
	private $cidade;
	
	//chamar metodos mágicos com dois 'underline' = '__'
	public function __construct($a,$b,$c){
		
		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;

	}
	
	//sempre no final do programa esse método é chamado para destruir variaveis
	public function __destruct(){

		//var_dump("Destruir");

	}

	//sempre é chamado num echo
	public function __toString(){

		return $this->logradouro .", ". $this->numero . ", ". $this->cidade;

	}

}

$meuEndereco = new Endereco("Rua Ademar Saraiva Leão", "123", "Santos");

echo $meuEndereco;

 ?>