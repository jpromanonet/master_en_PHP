<?php

// Una variable es un contenedor de informacion, puedo guardar cualquier dato en el.
$miPrimeraVariable = "Hola mundo desde PHP";
$numero = 44;
$verdadero = true;

// Le re-asignamos otro valor a numero y mostrara 77 y no 44
// porque el contenido de las variables se sustituye
$numero = 77;

echo '<h1>'.$miPrimeraVariable.'</h1>';
echo $numero.'</br>';
echo $verdadero.'</br>';

?>