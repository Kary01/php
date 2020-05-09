<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kary Ruiz">
    <meta name="description" content="Página de practica sobre
    la función fecha en PHP">
    <title>Practica 18</title>
</head>
<body>
    <header>
        <h1>FUNCIÓN FECHA</h1>
    </header>
    <main>
        <?php
        
            /*la función date() formatea 
            una marca de tiempo a una fecha y hora más legible*/
            echo "<h2>FORMATO FECHA</h2>";
            echo "Today is ".date("Y/m/d")."<br>";
            echo "Today is ".date("d-m-Y")."<br>";
            echo "Today is ".date("d.m.Y")."<br>";
            echo "Today is ".date("l.d.m.Y")."<br>";
            echo "Today is ".date("l")."<br>";

            echo "<h2>FORMATO HORA</h2>";
            echo "The time is ".date("h:i:s")."<br>";
            echo "The time is ".date("h a")."<br>";
            echo "The time is ".date("h:i a")."<br>";

            echo "<h2>ZONA HORARIA</h2>";
            //date_default_timezone_set("America/New_York");
            date_default_timezone_set("America/Mexico_City");
            echo "The time is ".date("h:i a")."<br>";

            echo "<h2>CREAR UNA FECHA</h2>";
            $d = mktime(12,32,43,8,8,2020);
            echo "Create date is: ".date("Y-m-d h:i:s a", $d)."<br>";

            echo "<h2>FECHA A PARTIR DE UNA CADENA</h2>";
            $a = strtotime("tomorrow");
            echo date("d-m-Y h:i:s a",$a);

            // 'd' representa el día del mes (01 a 31)
            // 'm' representa un mes (01 a 12)
            // 'Y' representa un año (en cuatro digitos)
            // 'l' representa el día de la semana
            // caracteres como '/' '.' '-' se pueden agregar para dar formato
            // 'H' formato de 24 horas de una hora (00 a 23)
            // 'h' formato de 12 horas con ceros a la izquierda (00 a 12)
            // 'i' formato de minutos con ceros a la izquierda (00 a 59)
            // 's' formato de segundos con ceros a la izquierda (00 a 59)
            // 'a' minúsculo ante meridem y post meridem (am y pm)
        ?>
    </main>
    <footer>
        <!-- La función fecha puede ser usada para actualizar automáticamente el año del copyright -->
        <h2>Copyright</h2>
        <p>&copy; <?php echo date('Y'); ?></>
    </footer>
</body>
</html>