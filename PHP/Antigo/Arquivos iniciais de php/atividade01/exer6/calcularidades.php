<?php 
$aa = $_POST['aa'];
$an = $_POST['an'];

$idadeanos = $aa - $an;
$idademeses = $idadeanos * 12;
$idadesemanas = $idadeanos * 48;
$idadedias = $idadeanos * 365;

echo "Idade em anos: $idadeanos <br>" ;
echo "Idade em meses: $idademeses <br>" ;
echo "Idade em semanas: $idadesemanas <br>" ;
echo "Idade em dias: $idadedias <br>" ;










 ?>