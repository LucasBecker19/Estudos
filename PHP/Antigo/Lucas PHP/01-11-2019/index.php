<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistema Web</title>
</head>
<body>
	<h2><b>Área Restrita</b></h2>
		<form method="POST" action="validar.php">
			Login <input type="text" name="login" placeholder="Login" required="" autofocus="">
			Senha <input type="password" name="senha" placeholder="Senha" required=""><br><br>
			Selecione o seu perfil<br>
			<input type="radio" name="perfil" value="Administrador"> Administrador
			<input type="radio" name="perfil" value="Desenvolvedor"> Desenvolvedor
			<input type="radio" name="perfil" value="Usuário"> Usuário <br><br>
			<input type="submit" name="btn_enviar" value="Acessar"> <br>			
		</form>

</body>
</html>

<?php 

if (isset($_SESSION['loginerro'])) {
	echo $_SESSION['loginerro'];
	unset($_SESSION['loginerro']);
}
if (isset($_SESSION['logout'])) {
	echo $_SESSION['logout'];
	unset($_SESSION['logout']);
}

 ?>