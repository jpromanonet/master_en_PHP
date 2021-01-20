<?php

// Declaro variables
$nombre = "Juan";
$edad = 27;
$mayoriaDeEdad = 18;

if($edad >= $mayoriaDeEdad){
    echo '<h1>'.$nombre.' es mayor de edad</h1>';
} else {
    echo '<h2>'.$nombre.' es menor de edad</h2>';
}
?>