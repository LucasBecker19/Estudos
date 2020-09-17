<!DOCTYPE html>
<html>
<head>
	<title> Pesquisa </title>
	<meta charset="utf-8">
</head>
<body>
		<form method="POST" action="pesquisa.php"> 
			Digite o seu nome: <input type="text" name="nome" required=""><br>
			
			Digite a sua idade: <input type="number" name="idade" required=""><br>
			
			<b>Escolha o(s) gênero(s) musical(is) de sua preferência </b><br>
			<input type="checkbox" name="musicas[]" value="setaneja"> Sertanejo 
			<input type="checkbox" name="musicas[]" value="rock"> Rock 
			<input type="checkbox" name="musicas[]" value="pagode"> Pagode 
			<input type="checkbox" name="musicas[]" value="clássico"> Clássico 
			<input type="checkbox" name="musicas[]" value="funk"> Funk 
			<input type="checkbox" name="musicas[]" value="tecno"> Tecno <br><br>

			<b>Escolha o(s) gênero(s) de filme(s) de sua preferência</b><br>
			<input type="checkbox" name="filmes[]" value="terror"> Terror 
			<input type="checkbox" name="filmes[]" value="romance"> Romance
			<input type="checkbox" name="filmes[]" value="aventura"> Aventura 
			<input type="checkbox" name="filmes[]" value="comédia"> Comédia
			<input type="checkbox" name="filmes[]" value="drama"> Drama
			<input type="checkbox" name="filmes[]" value="infantil"> Infantil <br><br>

			<input type="checkbox" name="respostas" checked=""> Você permite que suas respostas sejam compartilhadas? <br><br> 
			<input type="submit" name="btn_enviar" value="Enviar">
			<input type="reset" name="btn_apagar" value="Apagar">









		</form>
</body>
</html>