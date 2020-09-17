<?php 
session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sessão</title>
</head>
<body>
	<form method="POST" action="validar.php">
		<h2> <b>Área Restrita</b> </h2> <br>
		Login <input type="text" name="login" required autofocus="" placeholder="Login">
		Senha <input type="password" name="senha" placeholder="Senha"> 
		<input type="submit" name="btn_enviar" value="Acessar"> <br><br>
	</form>


	<?php 
		if (isset($_SESSION['ErroLogin'])) {
			echo $_SESSION['ErroLogin'];
			unset($_SESSION['ErroLogin']);
		}
		if (isset($_SESSION['DeslogarUsuario'])) {
			echo $_SESSION['DeslogarUsuario'];
			unset($_SESSION['DeslogarUsuario']);
		}


	 ?>
</body>
</html>