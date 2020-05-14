<?php

    /* obtener el ID del último registro agregado */

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "prueba";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //sql para agregar un nuevo dato
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Nats', 'Ruiz', 'nats@example.com')";
    
    //ejecuta sql
    $conn->exec($sql);

    //obtener el último registro
    $last_id = $conn->lastInsertId();

    echo "Nuevo dato agregado, ID del último registro: " . $last_id;
    } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;

?>