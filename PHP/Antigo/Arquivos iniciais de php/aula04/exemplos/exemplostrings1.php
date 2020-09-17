<!DOCTYPE html>
<html>
<head>
	<title>Exemplo 1 Strings</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Strings são sequencias de caracteres</h2>
	
	<?php 

	$nome = "Programação Web";
	$nome1 = " - Fase 2 - Desenvolvimento de Sistemas";
	 ?>

	 <h3>Valor da variável nome:</h3>
	 <?php echo $nome; ?>

	 <h3>Valor da variável nome1:</h3>
	 <?php echo $nome1; ?>

	 <h3>Concatenação das variáveis</h3>
	 <?php echo $nome.$nome1; ?>

</body>
</html>