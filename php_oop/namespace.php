<?php 

namespace def {
    class xyz {
        public function __construct() {
            echo "XYZ from DEF namespace";
        } 
    }
}

namespace {
    class xyz {
        public function __construct() {
            echo "XYZ from Global namespace";
        }
    }
    
    $obj  = new def\xyz();
}

// By default, all the classes are part of the global namespace. 

// The global namespace declared with only keyword 'namespace' (no need to define the name of the namespace). 
// The code can not be declared outside the namespace. 
// Also, namespace should be the first line in your code if you are declaring a class in it. 
// There is alternate way as well to call the function from def class. 
// Just replace the code like below when you create an object.

// use def\xyz as def;
// $obj = new def();

// The output will be the same. You can also make sub-namespace for a namespace. 
// All you just need to do when you declare it is below the line.

// namespace def\ghi

?>