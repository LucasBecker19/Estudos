<?php 

class Pessoa{

	public $nome = "Rasmus Lerdorf"; // todo mundo vê
	protected $idade = 51; //pode ser vista na mesma classe ou em uma classe estendida
	private $senha = "rasmus123"; //pode ser visto só na mesma classe

	public function verDados(){ //como é publico, tudo que estiver dentro dessa funcao poderá ser acessada de fora

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";

	}
}

$objeto = new Pessoa();

//echo $objeto->nome. "<br>"; //dará certo, é publico

//echo $objeto->idade. "<br>"; //erro, porque é protegido e estou tentando acessar de fora

//echo $objeto->senha. "<br>";//erro, porque é privado e estou tentando acessar de fora

echo $objeto->verDados(); //como a funcao ver dados é publica, temos acesso ao protegido e ao privado

 ?>