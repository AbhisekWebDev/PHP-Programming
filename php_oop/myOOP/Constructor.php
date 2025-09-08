<!-- A constructor is a special function that is called when an object is created. -->

<?php

    class Person {

        public $name;

        // Constructor
        public function __construct($personName) {
            $this->name = $personName;
        }

        public function greet() {
            echo "Hello, I am $this->name";
        }
        
    }

    $person1 = new Person("Abhisek");
    $person1->greet();

?>