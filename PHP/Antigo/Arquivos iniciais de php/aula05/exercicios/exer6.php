<?php 


$nome = $_GET['nome'];
$idade = $_GET['id'];
$endereco = $_GET['end'];
$email = $_GET['email'];

echo "Seu nome é: $nome <br> Sua idade é: $idade <br> Seu endereço é: $endereco <br> Seu e-mail é: $email <br><br><br>";


echo "Seu nome é: ".$_GET['nome']."<br> Sua idade é: ".$_GET['id']."<br> Seu endereço é: ".$_GET['end']."<br> Seu email é: ".$_GET['email'];
 ?>