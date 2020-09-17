<?php 
/*4) Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão). Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em cada um dos números. */
 ?>
 <form method="post">

 	Valor numérico A <input type="number" name="a"><br>
 	Valor numérico B <input type="number" name="b"> <br>
 	Operação     
 	<select name="operacoes">
 		<option disabled selected value>-- Selecione uma opção --</option>
 		<option value="soma">Soma</option>
 		<option value="subtracao">Subtração</option>
 		<option value="divisão">Divisão</option>
 		<option value="multiplicacao">Multiplicação</option>
 	</select>
 	<br>
 	<input type="submit" name="btn_enviar"> <br>
 </form>

 <?php 

if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['operacoes'])){
	
	$operacoes = $_POST['operacoes'];
	$a=$_POST['a'];
	$b=$_POST['b'];

	if ($operacoes == 'soma') 
		echo "$a + $b = ".($a+$b);
	else if ($operacoes == 'subtracao') 
		echo "$a - $b = ".($a-$b);
	else if ($operacoes == 'divisão') 
		echo "$a / $b = ".($a/$b);
	else if ($operacoes == 'multiplicacao') 
		echo "$a * $b = ".($a*$b);

}
else if (isset($_POST['a'])==NULL && isset($_POST['b'])==NULL && isset($_POST['operacoes'])==NULL)
	echo "Preencha todas as opções";

  ?>