<?php //calcular o gasto de uma corrida. Ler distancia percorrida, consumo de combustivel e preço combustivel ?>

<!DOCTYPE html>
<html>
<head>
	<title>Quanto gastou na viagem?</title><br><br>
</head>
<body>
	<form method="POST" action="calculargasto.php">
		Qual a distância em KM percorrida? <input type="number" name="distancia" required=""><br>
		Quantos KM por litro seu veículo consome? <input type="number" name="kmporlitro" required=""><br>
		Qual é o preço do combustível? R$<input type="number" name="preco"><br>
		<input type="submit" name="btn_enviar" value="Enviar">
		<input type="reset" name="btn_apagar" value="Apagar">
	</form>
</body>
</html>