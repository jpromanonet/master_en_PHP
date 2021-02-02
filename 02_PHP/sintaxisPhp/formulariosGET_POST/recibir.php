<?php

// Usando GET
echo '<h1>'.$_GET['nombre'].'</h1>';
echo '<h1>'.$_GET['apellidos'].'</h1>';
echo '<h1>'.$_GET['web'].'</h1>';

// Todos los datos juntos
var_dump($_GET);

// Usando POST
echo '<h1>'.$_POST['nombre'].'</h1>';
echo '<h1>'.$_POST['apellidos'].'</h1>';
echo '<h1>'.$_POST['web'].'</h1>';

// Todos los datos juntos
var_dump($_POST);

?>
