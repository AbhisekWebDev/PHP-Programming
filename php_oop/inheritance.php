<?php 

    // Class definition
    class TV {
        
        // Member variables
        public $model;
        public $volume;
        
        // Member Functions
        function volumeUp() {
            $this->volume++;
        }
        
        function volumeDown() {
            $this->volume--;
        }
        
        function __construct($m, $v) {
            $this->model = $m; 
            $this->volume= $v;
        }
    }

    // Inheritance
    class TvWithTimer extends TV {
        public $timer = true;
    }

    // Create new object
    $tv = new TvWithTimer('xyz', 2);

    echo $tv->model;

?>