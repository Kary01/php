<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kary Ruiz">
    <meta name="description" content="Página de practica sobre formularios en PHP">
    <title>Practica 14</title>
</head>
<body>
    <header>
        <h1>FORMULARIO EN PHP</h1>
    </header>
    <main>
        <p>Welcome <?php echo $_POST['name']; ?></p>
        <p>Your age is: <?php echo $_POST['age']; ?></p>
        
        <!-- Podemos acceder a los datos del formulario utilizando
        la matriz asociativa $_POST 
        
        La matriz superglobal $_POST contiene pares clave/valor 
        Las claves son los 'name' de los controles de formulario 
        y los valores son los 'datos de entrada' ingresados por los usuarios -->
    </main>
</body>
</html>