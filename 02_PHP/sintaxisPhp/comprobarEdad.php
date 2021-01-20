<?php

// Declaro variables
$nombre = "Juan";
$ciudad = "CABA";
$edad = 27;
$mayoriaDeEdad = 18;

if($edad >= $mayoriaDeEdad){
    echo '<h1>'.$nombre.' es mayor de edad</h1>';
    echo '<h1> Y es de '.$ciudad.'</h1>';
} else {
    echo '<h2>'.$nombre.' es menor de edad(tiene menos de 18)</h2>';
}
?>