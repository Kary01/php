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
        <p>Welcome <?php echo $_POST['firstname']." ".$_POST['lastname']; ?></p>
        <p> 
            You are: <?php echo $_POST['age']." years old"; ?><br>
            Water or Soda: <?php echo $_POST['drink']; ?><br>
            Telephone: <?php echo $_POST['tel']; ?><br>
            Email: <?php echo $_POST['email']; ?><br>
            Your comments: <?php echo $_POST['comments']; ?><br>
        </p>
    </main>
</body>
</html>