<?php

$json = '[{"nome":"Joao","idade":10},{"nome":"Marcos","idade":18}]';

$data = json_decode($json, true);

var_dump($data);

?>