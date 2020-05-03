<?php

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch (session_status()) {
    case PHP_SESSION_DISABLED:
        echo "A sessão esta desabilitada";
        break;
    
    case PHP_SESSION_NONE:
        echo "A sessão esta habilitada, mas não existe nenhuma sessão existe";
        break;    

    case PHP_SESSION_ACTIVE:
        echo "A sessão esta habilitada, e uma sessão existe";
        break;    

    default:
        # code...
        break;
}


?>