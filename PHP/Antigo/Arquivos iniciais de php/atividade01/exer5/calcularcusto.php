<?php 

$distancia = $_POST['d'];
$consumo = $_POST['c'];
$preco = $_POST['p'];

$custo = $distancia/$consumo * $preco;
echo "O total gasto na viagem é: R$ $custo";




 ?>