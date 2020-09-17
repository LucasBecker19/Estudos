<?php 
session_start();


if (isset($_POST['login']) and isset($_POST['senha']) and isset($_POST['perfil'])) {
	
	if ($_POST['login']=='pedrosilva' and $_POST['senha']=='123456' and $_POST['perfil']=='Administrador') {
		$_SESSION['usuario'] = $_POST['login'];
		$_SESSION['id']= 1;
		header("Location: administrador.php");
	}
	else if ($_POST['login']=='mariasilva' and $_POST['senha']=='123456' and $_POST['perfil']=='Desenvolvedor') {
		$_SESSION['usuario'] = $_POST['login'];
		$_SESSION['id']= 2;
		header("Location: desenvolvedor.php");
	}
	else if ($_POST['login']=='josesilva' and $_POST['senha']=='123456' and $_POST['perfil']=='Usuário') {
		$_SESSION['usuario'] = $_POST['login'];
		$_SESSION['id']= 3;
		header("Location: usuario.php");
	}
	else{
		$_SESSION['loginerro'] = "Usuário e/ou senha e/ou perfil incorretos";
		header("Location: index.php");
	}

}
else{
	$_SESSION['loginerro'] = "Usuário e/ou senha e/ou perfil incorretos";
	header("Location: index.php");
}
 ?>

