<?php

    /* Se puede insertar multiples datos al mismo tiempo */

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "prueba";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // inicio
    $conn->beginTransaction();
    // sentencias sql
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')");
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Mary', 'Moe', 'mary@example.com')");
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Julie', 'Dooley', 'julie@example.com')");

    // commit the transaction
    $conn->commit();
    echo "Nuevo registro éxitoso";
    } catch(PDOException $e) {
    // en caso de falla
    $conn->rollback();
    echo "Error: " . $e->getMessage();
    }

    $conn = null;
?>