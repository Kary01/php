<!DOCTYPE html>

<!-- Código PHP -->
<?php
        $cookie_name="user";
        $cookie_value="kary";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
        //setcookie debe ir antes que la etiqueta <html></html>
    ?>
<!-- /.. -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kary Ruiz">
    <meta name="description" content="Página de practica sobre cookies en PHP">
    <title>Practica 21</title>
</head>
<body>
    <header>
        <h1>COOKIES EN PHP</h1>
    </header>
    <main>

<!-- Código PHP -->
    <?php
        if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!"; 
        } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
        }

        /*Al cargar por primera vez la página no encontrará el usuario
        al recargar la página lo encontrará y lo conservará por 1 día */
    ?>
<!-- /.. -->

    </main>
</body>
</html>