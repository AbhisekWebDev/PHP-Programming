<?php
    
    class car{
        public $color = 'black';
        public $model = 'mustang';
        public $make = 'ford';
        public $yr = '1969';

        public function addCar(){
            return "$this->model new car added";
        }

        public function __construct($color){
            $this->color = $color;
        }

    }

    // $car1 = new car();
    
    // echo $car1->color . '<br>';
    // echo $car1->model . '<br>';
    // echo $car1->make . '<br>';
    // echo $car1->yr . '<br>';
    // echo $car1->addCar() . '<br>';

    echo '<br>';
    
    $car2 = new car('green');

    echo $car2->color . '<br>';
    echo $car2->model . '<br>';
    echo $car2->make . '<br>';
    echo $car2->yr . '<br>';
    echo $car2->addCar() . '<br>';

?>