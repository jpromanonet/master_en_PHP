<?php

    // Las constantes son como las variables PERO 
    // el valor de la constante no puede variar

    define('nombre', 'Juan');
    define('web', 'jpromano.net');

    web = "hola"; //No modifica el valor de la constante.

    echo'<h1>'.nombre.'</h1>';
    echo'<h1>'.web.'</h1>';

?>
