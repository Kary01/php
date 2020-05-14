<?php

    /* Una declaración preparada es una característica utilizada 
    para ejecutar las mismas declaraciones SQL (o similares) repetidamente 
    con alta eficiencia.*/


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "prueba";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // preparar sql y párametros elazados
    $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
    VALUES (:firstname, :lastname, :email)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);

    // insertar una fila
    $firstname = "Hugo";
    $lastname = "Lara";
    $email = "Hugo@example.com";
    $stmt->execute();

    // insertar otra fila
    $firstname = "Martin";
    $lastname = "Ruiz";
    $email = "Martin@example.com";
    $stmt->execute();

    // insertar otra fila
    $firstname = "Julia";
    $lastname = "Zamora";
    $email = "julia@example.com";
    $stmt->execute();

    echo "Nuevo registro éxitoso";
    } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
    $conn = null;

?>