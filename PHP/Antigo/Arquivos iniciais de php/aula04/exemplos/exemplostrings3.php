<!DOCTYPE html>
<html>
<head>
	<title>Exemplo 3 Strings</title>
	<meta charset="utf-8">
</head>
<body>
	<h3>Como limpar strings - Eliminar espaços vazios</h3>

	<?php 
		$email="        julianolg@gmail.com";
		$site="http://www.ifsc.edu.br";
		$email2="        julianol g@ gmai l.c om";
    
	 ?>

	 <h4>E-mail:</h4>
	 <?php echo trim($email) ?>

	 <h4>Site:</h4>
	 <a href="<?php echo $site ?>">
	 	<?php echo trim($site,'htpp://') ?>
	 	</a>
	 <h4>Eliminando todos os espaços</h4>
	 <!-- primeiro parametro o que esta procurando, segundo parametro o que deseja substituir e terceiro parametro a string a ser manipulada -->
	 <?php echo str_replace(" ","",$email2) ?>




</body>
</html>