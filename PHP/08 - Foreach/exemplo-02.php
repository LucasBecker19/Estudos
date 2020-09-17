<form>

	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" name="OK">

</form>

<?php 

	foreach ($_GET as $name => $value) {
		echo "Nome do campo: ".$name."<br>";
		echo "Valor do campo: ".$value."<br>";
		echo "<hr>";
	}

 ?>