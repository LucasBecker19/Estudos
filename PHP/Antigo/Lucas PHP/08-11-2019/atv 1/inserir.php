<?php 
include("conexao.inc.php");

$conexao = conectar("localhost","root","","pesquisa");

$gravarnome = trim($_POST['nome']); // o trim elimina espaços no início ou no fim
$gravarprojeto = trim($_POST['projeto']);
$gravarorientador = trim($_POST['orientador']);
$gravardatainicio = trim($_POST['datainicio']);
$gravardatatermino = trim($_POST['datatermino']);
$gravarvalorbolsa = trim($_POST['valorbolsa']);

$consultaSQL = "INSERT INTO bolsista(nome,projeto,orientador,datainicio,datatermino,valorbolsa) values('$gravarnome','$gravarprojeto','$gravarorientador','$gravardatainicio','$gravardatatermino','$gravarvalorbolsa' )";


if ($_GET['funcao']== cadastrar) {
	mysqli_query($conexao,$consultaSQL);
	desconectar($conexao);
	header("Location:visualizar.php");
}

 ?>