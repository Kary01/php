<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "prueba";

    try {

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //sql
        $sql="SELECT * FROM USUARIOS_PASS WHERE USUARIOS= :username AND PASSWORD= :pwd";

        $result = $conn->prepare($sql);

        //revisar caracteres ingresados 
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];

        $result->bindParam(":username", $username);
        $result->bindParam(":pwd", $pwd);

        $result->execute();

        //valida si el usuario existe
        $num_registro = $result->rowCount(); //rowCount devuelve 0 1 en caso de existencias
        if ($num_registro !=0) {
            echo "HI";
        }else {
            header("location:38-practica-login.html"); //si no hay coincidencias regresa al login
        }

    }  catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?>