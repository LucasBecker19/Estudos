<?php 
//polimorfismo é quando temos dois métodos com o mesmo nome porém tem funcionalidades 
//diferentes dependendo da classe que estiver

	abstract class Animal{
		
		public function falar(){
			
			return "Som";

		}

		public function mover(){

			return "Andar";

		}

	}

	class Cachorro extends Animal{
		
		public function falar(){ //aqui temos uma funcao com o mesmo nome de uma funcao que está na classe animal
			
			return "Latir";	 //porém, tem outra funcionalidade
		
		}
	
	}	

	class Passaro extends Animal{

		public function falar(){ //aqui temos outro exemplo de polimorfismo

			return "Cantar"; 
		}

		public function mover(){ //aqui temos outro exemplo de polimorfismo

			return "Voar e ". parent::mover(); //chama o método mover() da classe pai
		}
	}

	class Gato extends Animal{

		public function falar(){ //aqui temos outro exemplo de polimorfismo

			return "Miar";
		}
	}

	$bulldog = new Cachorro();
	echo get_class($bulldog) . "<br>";
	echo $bulldog->falar() ."<br>";
	echo $bulldog->mover();

	echo "<br>------------------------------<br>";

	$andorinha = new Passaro();
	echo get_class($andorinha) . "<br>";
	echo $andorinha->mover() . "<br>";
	echo $andorinha ->falar();

	echo "<br>------------------------------<br>";

	$garfield = new Gato();
	echo get_class($garfield) . "<br>";
	echo $garfield->mover() . "<br>";
	echo $garfield ->falar();
 ?>