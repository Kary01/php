<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kary Ruiz">
    <meta name="description" content="Página de practica sobre funciones en PHP">
    <title>Practica 11</title>
</head>


<!-- ódigo PHP -->
    <?php
        /*Las funciones son un bloque de código
        que se puede repetir pero no se ejecutará directamente 
        cuando la página se cargue, sino que tiene que ser llamada*/

        function sayHello(){    //nombramos la función
            echo "Hello! :D";   //código a ejecutar
       }

       /*Los parámetros se especifican después del nombre de la función
       entre los paréntesis y el valor que se pasará se le llama argumento*/
        
       function exampleSum($num1){ //variable: parámetro
           echo $num1 + 203;
       }
       
       /*Una función puede regresar un valor utilizando la intrucción 'return'*/

       function mult($n1,$n2){
           $res = $n1 * $n2;
           return $res;
       }

       function func($arg)  {
        $result = 0;
        for($i=0; $i<$arg; $i++) {
          $result = $result + $i;
        }
        return $result;
      }
      
    ?>
<!-- /.. -->


<body>
    <header>
        <h1>FUNCIONES EN PHP</h1>
    </header>
    <main>
        <p><?php sayHello(); ?></p>     <!-- llamada a la función -->

        <p><?php exampleSum(14); ?></p>     <!-- valor: argumento -->

        <p><?php echo mult(4,3); ?></p>     <!-- valor: argumento -->
        
        <p><?php echo func(5); ?></p>     <!-- valor: argumento -->
    </main>
</body>
</html>