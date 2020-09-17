<?php 
$distancia = $_POST['distancia'];
$kmporlitro = $_POST['kmporlitro'];
$preco = $_POST['preco'];

echo "O gasto da viagem foi de R$ ",($distancia/$kmporlitro)*$preco; 

/*
20km
5km por litro
4 reais
*/
?>