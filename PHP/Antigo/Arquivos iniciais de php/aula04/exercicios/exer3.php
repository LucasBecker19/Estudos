<?php 

$iban = "pt50000067263-27616176433";
$status = "Ativo";
$senha = "45p-7a06";

echo "Número da conta: $iban <br>";
echo "Código do País: ".substr($iban,0,4)."<br>";
echo "Número da conta sem o código do pais: ".substr($iban,4)." Status: ".$status;


?>