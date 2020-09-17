<?php 

function teste($callback){
	
	//processo lento // Ex: processamento de um vídeo 
	
	$callback();
}

teste( //chamar funcao para //ex: processar um video
	function(){
		echo "Terminou!";
	}
);

 ?>