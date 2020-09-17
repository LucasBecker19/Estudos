<?php 

$anoNascimento = 1990;

$nome = "Lucas"; // números nas variáveis não são permitidos no início;

$sobrenome  = "Becker";

$nomeCompleto = $nome . " " . $sobrenome;

echo "Nome completo: " . $nomeCompleto;

exit; //para de compilar

echo "<br/>";

unset($nome); //apagar a variável

if (isset($nome)){ //if is set (se existe)
	echo $nome;
}
else{
	echo "Nome não existe";
}

 ?>