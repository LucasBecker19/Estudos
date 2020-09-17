<?php 

class Documento{ //Documento é pai

	private $numero;

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($n){
		$this->numero = $n;
	}

}

class CPF extends Documento{ //CPF é filho
	public function validar():bool{
		//validacao

		return true;
	}
}

$doc = new CPF();

$doc->setNumero("12345678900");

var_dump($doc->validar());

echo "<br>" . $doc->getNumero();

 ?>