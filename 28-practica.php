<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "prueba";


    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
        // sql para crear la tablas
        $sql = "CREATE TABLE MyGuests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
        
        //ejecuta el sql
        $conn->exec($sql);
        echo "Tabla creada éxitosamente";

    } catch (PDOException $e) {
        echo $sql."<br>".$e->getMessage();
        //en caso de encontrar error

        $conn = null;
        //cerrar la conexión
    }
?>