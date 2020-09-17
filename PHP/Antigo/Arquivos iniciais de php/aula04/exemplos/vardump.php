<!DOCTYPE html>
<html>
<head>
	<title>Tipos de Dados em PHP</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Função var_dump</h2>
	<?php 
		$nome = 'Juliano';
		$saldo= 965.30;
		$numeroFilhos = 1.0;
    ?>

    <h3>Tipo da variável nome:</h3>
    <?php 
    	var_dump($nome);
     ?>

     <h3>Tipo da variável saldo:</h3>
    <?php 
    	var_dump($saldo);
     ?>

     <h3>Tipo da variável numero de filhos:</h3>
    <?php 
    	var_dump($numeroFilhos);
     ?>






</body>
</html>