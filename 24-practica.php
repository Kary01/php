<?php
    echo "PROGRAMACIÓN ORIENTADA A OBJETOS EN PHP";

    /* La programación orientada a objetos, tiene como objetivo
    reducir la repetición de código, debe de extraer el código que es común
    colocarlos en un solo lugar y reutilizarlo en lugares repetitivos */

    /* POO integra clases y objetos, las 'clases' son plantillas para objetos
    y los 'objetos' son instancias para las clases */

    /* Cuando se crea un objeto individual se heredan todas las propiedades 
    pero cada objeto tiene 'valores diferentes' para la propiedad */

    
    //una clase se define usando la palabra reservada 'class' seguida del nombre de la clase
    class Fruit{

        //las variables se llaman 'propiedades'
        public $name;
        public $color;

        //las funciones se llaman 'metodos'
        function set_name($name){
            $this->name = $name;
        }

        function get_name(){
            return $this->name;
        } 

        function set_color($color){
            $this->color = $color;
        }

        function get_color(){
            return $this->color;
        } 
    }

    //cada objeto se crea usando la palabra reservada 'new'
    $apple = new Fruit();
    $banana = new Fruit();

    //asignamos los valores a las propiedades
    $apple->set_name('Apple');
    $banana->set_name('Banana');

    $apple->set_color('Red');
    $banana->set_color('Yellow');

    //mostramos los valores
    echo "<br>"; 
    echo $apple->get_name();
    echo "<br>";    
    echo $banana->get_name();    
    echo "<br>"; 
    echo $apple->get_color();
    echo "<br>"; 
    echo $banana->get_color();


    class Person{
        public $name;
        public $age;

        public function speak(){
            echo "Hello";
        }
    }

    $p1 = new Person();
    echo "<br>";
    $p1->name = "Juan"; 
    $p1->age = 23;
    echo "Él es " .$p1->name;
    echo "<br>"; 
    echo "Y tiene " .$p1->age. " años de edad"; 

    $p2 = new Person();
    $p2->name = "Carlos";
    $p2->age = 25;
    echo "<br>";
    echo "Su amigo es " .$p2->name;
    echo "<br>";
    echo "Y él tiene " .$p2->age. " años de edad";
?>