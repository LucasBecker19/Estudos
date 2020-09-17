<!DOCTYPE html>
<html>
<head>
	<title>Preenchimento automático do radio</title>
</head>
<body>
	<?php 
	$teste['Lucas'] = 18;
	$teste['Giovanna'] =18;
	$teste['Christian']= 17;
	$teste['Cláudio']=48;
	$teste['Marlene']=49;
	 ?>

	 <b>Escolha uma pessoa abaixo</b>
	 <form method="POST" action="radio.php">
	 	<?php 
	 	foreach ($teste as $nomes => $idade) 
	 	{   ?>
	 	
	 		<input type="radio" name="nomes" value="<?php echo($nomes) ?>"> <?php echo "$nomes"; ?>
	 		
	 	<?php } ?>
	 	<br>
	 	<input type="submit" name="bnt_enviar" value="Enviar" />    
	 	<input type="reset" name="bnt_apagar" value="Apagar" /> <br>



	 </form>


</body>
</html>