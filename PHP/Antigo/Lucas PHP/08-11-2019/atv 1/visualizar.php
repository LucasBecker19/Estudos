<?php 
include("conexao.inc.php");


$conexao = conectar("localhost","root","","pesquisa");

$consultaSQL = "SELECT * FROM bolsista";


$query = mysqli_query($conexao,$consultaSQL);



?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista de Bolsistas Cadastrados</title>
</head>
<body>
	<h3><b>Lista de Bolsistas Cadastrados na base</b></h3>
	<br><br>
	<table border="1">
		<tr>
			<td><b><center>Identificador</center></b></td>
			<td><b><center>Nome bolsista</center></b></td>
			<td><b><center>Título Projeto</center></b></td>
			<td><b><center>Nome Orientador</center></b></td>
			<td><b><center>Data Início Projeto</center></b></td>
			<td><b><center>Data término Projeto</center></b></td>
			<td><b><center>Valor bolsa</center></b></td>
		</tr>

		<?php 

			while ($resultado = mysqli_fetch_array($query)) {
				
				?>

				<tr>
					<td><center><?php echo $resultado['idbolsista']; ?></center></td>
					<td><center><?php echo $resultado['nome']; ?></center></td>
					<td><center><?php echo $resultado['projeto']; ?></center></td>
					<td><center><?php echo $resultado['orientador']; ?></center></td>
					<td><center><?php echo date('d/m/Y', strtotime($resultado['datainicio'])); ?></center></td>
					<td><center><?php echo date('d/m/Y', strtotime($resultado['datatermino'])); ?></center></td>
					<td><center><?php echo $resultado['valorbolsa']; ?></center></td>

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
