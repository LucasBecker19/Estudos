<html>
<head>
	<title>Exercício 6</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="GET" action="exer6.php">
		<h3>Informações do Aluno</h3> <br><br>
		Digite seu nome: <input type="text" name="nome" required=""><br>
		Digite a sua idade: <input type="number" name="idade" required=""><br>
		Digite o seu endereço: <input type="text" name="end" required=""><br>
		Digite o seu e-mail: <input type="text" name="email" required=""><br><br>
		<input type="submit" name="btnEnviar"  value="Enviar">

	</form>

	<?php 
	if (isset($_GET['nome']) && isset($_GET['idade']) && isset($_GET['end']) && isset($_GET['email']))  {
       $nome = $_GET['nome'];
       $idade = $_GET['idade'];
       $endereco = $_GET['end'];
       $email = $_GET['email'];
     
       echo "Dados do usuário <br>";
       echo "Nome: $nome<br>Idade: $idade<br>Endereço: $endereco<br>E-mail: $email<br>";
}

	 ?>

</body>
</html>