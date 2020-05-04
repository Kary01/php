<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kary Ruiz">
    <meta name="description" content="Página de practica sobre arrays y funciones en PHP">
    <title>Practica 03</title>
</head>


<!-- Código PHP -->
    <?php

        //arrays unidemensionales y multidimensional
        $a = ["abc", "def", "ghi", "jkl", "mno"];        //asignacón manual
        
        $b = ['elemento' => 23, 'dos' => 123, 'otro' => 54];    //asignación con clave

        $daysOfWeek = ["monday", "tuesday", "wendsday", "thursday", "friday", "saturday", "sunday"];

        $months = ["january", "march", "february", "may", "april", "june"];
        
        $colores = array('calidos' => array('rojo', 'amarillo'), 'frios' => array('azul', 'verde'));
        $remplazo = array('frios' => array('morado', 'cyan'));

        $names = array("karen", "hugo", "nataly", "martin", "kookie");
        $remplazo2 = array(0 => "kary", 1 => "Don Alex");

       $numeros = array('serie1' => 12, 14, 16, 18, 'serie2' => 10, 11, 12, 13, 14, 15, 16);

       //ejemplo anidación de array multidimesional
       $multidimensional = array(
            'manzana' => array('color' => 'rojo',
                                'sabor' => 'dulce',
                                'nace' => 'árbol manzano'),
            'naranja' => array('color' => 'anaranjado',
                                'sabor' => 'ácido',
                                'nace' => 'árbol naranjo'),
            'plátano' => array('color' => 'amarillo',
                                'sabor' => 'dulce',
                                'nace' => 'palma platanero'));


        //funciones de arrays
        $func1 = array_count_values($a); //cuenta todos los valores de un array
        $func2 = array_key_exists('elemento', $b); //verifica si una clave existe en un array y devuelve un valor booleano
        $func3 = array_keys($b); //devuelve todas las claves de un array
        $func4 = array_pop($daysOfWeek); //extrae y devuelve el último elemento de un array
        $func5 = array_push($months, "july", "august", "september", "octuber", "november", "december"); //inserta uno o más elementos al final del array
        $func6 = array_rand($daysOfWeek, 3); //devuelve una cantidad dada de elementos aleatorios de un array
        $func7 = array_replace_recursive($colores, $remplazo); //remplaza los elementos de un array recursivamente
        $func8 = array_replace($names, $remplazo2); //remplaza los elementos de un array por medio del índice
        $func9 = array_reverse($months, true); //devulve los elementos de un array en orden inverso, true es para no afectar los indices
        $func10 = array_search('may', $months); //devuelve la clave o indice de un elemento buscado en un array
        $func11 = array_shift($daysOfWeek); //extrae y devuelve el primer elemento de un array
        $func12 = array_slice($names, 2); //extrae dos elementos desde el iniio del indice
        $func13 = array_slice($names, 1, 4); //extrae 4 elementos comenzando desde el indice 1
        $func14 = array_splice($names, 2, -1, "tae"); //elimina una posición del array y la remplaza
        $func15 = array_unique($numeros);  //elimina los elementos repetidos en un array
        $func16 = array_unshift($names, 'juan', 'maria'); //agrega uno o más elementos al inicio de un array
        $func17 = array_values($colores); //devuelve todos los valores de un arrray e indexa los elementos
        $func18 = arsort($months); //ordena alfabeticamente e inversamente un array y el indice mantiene su correlación
        $func19 = asort($months); //ordena alfabeticamente un array y el indice mantiene su correlación
        $func20 = count($daysOfWeek); //cuenta los elementos de un array
        $func21 = array_values($multidimensional);
        $func22 = $multidimensional['naranja']['sabor'];

    ?>
<!-- /.. -->


<body>
    <header>
        <h1>ARRAYS EN PHP</h1>
    </header>
    <main>
        <p><?php print_r($a); ?></p>
        <p><?php print_r($b); ?></p>
        <p><?php print_r($func1); ?></p>
        <p><?php print_r($func2); ?></p>
        <p><?php print_r($func3); ?></p>
        <p><?php print_r($func4);?></p>
        <p><?php print_r($months);?></p>
        <p><?php print_r($func6);?></p>
        <p><?php print_r($func7);?></p>
        <p><?php print_r($func8);?></p>
        <p><?php print_r($func9);?></p>
        <p><?php print_r($func10);?></p>
        <p><?php print_r($func11);?></p>
        <p><?php print_r($func12);?></p>
        <p><?php print_r($func13);?></p>
        <p><?php print_r($names);?></p>
        <p><?php print_r($func15);?></p>
        <p><?php print_r($names);?></p>
        <p><?php print_r($func17);?></p>
        <p><?php print_r($months);?></p>
        <p><?php print_r($func20);?></p>
        <p><?php print_r($multidimensional);?></p>
        <p><?php print_r($func22);?></p>
    </main>
</body>
</html>