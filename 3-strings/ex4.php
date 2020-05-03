<?php 

// Uso de Strings - busca de conteudos 

$frase = "A repetição é mãe da retençao."; 
$palavra = "mãe"; 
$q = strpos($frase, "mãe"); // procura conteudos(haystack, needle) 
$texto = substr($frase, 0, $q); // mostra conteudo antes de mãe 

var_dump($texto); 

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase)); // mostra conteudo após a palavra mãe 
echo "<br>"; 

var_dump($texto2); 

?>


