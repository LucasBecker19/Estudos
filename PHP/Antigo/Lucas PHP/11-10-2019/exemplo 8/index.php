<!DOCTYPE html>
<html>
<head>
	<title>Exemplo 8</title>
</head>
<body>
	<form method="POST" action="calcula.php">
		Informe o primeiro número:<input type="text" name="n1" required=""><br>
		Informe o segundo número:<input type="text" name="n2" required=""><br><br>
		Qual operação você deseja fazer com os números:<br>
		<input type="radio" name="operacoes" value="soma"> Soma
		<input type="radio" name="operacoes" value="subtracao"> Subtração
		<input type="submit" name="btn_enviar" value="Enviar">




	</form>
</body>
</html>