<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kary Ruiz">
    <meta name="description" content="Página de practica sobre switch en PHP">
    <title>Practica 09</title>
</head>
<body>
    <header>
        <h1>DECLARACIÓN DE CAMBIO "Switch"</h1>
    </header>
    <main>

<!-- Código PHP -->
    <?php   
        /*La instrucción switch es una alternativa 
        a la instrucción if elseif else*/

        $today = "Thursday";

        switch ($today) { //se evalua la variable
            case 'Monday':   //si existe una coincidencia, se ejecuta el bloque de código asociado
                echo "<p>Today is Monday</p>";   //código a ejecutar si resulta verdadero  
                break;
            case 'Tuesday':
                echo "<p>Today is Tuesday</p>";
                break;
            case 'Wednsday':
                echo "<p>Today is Wednsday</p>";
                break;
            case 'Thursday':
                echo "<p>Today is Thursday</p>";
                break;
            case 'Fidray':
                echo "<p>Today is Friday</p>";
                break;
            case 'Saturday':
                echo "<p>Today is Saturday</p>";
                break;
            case 'Sunday':
                echo "<p>Today is Sunday</p>";
                break;
            default:        //'default' se usa en caso de que no se encuentren coincidencias
                echo "<p>Invalid day</p>";
                break;      //la palabra clave 'break' se usa para evitar que el código se siga ejecutando 
        }

        include "10-practica.php";
    ?>
<!-- /.. -->

    </main>
</body>
</html>