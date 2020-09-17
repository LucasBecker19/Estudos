<?php 
session_start();

if (isset($_SESSION['usuario'])) {
	
	unset($_SESSION['usuario'],$_SESSION['id']);
	$_SESSION['logout'] = 'Usuário deslogado com sucesso';
	header("Location: index.php");
}
else{
	$_SESSION['loginerro'] = 'Usuário e/ou senha e/ou perfil incorretos';
	header("Location: index.php");
}
 ?>
