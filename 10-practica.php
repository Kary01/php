<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kary Ruiz">
    <meta name="description" content="Página de practica sobre include y require en PHP">
    <title>Practica 10</title>
</head>
<body>
<!-- Código PHP -->
    <?php
        //contenido estándar de ejemplo
        echo "<hr>";
        echo "<h3>Encabezado h3</h3>";
        echo "<p>Ejemplo de include y require</p>";

        $x = 0;

        while ($x <= 7) {
            $x++;
        }echo $x;

        /*include sirve para añadir contenido estándar a varias páginas simultaneamente
        require sirve de la misma forma, pero la diferencia esta en cómo aceptan los errores*/
    ?>
<!-- /.. -->
</body>
</html>