<!-- Código PHP -->
<?php
// Comienzo de sesión, debe de ser lo primero antes de cualquier etiqueta HTML
session_start();
?>
<!-- /.. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kary Ruiz">
    <meta name="description" content="Página de practica sobre variables de sesión en PHP">
    <title>Practica 22</title>
</head>
<body>
    <header>
        <h1>VARIABLES DE SESIÓN</h1>
    </header>
    <main>

<!-- Código PHP -->
    <?php
        print_r($_SESSION);
        //muestra los valores de las variables de sesión
    ?>
<!-- /.. -->

    </main>
</body>
</html>