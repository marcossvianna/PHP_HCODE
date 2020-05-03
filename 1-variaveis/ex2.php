<?php

/*  $anoNascimento = 1990;
    $nomeCompleto = "";*/
    
    $nome1 = "Marcos";
    $sobrenome = "Santana Viana";
    $nomeCompleto = $nome1. " " . $sobrenome;
    echo $nomeCompleto;
    
    exit;
    
    echo $nome1;
    echo "<br/>";
	
    unset($nome1);
    if (isset($nome1)){
        echo $nome1;
    }

?>