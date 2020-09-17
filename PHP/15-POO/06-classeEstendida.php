<?php 

class Pessoa{

	public $nome = "Rasmus Lerdorf"; 
	protected $idade = 51; //pode ser vista na mesma classe ou em uma classe estendida
	private $senha = "rasmus123"; //pode ser visto só na mesma classe

	public function verDados(){ //como é publico, tudo que estiver dentro dessa funcao poderá ser acessada de fora

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";

	}
}

class Programador extends Pessoa{ //programador é uma classe estendida de pessoa

	public function verDados(){ //Criando a funcao verDados aqui dentro, se for requerido para ver dados do programador, ele dará prioridade a esta funcao aqui
		//porém, se nao criar essa funcao aqui dentro, irá usar a funcao da classe pessoa
		//dessa forma, ainda teríamos acesso à senha

		echo get_class($this) . "<br>"; //vai mostrar qual classe você está
		
		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>"; //agora nao teremos mais acesso a senha, porque ela se localiza em outra classe e é um atributo privado

	}
}

$objeto = new Programador();

echo $objeto->verDados(); 

 ?>