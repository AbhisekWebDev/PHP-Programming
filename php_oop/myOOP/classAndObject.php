<!-- A class is a blueprint for an object. An object is an instance of a class. -->

<?php

    class Car {
        public $color = "blue <br>";

        public function drive() {
            echo "driving <br>";
        }
    }

    $myCar = new Car();

    echo $myCar->color;

    $myCar->drive();

?>