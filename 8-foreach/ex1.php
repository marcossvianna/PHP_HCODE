<?php

$meses = array(
    "Janeiro", "Fevereiro", "Março", "Abril",
    "Maio", "Junho", "Julho", "Agosto",
    "Setembro",  "Outubro", "Novembro", "Dezembro"

);
/*
foreach ($variable as $key => $value) {
    # code...
}
*/

foreach ($meses as $index => $mes) {
    
    echo "Indice: ".$index. "<br/>";
    echo "O mês é: ".$mes. "<br/>"; 
}


?>


