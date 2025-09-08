<?php 

    // Class definition
    class TV {
        
        // Member variables
        private $model;
        public $volume;
        protected $price;
        
        // Member Functions
        function volumeUp() {
            $this->volume++;
        }
        
        function volumeDown() {
            $this->volume--;
        }

        function getPrice() {
        return $this->price;
    }
        
        function __construct($m, $v, $p) {
            $this->model = $m; 
            $this->volume= $v;
            $this->price= $p;
        }
    }

    // Create new object
    $tv = new TV('xyz', 2, 100);

    echo $tv->model;
    // Output will be -  Cannot access private property TV::$model in /home/65af96133e297a6da6c1ad3d75c9ff46.php:28
    // The error will display after executing the above code. 
    // It means the function or variable not accessible outside the class.

    echo $tv->getPrice();


?>