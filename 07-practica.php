<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kary Ruiz">
    <meta name="description" content="Página de practica sobre bucles while">
    <title>Practica 07</title>
</head>
<body>
    <header>
        <h1>BUCLES WHILE EN PHP</h1>
    </header>
    <main>

<!-- Código PHP -->
    <?php
        /*Cuando se desee repetir un mismo bloque de código
            resulta más eficiente utilizar bucles while. Si la condicion
            nunca se vuelve falsa, la instrucción se seguirá ejecutando indefinidamente*/
            $i = 0;

            while ($i <= 10) {
                echo "<p>El valor es: $i <br /></p>"; //código a ejecutar si se cumple la condición
                $i++;
            }

        /*El ciclo do while siempre ejecutará el código una vez*/
        $a = 8;

        do {
            echo "<p>El número es: $a <br /></p>";
            $a++;
        } while ($a <= 16); //la condición se evalua DESPUÉS de ejecutar las declaraciones
    ?>
<!-- /.. -->

    </main>
</body>
</html>