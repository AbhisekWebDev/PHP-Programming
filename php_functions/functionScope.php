<?php
// scope - local, global and static

// local scope
   function test(){
        $x = 5;
        echo $x . "<br>";
    }
    // echo $x; ye bahar nhi chlega
    test(); // function call

// global scope
    $x = 10;
    function show(){
        global $x;
        echo $x . "<br>";
        // OR 
        echo $GLOBALS['x'] . "<br>";
    }
    echo $x . "<br>"; // ye bahar chlega
    show();

// static scope
    function counter() {
        static $count = 0;
        $count++;
        echo $count . "<br>";
    }
    counter(); // 1
    counter(); // 2
    counter(); // 3
?>