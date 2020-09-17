<?php  //ler ano de nascimento e ano atual. Mostrar quantos anos a pessoa tem, quantos meses, quantas semanas e quantos dias?>
<!DOCTYPE html>
<html>
<head>
	<title>Idade</title>
</head>
<body>
	<form method="POST" action="idade.php">
		Informe seu ano de nascimento: <input type="number" name="nascimento"><br>
		Informe o ano atual: <input type="number" name="atual" required=""><br>
		<input type="submit" name="btn_enviar" value="Enviar">
		<input type="reset" name="btn_apagar" value="Apagar">


	</form>
</body>
</html>