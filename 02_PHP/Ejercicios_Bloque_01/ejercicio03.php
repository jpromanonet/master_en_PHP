<?php

/*
    Ejercicio 03

    Escribir un programa que imprima por pantalla los cuadrados
    (un número multiplicado por si mismo) de los 40 primeros numeros naturales.

    PD: utilizar bucle while
*/

# Definimos variables

$contador = 0;

# Logica del ejercicio usando While

while($contador <= 40){
    # Calculamos la raiz cuadrada de cada numero
    $cuadrado = $contador*$contador;
    # Imprimimos cada resultado
    echo "<h3>El cuadrado de $contador es $cuadrado</h3>";
    # Actualizamos el contador
    $contador++;
}

# Logica del ejercicio usando For

for($contador = 0; $contador <= 40; $contador++){
    # Calculamos la raiz cuadrada de cada numero
    $cuadrado = $contador*$contador;
    # Imprimimos cada resultado
    echo "<h3>El cuadrado de $contador es $cuadrado</h3>";
}

?>