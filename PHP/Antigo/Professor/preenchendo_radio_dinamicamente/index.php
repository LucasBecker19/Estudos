<!DOCTYPE html>
<html>
<head>
	<title>Exemplo preencher radio dinamicamente</title>
</head>
<body>
<?php 
   $teste['João'] = 12;
   $teste['José'] = 22;
   $teste['Carlos'] = 32;
   $teste['Maria'] = 15;
?>

<form method="POST" action="radio.php">

	<b>Escolha uma das pessoas abaixo: </b><br><br>

<?php 

	foreach ($teste as $nomes => $idades) {
     ?>

     <input type="radio" name="nomes" value="<?php echo $nomes ?>"> <?php echo $nomes ?>

     <?php 
			}
      ?>
	<br><br>
	<input type="submit" name="btn_enviar" value="enviar">
	<input type="reset" name="btn_apagar" value="apagar">


</form>

</body>
</html>