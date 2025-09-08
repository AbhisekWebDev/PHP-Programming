<?php 

    // Class definition
    class TV {
        
        // Member variables
        public $model = 'xyz';
        public $volume = 1;
        
        // Member Functions
        function volumeUp() {
            $this->volume++;
        }
        
        function volumeDown() {
            $this->volume--;
        }
    }

    // Create new object
    $tv_one = new TV;

    // Calling member function
    $tv_one->volumeUp();
    echo $tv_one->volume;

?>