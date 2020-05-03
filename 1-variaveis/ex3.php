<?php 

	$nome = "hcode"; // string 
	$site = 'www.hcode.com.br'; // string 

	$ano = 1990; // numerico 
	$salario = 5000.99; // float 
	$bloqueado = false; // boleano 

////////////////////////////////////////////// 

	$frutas = array('abacaxi','laranja','manga'); // array	 

    //echo $frutas[2]; 
    
    
	$nascimento = new DateTime(); // objeto 

	var_dump($nascimento); 

//////////////////////////////////////////////// 

	$arquivo = fopen("variaveis.php","r"); // resource 
 
	var_dump($arquivo); 

	$nulo = NULL; // nulo ausencia de valor 


?>