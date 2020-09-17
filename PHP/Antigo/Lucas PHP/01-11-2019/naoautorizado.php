<?php 
session_start();

if (isset($_SESSION['acessonegado'])) {
	
	echo "Prezado(a) ".$_SESSION['usuario']." ".$_SESSION['acessonegado']."<br><br>";
	unset($_SESSION['acessonegado']);
	if ($_SESSION['id']==1) {
		
?>
		<input type="button" name="btn_voltar" value="Retornar à página de Administrador" onclick="location.href = 'administrador.php'">
		<input type="button" name="btn_logout" value="Logout" onclick="location.href = 'sair.php'">
<?php 


	}
	else if ($_SESSION['id'] == 2) {
		?>
		<input type="button" name="btn_voltar" value="Retornar à página de Desenvolvedor" onclick="location.href = 'desenvolvedor.php'">
		<input type="button" name="btn_logout" value="Logout" onclick="location.href = 'sair.php'">


		<?php 
	}
	elseif ($_SESSION['id']==3) {
		?>
		<input type="button" name="btn_voltar" value="Retornar à página de Usuário" onclick="location.href = 'usuario.php'">
		<input type="button" name="btn_logout" value="Logout" onclick="location.href = 'sair.php'">

		<?php 
	}


}
else{
	$_SESSION['loginerro'] = 'Usuário e/ou senha e/ou perfil incorretos';
	header("Location: index.php");
}

 ?>