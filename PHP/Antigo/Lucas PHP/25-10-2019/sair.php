<?php 

session_start();

if (isset($_SESSION['usuario'])) {
	
	unset($_SESSION['usuario']);
	$_SESSION['DeslogarUsuario'] = 'Usuário deslogado com sucesso!';
	header("Location: index.php");


}
else{
	$_SESSION['ErroLogin'] = 'Você não pode fazer logoff sem estar logado';
	header("Location: index.php");
}


 ?>