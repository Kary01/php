<?php

    //La instrucción UPDATE se usa para actualizar los registros existentes en una tabla
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "prueba";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE MyGuests SET firstname='Nataly' WHERE id=2";

    
    $stmt = $conn->prepare($sql);

    
    $stmt->execute();


    echo $stmt->rowCount() . "Registro actualizado correctamente";
    } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?>