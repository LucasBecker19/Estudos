<?php 
//TOTAL DE SEGUNDOS QUE JÁ SE PASSARAM.... leia as horas, minutos e segundos. Precisa botao enviar e apagar. 
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Quantos segundos se passaram?</title>
 </head>
 <body>
 	<form method="POST" action="calcularsegundos.php">
 		Digite as horas: <input type="number" name="horas" required=""> <br>
 		Digite os minutos: <input type="number" name="minutos" required=""> <br>
 		Digite os segundos: <input type="number" name="segundos" required=""> <br>
 		<input type="reset" name="btn_apagar" value="Apagar">
 		<input type="submit" name="btn_enviar" value="Enviar"><br><br>
 	</form>
 </body>
 </html>