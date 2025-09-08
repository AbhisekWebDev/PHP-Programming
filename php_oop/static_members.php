<?php 

    // Class definition
    class abc {
        public static $data = 'GeeksforGeeks ';
        
        public static function xyz() {
            echo "A computer science portal";
        }
    }

    echo abc::$data;
    abc::xyz();



    // This example count how many objects we have created for a class.
    class abcx {
        public static $objectCount = 0;
        
        public static function getCount() {
            return self::$objectCount;
        }
        
        public function __construct() {
            self::$objectCount++;
        }
    }

    $a = new abcx();
    $b = new abcx();
    $c = new abcx();
    $d = new abcx();

    echo abcx::getCount();

?>