<?php

/*
FOR

for(variable contador, condicion, actualizando contador){
    // BLOQUE DE INSTRUCCIONES;
}

*/

$resultado = 0;

for($i = 0; $i <= 100; $i++){
    $resultado = $resultado + $i;
}

echo "<h1>El resultado es: $resultado</h1>";

?>