<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kary Ruiz">
    <meta name="description" content="Página de practica sobre
    la variable super global $_REQUEST">
    <title>Practica 16</title>
</head>
<body>
    <header>
        <h1>Practica 16</h1>
    </header>
    <main>
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <!-- La información se enviará a la misma página -->
            <label for="name">Name: </label>
            <input type="text" name="name" id="user-name">
            <label for="pwd">Password:</label>
            <input type="password" name="pwd" id="user-pwd">
            <button type="submit">Send</button>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == 'POST') {
                //recopila los datos de ingresados
                $name = $_REQUEST['name'];
                $pwd = $_REQUEST['pwd'];
                if (empty($name) || empty($pwd)) {
                    echo "Campos vacíos";
                }else{
                    echo "Name: ".$name."<br>";
                    echo "Password: ".$pwd;
                }
            }

            //$_REQUEST recopila los datos después de enviar un formulario
        ?>
    </main>
</body>
</html>