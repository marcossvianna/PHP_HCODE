<?php 

// Precedencia de operadores 

$resultado  = 10 + 3 / 2; 
echo $resultado; 
echo "<br>"; 
$resultado  = (10 + 3) / 2; 
echo $resultado; 
echo "<br>"; 
$resultado  = (10 + 3) / 2 > 5 && 10 + 5 < 3; // && (and) compara duas 
var_dump($resultado); 
echo "<br>"; 
$resultado  = (10 + 3) / 2 > 5 || 10 + 5 < 3; // || (or) compara duas 
var_dump($resultado); 
echo "<br>"; 

?>