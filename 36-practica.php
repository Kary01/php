<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "prueba";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql pera eliminar un dato donde id es 3
    $sql = "DELETE FROM MyGuests WHERE id=3";

    
    $conn->exec($sql);
    echo "Dato eliminado correctamente";
    } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?>