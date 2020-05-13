<?php

/* Las clases pueden heredar las propiedades y métodos 
    de otras clases, las clases que heredan esas propiedades y métodos
    se llaman 'subclases' y la clase de donde se heredan se llama 'clase padre' */


    //Clase Padre
    class Fruit{
        public $name;
        public $color;
        public $weight;

        public function favoriteFruit($name, $color, $weight){
            echo "Your favorite fruit is: " .$this->name = $name. "<br>";
            echo "The color is: " .$this->color = $color. "<br>";
            echo "The weight is: " .$this->weight = $weight. "<br>";
        }
    }

    echo "<h1>HERENCIA! CLASE PADRE: FRUTA FAVORITA</h1>";

    $fruit1 = new Fruit();

    $fruit1->favoriteFruit("Mango", "Yellow", "300");


    //Subclase
    class Otherfruit extends Fruit{ //Para acceder a la herencia se usa 'extends'
        
    }

    echo "<h2>SUBCLASE: OTRA FRUTA FAVORITA</h2>";

    $fruit2 = new Otherfruit();
    $fruit2->favoriteFruit("Apple", "Red", "200");

    /* La subclase 'Otherfruit' hereda todas las propiedades y métodos 
    de la clase padre 'Fruit'*/


    /* La 'Visibilidad' controla cómo se puede acceder a las propiedades y métodos
        'public' especifica que es accesible desde cualquier lugar
        'protected' especifica que solo es accesible dentro de la clase o por herencia 
        'private' especifica que SOLO es accesible a la clase que lo define */

?>