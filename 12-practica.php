<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kary Ruiz">
    <meta name="description" content="Página de practica sobre 
    variables predefinidias en PHP">
    <title>Practica 12</title>
</head>
<body>
    <header>
        <h1>VARIABLES PREDEFINIDAS EN PHP</h1>
    </header>

<!-- Código PHP-->
    <?php
    
        /*Una 'superglobal' es una variable que simpre es accesible
        independientemente del alcance y se puede acceder en php
        a través de cualquier función, clase o archivo*/

        echo $_SERVER['SCRIPT_NAME'] ;   //'server' es una matriz que incluye información creada por el servidor web
                                        //'script_name' devuelve el nombre del script actual
        echo '<br />';
        echo $_SERVER['PHP_SELF'];      //regresa el archivo actual donde se ejecuta el script
        echo '<br />';
        echo $_SERVER['SERVER_ADDR'];      //regresa la dirección IP del host
        echo '<br />';
        echo $_SERVER['HTTP_HOST'];      //regresa el encabezado del host de la solicitud actual
        echo '<br />';
        echo $_SERVER['REMOTE_ADDR'];      //regresa la dirección ip de donde el usuario está haciendo la solicitud
        echo '<br />';
        echo $_SERVER['REMOTE_PORT'];      //regresa el puerto del servidor
        echo '<br />';
        echo $_SERVER['SCRIPT_FILENAME'];  //regresa la ruta del script actual 
        echo '<br />';
        echo $_SERVER['SERVER_PORT'];     //regresa el puerto del servidor donde se ejecuta el script actual
        echo '<br />';
        echo $_SERVER['GATEWAY_INTERFACE'];     //regresa la versión del gateway CGI qur el servidor usa
        echo '<br />';
        echo $_SERVER['SERVER_SOFTWARE'];     //regresa la identificación del servidor
        echo '<br />';
        echo $_SERVER['SERVER_PROTOCOL'];     //regresa la información del protocolo usado
        echo '<br />';
        echo $_SERVER['REQUEST_METHOD'];       //regresa el tipo de método usado para acceder a la página
        echo '<br />';
        echo $_SERVER['REQUEST_TIME'];          //regresa el tiempo cuando comenzó la solicitud
        echo '<br />';
        echo $_SERVER['SERVER_ADMIN'];          //regresa el valor dado para el server_admin
        echo '<br />';
        echo $_SERVER['SERVER_SIGNATURE'];      //regresa la versión del servidor y el nombre del host virtual

        ?>
<!-- /.. -->

</body>
</html>