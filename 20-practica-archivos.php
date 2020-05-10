<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kary Ruiz">
    <meta name="description" content="Página de practica 
    sobre la carga de archivos en PHP">
    <title>Practica 20</title>
</head>
<body>
    <header>
        <h1>CARGA DE ARCHIVOS</h1>
    </header>
    <main>
    <?php
        $target_dir = "C:\xampp\htdocs\PHP"; //especifica el directorio donde se colocará el archivo

        $target_file = $target_dir . basename($_FILES["archivo"]["name"]); //especifica la ruta del archivo a cargar
        
        $uploadOk = 1;
        
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //contiene la extención del archivo
        
        // Verifica si la imagen es real o falsa
        if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["archivo"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        }
    ?>
    </main>
</body>
</html>