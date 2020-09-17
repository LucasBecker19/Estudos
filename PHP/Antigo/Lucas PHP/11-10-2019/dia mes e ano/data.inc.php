<?php 

$meses = array("janeiro", "fevereiro","março","abril","maio","junho","julho","agosto","setembro","outubro","novembro","dezembro");
$dia = date("d", time());
$mes = date("m", time());
$ano = date("Y", time()); //maiúsculo pra mostrar os 4 números do ano

echo "$dia de " .$meses[$mes-1]." de $ano <br>"; //-1 porque o array começa no 0 e não no 1

 ?>