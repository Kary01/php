<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kary Ruiz">
    <meta name="description" content="Página de practica sobre operadores en PHP">
    <title>Practica 05</title>
</head>


<!-- Código PHP -->
    <?php
        //Operadores Aritméticos
        $num1 = 32;
        $num2 = 15;

        $suma = $num1 + $num2;
        $resta = $num1 - $num2;
        $multiplicar = $num1 * $num2;
        $dividir = $num1 / $num2;
        $modulo = $num1 % $num2;

        //operadores de incremento y decremento
        $a = 2;
        $b = $a++;  //post incremento 
        $c = 2;
        $d = $c--;  //post decremento

        $e = 2;
        $f = ++$e;  //pre incremento
        $g = 2;
        $h = --$g;  //pre decremento

        //operadores de comparación
        $equals = $num1 == $num2;
        $identical = $num1 === $num2; //evalua también el tipo de dato
        $notEquals = $num1 != $num2;
        $diferent = $num1 <> $num2;
        $notIdentical = $num1 !== $num2; //evalua el tipo de dato
        $graterthat = $num1 > $num2;
        $lessthat = $num1 < $num2;
        $mayorque = $num1 >= $num2;
        $menorque = $num1 <= $num2;

    ?>
<!-- /.. -->


<body>
    <header>
        <h1>OPERADORES EN PHP</h1>
    </header>
    <main>
        <div>
            <h2>Operadores Aritméticos</h2>
            <p><strong>Suma </strong>32 + 15 = <?php echo $suma; ?></p>
            <p><strong>Resta </strong>32 - 15 = <?php echo $resta; ?></p>
            <p><strong>Multiplicación </strong>32 * 15 = <?php echo $multiplicar; ?></p>
            <p><strong>División </strong>32 / 15 = <?php echo $dividir; ?></p>
            <p><strong>Módulo </strong>32 % 15 = <?php echo $modulo; ?></p>
        </div>
        <div>
            <h2>Operadores de Incremento y Decremento</h2>
            <p><strong>Post-incremento de 2: </strong><?php echo $b; ?></p> <!-- post devuelve el valor antes de que cambie-->
            <p><strong>Post-decremento de 2: </strong><?php echo $d; ?></p>
            <p><strong>Pre-incremento de 2: </strong><?php echo $f; ?></p> <!-- pre primero cambia el valor y lo devuelve -->
            <p><strong>Pre-decremento de 2: </strong><?php echo $h; ?></p> 
        </div>
        <div>
            <h2>Operadores de Comparación</h2>
            <p><strong>32 == 15: </strong><?php var_dump($equals); ?></p>
            <p><strong>32 === 15: </strong><?php var_dump($identical); ?></p>
            <p><strong>32 != 15: </strong><?php var_dump($notEquals); ?></p>
            <p><strong>32 <> 15: </strong><?php var_dump($diferent); ?></p>
            <p><strong>32 !== 15: </strong><?php var_dump($notIdentical); ?></p>
            <p><strong>32 > 15: </strong><?php var_dump($graterthat); ?></p>
            <p><strong>32 < 15: </strong><?php var_dump($lessthat); ?></p>
            <p><strong>32 >= 15: </strong><?php var_dump($mayorque); ?></p>
            <p><strong>32 <= 15: </strong><?php var_dump($menorque); ?></p>
        </div>
    </main>
</body>
</html>