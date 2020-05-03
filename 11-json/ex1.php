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

echo json_encode($pessoas);


?>