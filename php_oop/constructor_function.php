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
    function __construct($m, $v) { // is trah se constructor define krte h php me
     $this->model = $m; 
     $this->volume= $v;
   }
}

// Create new object
$tv = new TV('xyz', 2);
 
echo $tv->model;

?>