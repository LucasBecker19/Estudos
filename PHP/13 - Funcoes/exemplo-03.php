<?php 

	function ola(){

		$argumentos = func_get_args();

		return $argumentos;
	}

	var_dump(ola("bomdia",10));

 ?>