<?php /*
 Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado, ex: 
Entrada = 4
Saída = 4 X 0 = 0...4 X 10 = 40.
 */ ?>
<form>
	Digite um número para obter sua tabuada de 0 a 10 =)<br>
	<input type="number" name="tabuada">
	<input type="submit" name="OK">	
</form>

<?php 

function tabuada($tabuada){
	    $resultado = NULL;
	
		for ($i=0; $i<=10; $i++) 
			$resultado .=  "$tabuada x $i = ". $i*$tabuada ."<br>";
		
		return $resultado;
}

if (isset($_GET['tabuada']) && $_GET['tabuada'] == NULL)
	echo "Digite novamente";


else if (isset($_GET['tabuada'])){
	
	$tabuada = $_GET['tabuada'];
	echo $resultado = tabuada($tabuada);
	
	}
?>