<?php

    /* Para acceder a los datos dentro de la BD 
    primero necesitamos conectarnos al servidor*/

    $servername = "localhost";
    $username = "root";
    $password = "";

    //crear conexión
    $conn = new PDO("mysql:host=$servername;dbname=prueba", $username, $password);

   
    try {
        //si no encontró errores muestra la conexión exitosa
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión exitosa";

    } catch (PDOException $e) {
        echo "Conexión fallida".$e->getMessage();
        //en caso de encontrar error lo muestra
    }

?>