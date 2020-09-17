<!DOCTYPE html>
<html>
<head>
	<title>Atividade 2</title>
</head>
<?php 

$times = array("Corinthians","Flamengo","Grêmio","Internacional","Santos","Avaí")

 ?>
<body>
	<form method="POST" action="mostrartorcedores.php">
		Selecione um dos times:<br><br>
		<?php 
		foreach ($times as $nome) { ?>
			<input type="radio" name="times" value="<?php echo $nome  ?>"> <?php echo $nome ?>

		<?php } ?>
		<br>
		<input type="submit" name="btn_enviar">
		


		 
	</form>
</body>
</html>