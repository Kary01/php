<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kary Ruiz">
    <meta name="description" content="Página de practica sobre
    validaciones en PHP">
    <title>Document</title>

    <!-- Código CSS -->
    <style>
        .error{
            color: red;
        }
    </style>
    <!-- /.. -->
</head>
<body>
    <header>
        <h1>VALIDACIONES EN PHP</h1>
    </header>
    <main>
        <h2>PHP FORM VALIDATION EXAMPLE</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <!-- 'htmlspecialchars' guardará código escapado HTML eviando robo de información  -->
            


            <!-- Código PHP -->
            <?php
            
            //definición de variables
            $name = "";
            $email = "";
            $gender = "";
            $comment = "";
            $website = "";

             //variables con campos requeridos
             $nameErr = "";
             $emailErr = "";
             $genderErr = "";

            //validación de envío del formulario
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                //validación de campos vacíos
                if(empty($_POST["name"])){
                    $nameErr = "Name is required";
                }else{
                    $name = test_input($_POST["name"]);
                }

                if(empty($_POST["email"])){
                    $emailErr = "Email is required";
                }else{
                    $email = test_input($_POST["email"]);
                }

                if(empty($_POST["gender"])){
                    $genderErr = "Gender is required";
                }else{
                    $gender = test_input($_POST["gender"]);
                }

                $comment = test_input($_POST["comment"]);
                $website = test_input($_POST["website"]);
            }

            //función que evalúa y elimina espacios inecesarios o caracteres especiales ingresados
            function test_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            ?>
            <!-- /.. -->


            <fieldset>
                <legend>Information</legend>
                <span class="error">* required field</span>
                <br><br>
                <label for="name">Name:</label>
                <input type="text" name="name" id="user-name">
                <span class="error">* <?php echo $nameErr; ?></span>
                <br><br>
                <label for="email">Email:</label>
                <input type="email" name="email" id="user-email">
                <span class="error">* <?php echo $emailErr; ?></span>
                <br><br>
                <label for="website">Website:</label>
                <input type="url" name="website" id="user-website">
                <br><br>
                <label for="comment">Comment:</label>
                <textarea name="comment" id="user-comment" cols="40" rows="5"
                placeholder="comment..."></textarea>
                <br><br>
                <label for="gender">Gender:</label>
                <input type="radio" name="gender" value="Female">Female
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Other">Other
                <span class="error">* <?php echo $genderErr; ?></span>
                <br><br>
                <button type="submit">Send</button>
            </fieldset>
        </form>
        
        <h2>YOUR INPUT:</h2>
        <?php
            echo $name;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $website;
            echo "<br>";
            echo $comment;
            echo "<br>";
            echo $gender;
        ?>
    </main>
</body>
</html>