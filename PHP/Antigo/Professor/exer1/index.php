<!DOCTYPE html>
<html>
<head>
	<title>Atividade 1</title>
</head>
<body>

<?php 
$alunos['Maria das Graças'] = 6.5;
$alunos['Paulo de Almeida'] = 7.8;
$alunos['Rogério da Silva'] = 4.2;
$alunos['Jerusa Fontes'] = 8.5;
$alunos['Alicia Marques'] = 9.0;
$alunos['Zenom Mendes'] = 4.1;
ksort($alunos); //ordena a chave e leva consigo o valor
/*echo "<pre>";
print_r($alunos);
echo "</pre>";*/
?>

<form method="POST" action="index.php">
	<b>Selecione um Aluno</b><br>
	<select name=selectalunos>
		<?php foreach ($alunos as $nomes => $notas) {
			?>

			<option value="<?php echo $nomes ?>"> <?php echo $nomes ?></option>

		<?php } ?>


	</select>
	
	<br><br>

	<b>O que você deseja fazer? </b>
	<br><br>
	<input type="radio" name="op" value="op1" > Mostrar a Nota do Aluno Selecionado <br>
	<input type="radio" name="op" value="op2" > Mostrar alunos e notas (Ordem decrescente de alunos) <br>
	<input type="radio" name="op" value="op3" > Mostrar alunos e notas (Ordem decrescente de Notas)<br>
	<input type="radio" name="op" value="op4" > Mostrar a Media das Notas <br>
	<input type="radio" name="op" value="op5" > Mostrar a quantidade de notas maiores que a média <br>
	<input type="radio" name="op" value="op6" > Mostrar a menor nota e o nome do aluno <br><br>

	Para verificar se o aluno está cadastrado basta digitar o seu nome e clicar em enviar <input type="text" name="procuraaluno"> <br><br>

	<input type="submit" name="btn_enviar" value="Enviar">

	<input type="reset" name="btn_apagar" value="Apagar">

</form>


<?php 

if (isset($_POST['op'])) {

	if ($_POST['op']=='op1') {
			foreach ($alunos as $key => $value) {
				if ($key== $_POST['selectalunos']) {
					echo "Aluno: $key sua nota é: $value <br>";
				}
			}

		}
		// verificando a opção 2
		else if ($_POST['op']=='op2') {
			foreach ($alunos as $nomes => $notas) {
				echo "$nomes sua nota é: $notas <br>";
			}
		}
		else if ($_POST['op']=='op3') {
			arsort($alunos);
			foreach ($alunos as $nomes => $notas) {
				echo "$nomes sua nota é: $notas <br>";
			}
		}

		else if ($_POST['op']=='op4') {
			$soma=0;
			foreach ($alunos as $nomes => $notas) {
				$soma=$soma+$notas;
			}
			echo "A media da turma é: ".round($soma/count($alunos),2)."<br>";
			
		}
		else if ($_POST['op']=='op5') {
			$cont=0;
			foreach ($alunos as $nomes => $notas) {
				if ($notas >= 6) {
					$cont++;
				}
			}
			echo "Número de notas acima da média é:: $cont <br>";
		}

		else if ($_POST['op']=='op6') {
			$menornota;
			$menornome;
			$cont=1;
			foreach ($alunos as $nomes => $notas) {
				if ($cont==1) {
					$menornota = $notas;
					$menornome = $nomes;
				}

				else {

					if ($notas < $menornota) {
						$menornota = $notas;
						$menornome = $nomes;
					}

				}
				$cont++;

			}
			echo "Menor nota: $menornota --- Nome aluno: $menornome<br> ";
		}

	} 


if (isset($_POST['procuraaluno'])) {
	$cont=0;
	foreach ($alunos as $nomes => $notas) {
		if ($_POST['procuraaluno']==$nomes) {
			echo "Aluno Encontrado!<br>";
		}
		else {
			$cont++;
		}
	}
	if ($cont==count($alunos)) {
		echo "Aluno não encontrado <br>";
	}

}


 ?>



</body>
</html>



