<?php
    /* insertar datos en mysql usando PDO 
        la consulta sql debe ser citada
        los valores en cadena deben ser citados
        los valores númericos no van citados
        la palabra null no va citada */


        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "prueba";
        
        try {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          //sql
          $sql = "INSERT INTO MyGuests (firstname, lastname, email)
          VALUES ('Kary', 'Ruiz', 'kary@example.com')";

          //ejecutar sql
          $conn->exec($sql);
          echo "Información agregada éxitosamente";
        } catch(PDOException $e) {
          echo $sql . "<br>" . $e->getMessage();
        }
        
        $conn = null;

?>