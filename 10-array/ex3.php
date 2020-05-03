<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Joao',
    'idade' => 10
));

array_push($pessoas, array(
    'nome' => 'Marcos',
    'idade' => 18
));

print_r($pessoas);

print_r($pessoas[0]['nome']);

?>