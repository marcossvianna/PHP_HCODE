<?php 

	$nome = (int)$_GET["a"]; 

	//var_dump($nome); 

	$ip = $_SERVER["REMOTE_ADDR"]; 
	echo($ip); 


	$ip = $_SERVER["SCRIPT_NAME"]; 
	echo($ip);	 


?>