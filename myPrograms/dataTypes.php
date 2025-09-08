<?php

    $int = 13;
    $float = 13.23;
    $string = "abhisek";
    $boolean = true;
    $array = [1,2,3,4];
    $object = new stdClass(); $object->value = 13;
    $null = null;

    // var_dump($int . "<br>" , $float . "<br>" , $string . "<br>" , $boolean . "<br>" , $array . "<br>" , $object . "<br>" , $null);

    // Use echo with var_dump() or print_r() for complex types
    echo "Int: "; 
    var_dump($int); 
    echo "<br>";
    
    echo "Float: "; 
    var_dump($float); 
    echo "<br>";
    
    echo "String: "; 
    var_dump($string); 
    echo "<br>";
    
    echo "Boolean: "; 
    var_dump($boolean); 
    echo "<br>";

    echo "Array: ";
    var_dump($array); // var_dump handles <br> internally for complex types
    echo "<br>";

    echo "Object: ";
    var_dump($object); // var_dump handles <br> internally for complex types
    echo "<br>";

    echo "Null: "; 
    var_dump($null); 
    echo "<br>";

?>