<!DOCTYPE html>
<html>
<head>
	<title>Exemplo utilização método POST</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="somar.php">
	<h2>Somar dois números via POST</h2><br><br>
	Digite o primeiro numero: <input type="text" name="n1" required=""><br>
	Digite o segundo numero: <input type="text" name="n2" required=""><br><br>
	<input type="submit" name="btn_enviar" value="Enviar">
	<input type="reset" name="btn_apagar" value="Apagar Dados">
</form>
</body>
</html>