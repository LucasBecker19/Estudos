<?php 

session_start();

if(isset($_POST['login']) and isset($_POST['senha'])){
	if ($_POST['login'] == 'lucas' and $_POST['senha'] == '123') {
		$_SESSION['usuario'] = $_POST['login'];
		header("Location: restrito.php");
	}
	else{
		$_SESSION['ErroLogin'] = 'Login e/ou senha inválidos';
		header("Location: index.php");
	}
 }
else{
	$_SESSION['ErroLogin'] = 'Login e/ou senha inválidos';
	header("Location: index.php");
}



?>