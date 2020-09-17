<?php 
$nascimento = $_POST['nascimento'];
$atual = $_POST['atual'];
echo "Sua idade em anos: ",$atual-$nascimento,"<br>";
echo "Sua idade em meses: ",($atual-$nascimento)*12,"<br>";
echo "Sua idade em semanas: ",($atual-$nascimento)*52,"<br>"; //um ano tem 52 semanas - by google
echo "Sua idade em dias: ",($atual-$nascimento)*365,"<br>"; 
 ?>