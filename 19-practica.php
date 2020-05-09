<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kary Ruiz">
    <meta name="description" content="Página de practica sobre leer archivos en PHP">
    <title>Practica 19</title>
</head>
<body>
    <header>
        <h1>MANEJO DE ARCHIVOS</h1>
    </header>
    <main>
        <?php

            //ABRIR CERRAR Y LEER UN ARCHIVO

            $myfile = fopen("archivoejemplo.txt", "r") or die("Unable to open file!");
            /* la función 'fopen' brinda más opciones 
            el primer parámetro contiene el nombre del archivo
            el segundo parámetro contiene el modo de abrir el archivo*/
            
            echo fread($myfile,filesize("archivoejemplo.txt"))."<br>";
            /* la función 'fread' lee el archivo
            el primer parámetro contiene el nombre del archivo
            el segundo parámetro indica el número máximo de bytes a leer*/

            fclose($myfile);
            /* la función 'fclose' se usa para cerrar un archivo abierto */


            //CREAR UN ARCHIVO

            $cfile = fopen("testfile.txt", "w") or die("Unable to open file!");
            //función para crear un archivo
            $txt = "Kary estuvo aquí";
            //texto dentro del archivo
            fwrite($cfile, $txt);
            fclose($cfile);

            
            //prueba
            $testprac = fopen("testfile.txt", "r") or die("Unable to open file!");
            echo fread($testprac,filesize("testfile.txt"));
            fclose($testprac);


        ?>
    </main>
</body>
</html>