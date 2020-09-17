<?php 

session_start();

if (isset($_SESSION['usuario'])) {
	$nome = $_SESSION['usuario'];
	echo "$nome você entrou em uma área restrita, o que deseja fazer? <br><br>";
 ?>
<a href="sair.php"> Sair </a>

 <?php 


}
else{
	$_SESSION['ErroLogin'] = 'Login e/ou senha inválidos';
	header("Location: index.php");
}




 ?>