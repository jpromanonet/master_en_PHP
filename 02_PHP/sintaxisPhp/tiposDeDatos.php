<?php

/*
Tipos de datos:

Entero(int o integer) = 99
Coma flotante / decimales (float / double) = 3.45
Cadenas(strong) = "Hola, yo soy un string"
Booleano (bool) = true OR false
null
Array(coleccion o lista de datos indexados)
Objetos

*/

$numero = 100;
$decimal = 27.9;
$texto = "Soy un texto";
$verdadero = true;

echo $verdadero;
echo gettype($texto);

// Las variables no pueden jamas comenzar con un número
// pero pueden contener o terminar en numero
// Solo guiones bajos, NO signo de operadores.
// Solo letras en ingles, nada de tiles o Ñ
//-------------------------------------------------------------

// Vamos a debuggear
$miNombre = "Juan";
var_dump($miNombre);

// Debuggeo un Array
$mi_nombre = "Juan Pablo Romano";
var_dump($mi_nombre);
?>