<?php

/*
    Ejercicio 03

    Escribir un programa que imprima por pantalla los cuadrados
    (un número multiplicado por si mismo) de los 40 primeros numeros naturales.

    PD: utilizar bucle while
*/

# Definimos variables

$contador = 0;

# Logica del ejercicio
while($contador <= 40){
    $cuadrado = $contador*$contador;
    echo "<h3>$cuadrado</h3>";
}

?>