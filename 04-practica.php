<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kary Ruiz">
    <meta name="description" content="Página de practica sobre variables en PHP">
    <title>Practica 04</title>
</head>


<!-- Código PHP -->
    <?php

        //En php las variables se representan con un signo de dólar seguido del nombre
        $var = "José";
        $Var = "Juan"; //php es sencible al uso de mayúsculas y minúsculas

        //las constantes una vez definodas no pueden ser cambiadas en el resto del código, inician con la función define()
        define('birthday', '08-08-1996'); //parámetros: nombre de la variable, valor de la variable, será o no sensible a mayúsculas/minúsculas
        
        /*variable scopes (alcance)
        - una variable FUERA de una función tiene un alcance GLOBAL
        - una variable DENTRO de una función tiene un alcance LOCAL */
        $name = "Kary";
        
        function getName(){
            global $name; //la clave 'global' es usada para acceder a variables globales
            echo $name;
        }
    ?>
<!-- /.. -->


<body>
    <header>
        <h1>VARIABLES EN PHP</h1>
    </header>
    <main>
        <p><?php echo $var; ?></p>
        <p><?php echo $Var; ?></p>

        <p><?php echo birthday; ?></p> <!-- para las constantes no es necesario el signo $ -->

        <p><?php getName(); ?></p> <!-- para llamar a la función -->
    </main>
</body>
</html>