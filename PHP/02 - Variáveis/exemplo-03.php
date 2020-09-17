<?php 


///////////////////////////básicos
$nome = "Hcode";    //texto
$site = 'www.hcode.com.br';
$ano = 1990;        //número inteiro
$salario = 5500.99; //ponto flutuante (float)
$bloqueado = false; //booleano



///////////////////////////compostos
$frutas = array("abacaxi","laranja","manga");
echo $frutas[2];
echo "<br/>"; //quebrar linha
$nascimento = new DateTime(); // sempre que tiver "new", é POO
//var_dump($nascimento); // mostra o tipo da variável



/////////////////////////// especiais
$arquivo = fopen("exemplo-03.php", "r"); //resource
//var_dump($arquivo);
$nulo = NULL;


 ?>