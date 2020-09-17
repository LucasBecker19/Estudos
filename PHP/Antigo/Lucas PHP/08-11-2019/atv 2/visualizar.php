<?php 
include("conexao.inc.php");


$conexao = conectar("localhost","root","","universidade");

$consultaSQL = "SELECT * FROM aluno";


$query = mysqli_query($conexao,$consultaSQL);



?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista de Alunos Cadastrados</title>
</head>
<body>
	<h3><b>Lista de Alunos Cadastrados na base</b></h3>
	<br><br>
	<table border="1">
		<tr>
			<td><b><center>Identificador</center></b></td>
			<td><b><center>Nome Aluno</center></b></td>
			<td><b><center>Matrícula</center></b></td>
			<td><b><center>Endereço</center></b></td>
			<td><b><center>Telefone</center></b></td>
			<td><b><center>Data Nascimento</center></b></td>
			<td><b><center>E-mail</center></b></td>
		</tr>

		<?php 

			while ($resultado = mysqli_fetch_array($query)) {
				
				?>

				<tr>
					<td><center><?php echo $resultado['idaluno']; ?></center></td>
					<td><center><?php echo $resultado['nome']; ?></center></td>
					<td><center><?php echo $resultado['matricula']; ?></center></td>
					<td><center><?php echo $resultado['endereco']; ?></center></td>
					<td><center><?php echo $resultado['telefone']; ?></center></td>
					<td><center><?php echo date('d/m/Y', strtotime($resultado['datanascimento'])); ?></center></td>
					<td><center><?php echo $resultado['email']; ?></center></td>

				</tr>
			<?php 
			}
			desconectar($conexao);
			 ?>
	</table>

	<br><br>

	<input type="button" name="btn_cadastrar" value="Voltar para a Tela de Cadastro" onclick="location.href = 'index.php'">
</body>
</html>
