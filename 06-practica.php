<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kary Ruiz">
    <meta name="description" content="Página de practica sobre declaraciones condicionales en PHP">
    <title>Practica 06</title>
</head>
<body>
    <header>
        <h1>DECLARACIONES CONDICIONALES</h1>
    </header>
    <main>

<!-- Código PHP -->
<?php
        /*La condición 'if else' se usa para ejecutar cierto código 
            si una condición es verdadera y otro código si la 
            condición es falsa*/
        $age = 23;

        if ($age > 18) { //condición
            echo '<p>Eres mayor de edad</p>'; //si la condición es verdadera
        }else{
            echo '<p>No eres mayor de edad</p>'; //si no se cumple
        }


        /*La condición 'if elseif else' usa una nueva condición en caso
            de que la primer condición sea falsa*/
        $num = 10;

        if ($num > 10) {
            echo "<p>Tu número es mayor a 10</p>";
        }elseif ($num === 10) {
            echo "<p>Tu número es igual a 10</p>";
        }else {
            echo "<p>Tu número es menor a 10</p>";
        }       
        
        
        $edad = 15;

        if ($edad < 15) {
            echo "<p>Eres un bebeshito</p>";
        }elseif ($edad >= 15 && $edad <= 18) {
            echo "<p>Eres un adolescente amargado</p>";
        }else {
           echo "<p>Ya te duermes temprano :c</p>";
        }

    ?>
<!-- /.. -->

    </main>
</body>
</html>