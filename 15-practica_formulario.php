<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATOS</title>
</head>
<body>
    <header>
        <h1>DATOS</h1>
    </header>
    <main>
        <p>
            Bienvenido <?php echo $_POST['firstname']." ".$_POST['lastname']; ?><br></p>
            Tienes <?php echo $_POST['age']." años de edad"; ?><br>
            Tu situción sentimental: <?php echo $_POST['drink']; ?><br>
            Teléfono: <?php echo $_POST['tel']; ?><br>
            Email: <?php echo $_POST['email']; ?><br>
            Your comments: <?php echo $_POST['comments']; ?><br>
        </p>
    </main>
</body>
</html>