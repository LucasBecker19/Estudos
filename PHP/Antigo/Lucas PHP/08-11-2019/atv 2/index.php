<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Pessoas</title>
</head>
<body>
	<form method="POST" action="inserir.php?funcao=cadastrar">
		<h3><b>Bem vindo a tela de cadastro</b></h3><br><br>
		Insira o nome do aluno<input type="text" name="nome" required=""><br>
		Insira a matrícula<input type="text" name="matricula" required=""><br>
		Insira o endereço<input type="text" name="endereco" required=""><br>
		Insira o telefone<input type="text" name="telefone" required=""><br>
		Insira a data de nascimento<input type="Date" name="datanascimento" required=""><br>
		insira o email<input type="text" name="email" required=""><br><br>

		<input type="submit" name="btn_enviar" value="Cadastrar"><br>
	</form>
</body>
</html>