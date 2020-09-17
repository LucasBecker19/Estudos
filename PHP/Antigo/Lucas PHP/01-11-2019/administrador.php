<?php 
session_start();


if (isset($_SESSION['usuario'])) {
	
	if ($_SESSION['id']==1) {
		$login = $_SESSION['usuario'];
		
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Administrador</title>
		</head>
		<body>
			<h2><b>Seja bem vindo Sr(a) <?php echo $login; ?> à pagina de administrador</b></h2><br><br>

			<b>Suas atividades para hoje são: </b><br><br>
			- Otimização do Sistema Operacional; <br>
			- Configuração de um Cluster para processamento paralelo; <br>
			- Treinamento de Estagiários. <br><br>


			<a href="sair.php"> Efetuar Logout </a>	
		</body>
		</html>

		<?php 
	}
	elseif ($_SESSION['id']==2 or $_SESSION['id']==3) {
		$_SESSION['acessonegado'] = "Você tentou acessar uma página a qual não tem permissão, o que deseja fazer? <br><br>";
		header("Location: naoautorizado.php");
	}



}
else{
	$_SESSION['loginerro'] = 'Usuário e/ou senha e/ou perfil incorretos';
	header("Location: index.php");
 }
 ?>
