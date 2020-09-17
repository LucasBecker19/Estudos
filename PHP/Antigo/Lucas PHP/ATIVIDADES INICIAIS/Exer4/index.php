<?php //converter graus celcius para Fahrenheit ?>
<!DOCTYPE html>
<html>
<head>
	<title>Conversor de temperatura</title>
</head>
<body>
	<form method="POST" action="conversor.php">
		Digite os graus Celcius: <input type="number" name="celcius" required="">
		<input type="submit" name="btn_enviar" value="Enviar">
		<input type="reset" name="btn_apagar" value="Apagar"> <br>
	</form>
</body>
</html>