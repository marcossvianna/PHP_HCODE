<?php

/*
for ($i=0; $i < ; $i++) { 
    # code...
}
*/
/*
for ($i=0; $i < 10; $i++) { 
    echo $i . "<br>";
}

for ($i=0; $i < 1000; $i+=5) { 
    echo $i . "<br>";
}
*/

for ($i=0; $i < 100; $i+=5) { 
    if ($i > 20 && $i < 80) continue;
    if ($i === 90) break;
    echo $i . "<br>";
}

?>

<?php


for ($i=date("Y"); $i > date("Y") - 10; $i--) { 
    echo $i . "<br>";
}


?>