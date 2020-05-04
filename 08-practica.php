<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kary Ruiz">
    <meta name="description" content="Página de practica sobre ciclos for en PHP">
    <title>Practica 08</title>
</head>
<body>
    <header>
        <h1>CICLOS FOR EN PHP</h1>
    </header>
    <main>

<!-- Código PHP -->
    <?php
        /*Los ciclos for son usados cuando se sabe desde 
        antes cuántas veces se ejecutará el código*/

        for ($i=0; $i < 6; $i++) {  //los parámetros se separan con punto y coma
            echo "<p>El valor de i es: $i <br /></p>";
        }

        /*El bucle foreach solo funciona en arrays y se usa para recorrer
        cada par clave/valor en un array*/

        $names = array("David", "Joel", "Pablo", "Miguel");

        foreach ($names as $nombre) { //en la primera interación el valor del elemnto actual se asigna a $nombre
            echo "<p>$nombre <br /></p>"; //el puntero del array se mueve hasta alcanzar el último elemento
        }
    ?>
<!-- /.. -->

    </main>
</body>
</html>