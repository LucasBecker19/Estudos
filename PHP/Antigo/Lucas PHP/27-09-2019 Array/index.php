<!DOCTYPE html>
<html>
<head>
	<title>Atividade 1</title>
</head>
<body>
<?php 
$alunos['Maria das Graças']= 6.5; //cada um desses é um arrey (equiparável a um vetor do C++, porém mais inteligente) 
$alunos['Paulo de Almeida']= 7.8;
$alunos['Rogério da Silva']= 4.2;
$alunos['Jerusa Fontes']= 8.5;
$alunos['Alicia Marques']= 9.0;
$alunos['Zenom Mendes']= 4.1;
ksort($alunos); //coloca alunos em ordem alfabética. Se colocasse " $notas " no ksort, colocaria as notas em ordem.......................................................................................................

/*
echo "<pre>";
print_r($alunos);
echo "</pre>";
*/
 ?>
<form method="POST" action="index.php">
	<b>Selecione um aluno</b><br>
	<select name="alunos">
		<?php 
			foreach ($alunos as $nomes => $notas) { //ele só irá aplicar o for quando tiver as 3 opções
		 ?>
		 <option value="<?php echo $nomes  ?>"><?php echo $nomes ?></option>
		<?php } ?>
	</select>


	<br><br>
	<b>O que você deseja fazer? </b>
	<br><br>
	<input type="radio" name="op" value="op1"> Mostrar a nota do aluno selecionado <br><?php //op de operações ?>
	<input type="radio" name="op" value="op2"> Mostrar alunos e notas (Ordem crescente de alunos) <br>
	<input type="radio" name="op" value="op3"> Mostrar alunos e notas (ordem decrescente de notas) <br>
	<input type="radio" name="op" value="op4"> Mostrar a média das notas <br>
	<input type="radio" name="op" value="op5"> Mostrar a quantidade de notas maiores que a média <br>
	<input type="radio" name="op" value="op6"> Mostrar a menor nota e o nome do aluno <br><br>
	 Para verificar se o aluno está cadastrado basta digitar o seu nome e clicar em enviar <input type="text" name="procuraaluno">
	 <br><br>
	 <input type="submit" name="btn_enviar" value="Enviar">
	 <input type="reset" name="btn_apagar" value="Apagar">


</form>


	<?php 
	if (isset($_POST['op'])) 
	{
		if ($_POST['op']=='op1') //o op1 tem a intenção de mostrar a nota do aluno
		{
			foreach ($alunos as $nomes => $notas) 
			{
				if ($nomes == $_POST['alunos']) {
					echo "Aluno(a): $nomes sua nota é: $notas <br>";
				}
			}
		}

		else if ($_POST['op']=='op2') //o op2 tem a intenção de mostrar alunos em forma crescente e sua nota.
		{
			foreach ($alunos as $nomes => $notas) 
			{
					echo "$nomes sua nota é: $notas<br>";
			}
		}
		else if ($_POST['op']=='op3') // o op3 mostra notas em forma decrescente e mostra o aluno
		{
			arsort($alunos); //colocar o valor do arrey $alunos em forma decrescente............................................................................................
			foreach ($alunos as $nomes => $notas) {
				echo "$nomes sua nota é: $notas<br>";
			}
		}
		else if ($_POST['op']=='op4') { //media das notas
			$soma=0;
			foreach ($alunos as $nomes => $notas) {
				$soma=$soma+$notas;
			}
			echo "A média da turma é: ".round($soma/count($alunos),1)."<br>"; //o count irá contar a quantidade de alunos no arrey alunos. é essencial usar quando não se sabe/lembra a quantidade de alunos.
			//e o round serve para limitar a quantidade de casas que aparece. (nesse caso coloquei 1)
		}
		else if ($_POST['op']=='op5') { //mostrar quantidade de notas acima da média
			$soma=0;
			foreach ($alunos as $nomes => $notas) {
				$soma=$soma+$notas;
			}
			$cont=0;
			$soma=$soma/count($alunos);
			
			foreach ($alunos as $nomes => $notas) {
				if ($notas>$soma) 
				{
					$cont++;
				}
			}
			echo "Alunos que obtiveram nota maior que a média: $cont";
		}
		else if ($_POST['op']=='op6') { //mostrar pior aluno e sua nota;
			foreach ($alunos as $nomes => $notas) {
				$menornota=10;
				$pioraluno;
				if ($notas < $menornota) {
					$menornota=$notas;
					$pioraluno=$nomes;
				}
			}
			echo "Aluno com menor nota <br> $pioraluno com nota $menornota ";
		}
	}
	$procuraaluno;
	
	if (isset ($_POST['procuraaluno'])) 
	{ 
		$cont=0;
		foreach ($alunos as $nomes => $notas)
		{
			if ($nomes == $_POST['procuraaluno']) {
				echo "Este aluno está cadastrado.";
			}
			else
			{
				$cont++;
			}
		}
		if ($cont==6) {
			echo "O aluno ",$_POST['procuraaluno']," não possui cadastro.";
		}
		
	}
	
	?>
</body>
</html>