<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir por pantalla en PHP</title>
</head>
<body>
    <?php
        // Titular de la seccion
        echo "<h2>Listado de videojuegos</h2>";
        // Lista de videojuegos
        echo "<ul>"
                ."<li>Zelda</li>"
                ."<li>Mario Bros</li>"
                ."<li>Tetris</li>"
            ."</ul>";
    ?>

    <!-- Echo atajado -->
    <?="Esto es un ECHO rapido o mejor conocido como atajado"?>
</body>
</html>