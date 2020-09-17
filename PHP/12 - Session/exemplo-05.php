<?php 

require_once("config.php");
echo session_save_path(); //mostra o local do arquivo temporário de sessão
echo "<br>";

var_dump(session_status());

echo "<br>";

echo (session_status()==0)?"Disabled":"";
echo (session_status()==1)?"None":"";
echo (session_status()==2)?"Active!":"";

 ?>