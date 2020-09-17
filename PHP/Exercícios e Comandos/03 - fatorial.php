<?php 
/*3) Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, exiba o resultado na tela. Ex:
Entrada = 3
Processamento: (3 * 2) * 1
Saída: 6*/
 ?>

 <form>
 	Digite um número:
 	<input type="number" name="numero">
 	<input type="submit" name="btn_enviar">
 	<br>
 </form>

 <?php 

 	if (isset($_GET['numero'])) {
 		$n = $_GET['numero'];
 		$resultado = $n;
 		$resolucao = "$n";

 		if ($n==NULL) 
 			echo "Digite um número";
 		
 		else{
 			for ($i=$n-1; $i > 0 ; $i--) { 
	 			$resultado = $resultado * $i;
	 			$resolucao .= " * $i ";
 			}
	 		echo "Fatorial de $n = $resultado";
	 		echo "<br>Resolução: $resolucao = $resultado";
 		}
 	}

  ?>