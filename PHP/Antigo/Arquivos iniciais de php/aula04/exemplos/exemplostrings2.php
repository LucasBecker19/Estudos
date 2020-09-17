<!DOCTYPE html>
<html>
<head>
	<title>Exemplo 2 String</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Funções Importantes para manipulação de strings</h2>

	<?php $str = "Eu sou um String"; ?>

	<h4>Valor da Variável</h4>
	<?php echo $str; ?>

	<h4>Número de caracteres da string</h4>
	<?php echo strlen($str) ?>

	<h4>Primeiro Caractere da String</h4>
	<?php echo $str[0]; ?>
	<h4>Ultimo Caractere da String</h4>
	<?php echo $str[-1]; ?>
	<h4>Extrair partes de uma string</h4>
	<?php
	// Começa a pegar a string a partir da posição zero e conta 4 casas 0 1 2 3 
	echo substr($str,0,4); 
	?>
	<h4>Extrair partes de uma string</h4>
	<?php 
	// se não especificar a quantidade ele pega da posição solicitada até o final da string
	echo substr($str,3); 
	?>



</body>
</html>