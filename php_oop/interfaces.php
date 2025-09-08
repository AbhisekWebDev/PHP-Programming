<?php 

    interface a {
        public function abc();
    }

    interface b {
        public function xyz();
    }

    class c implements a, b {

        public function abc() {
            echo 'GeeksforGeeks ';
        }
        
        public function xyz() {
            echo 'A computer science portal';
        }

    }

    // Create an object
    $obj = new c;

    $obj->abc();
    $obj->xyz();

?>