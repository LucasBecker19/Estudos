<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Pessoas</title>
</head>
<body>
	<form method="POST" action="inserir.php?funcao=cadastrar">
		<h3><b>Bem vindo a tela de cadastro</b></h3><br><br>
		Insira o nome do bolsista<input type="text" name="nome" required=""><br>
		Insira o nome do projeto<input type="text" name="projeto" required=""><br>
		Insira o nome do orientador<input type="text" name="orientador" required=""><br>
		Insira a data de início<input type="Date" name="datainicio" required=""><br>
		Insira a data de termino<input type="Date" name="datatermino" required=""><br>
		insira o valor da bolsa<input type="text" name="valorbolsa" required=""><br><br>

		<input type="submit" name="btn_enviar" value="Cadastrar"><br>
	</form>
</body>
</html>