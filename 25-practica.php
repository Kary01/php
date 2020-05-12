<?php
    /* PHP proporciona un método que se llama automáticamente
        cada vez que se crea una instancia de un nuevo objeto 
        
        Se usa a menudo para cualquier inicialización qu el 
        objeto pueda necesitar antes de usarlo */

        echo "<h1>CONSTRUCTORES</h1>";

        class Fruit{
            public $name;
            public $color;

            public function __construct($name, $color){ //parámentros para aceptar los valores cuando se crea el objeto
                $this->name = $name;
                $this->color = $color;
                echo $name ." ". $color;
                echo "<br>";
            }
        }

        $fruit1 = new Fruit("Apple", "red"); //usa argumentos para inicializar las propiedades

        class Person{
            public $name;
            public $age;
            public $fcolor;

            public function __construct($name, $age, $fcolor){
                $this->name = $name;
                $this->age = $age;
                $this->fcolor = $fcolor;

                echo "Your name is: " .$name. "<br>";
                echo "Your age is: " .$age. "<br>";
                echo "Your favorite color is: " .$fcolor. "<br>";
            }
        }

        $p1 = new Person("Kary", 23, "Black");
    
?>