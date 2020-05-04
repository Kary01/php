<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kary Ruiz">
    <meta name="description" content="Página de practica con tipos de datos en PHP">
    <title>Practica 02</title>
</head>


<!-- Código PHP -->
    <?php

        $decimal = 12345;       //número entero
        $negativo = -12345;     //número negativo
        $octal = 0123;          //número octal, equivale a 83 decimal
        $hexadecimal = 0x12;    //número hexadecimal, equivale a 18 decimal

        $flotante1 = 12.432;     //número double
        $flotante2 = 1.2e3;

        $srt1 = "Esto es una cadena";   //cadena de texto
        $srt2 = $srt1 . " con algo más de texto"; //concatenación de cadenas
        $srt3 = "Esta cadena contiene un número: $decimal"; //agregando variables
        $first = $srt1[0]; //obtiene el primer caracter de la cadena
        $last = $srt1[strlen($srt1)-1]; //obtiene el último caracter de una cadena

        //conversión de cadenas, el valor se da dependiendo de la posición incial de la cadena
        $foo = 1 + "10.5";
    ?>

<!-- /.. -->


<body>
    <header>
        <h1>TIPOS DE DATOS</h1>
    </header>
    <main>
        <!-- Numéros enteros -->
        <p><?php echo $decimal; ?></p>          <!-- De esta manera se puede incrustar código PHP en HTML-->
        <p><?php echo $negativo; ?></p>
        <p><?php echo $octal; ?></p>
        <p><?php echo $hexadecimal; ?></p>

        <!-- Números flotantes -->
        <p><?php echo $flotante1; ?></p>
        <p><?php echo $flotante2; ?></p>

        <!-- Cadenas -->
        <p><?php echo $srt1; ?></p>
        <p><?php echo $srt2; ?></p>
        <p><?php echo $srt3; ?></p>
        <p><?php echo $first; ?></p>
        <p><?php echo $last; ?></p>
        <p><?php echo $foo; ?></p>

    </main>
</body>
</html>