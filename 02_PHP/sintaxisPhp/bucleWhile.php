<?php

/*
 * BUCLE WHILE
 *
 * Estructura de control que itera o repite la ejecucion de una serie de instrucciones
 * tantas veces como sea necesario, en base a una condicion.
 *
 * while(condicion){
 *      bloque de instrucciones
 * }
 *
 * */

$numero = 0;

while($numero <= 100){
    echo $numero;

    if($numero != 100){
        echo ", ";
    }

    $numero++;
}

// Ejemplos con While

// Ejemplo 01

if(isset($_GET['numero'])){
    // Cambiar tipo de dato
    $numero = (int)$_GET['numero'];
} else {
    $numero = 1;
}

// Ejemplo 02

echo "<h1>Tabla de multiplicar de el $numero</h1>";

$contador = 1;

while($contador <= 10){
    echo "$numero x $contador = ".($numero*$contador)."</br>";
    $contador++;
}

?>
