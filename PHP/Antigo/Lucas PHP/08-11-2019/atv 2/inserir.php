<?php 
include("conexao.inc.php");

$conexao = conectar("localhost","root","","universidade");

$gravarnome = trim($_POST['nome']); // o trim elimina espaços no início ou no fim
$gravarmatricula = trim($_POST['matricula']);
$gravarendereco = trim($_POST['endereco']);
$gravartelefone = trim($_POST['telefone']);
$gravardatanascimento = trim($_POST['datanascimento']);
$gravaremail = trim($_POST['email']);

$consultaSQL = "INSERT INTO aluno(nome,matricula,endereco,telefone,datanascimento,email) values('$gravarnome','$gravarmatricula','$gravarendereco','$gravartelefone','$gravardatanascimento','$gravaremail' )";


if ($_GET['funcao']== cadastrar) {
	mysqli_query($conexao,$consultaSQL);
	desconectar($conexao);
	header("Location:visualizar.php");
}

 ?>