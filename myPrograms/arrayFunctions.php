<!DOCTYPE html>
<html>
<head>
    <title>PHP Array Functions Demo</title>
</head>
<body>
<?php

    $fruits = ["apple", "banana", "cherry"];

    echo "<h3>Original Array:</h3>";
    echo "<pre>";
    print_r($fruits);
    echo "</pre>";

    // count(): Count elements in array
    echo "<b>count():</b> " . count($fruits) . "<br>";

    // array_push(): Add elements to end
    array_push($fruits, "date");
    echo "<b>array_push('date'):</b> ";
    print_r($fruits);
    echo "<br>";

    // array_pop(): Remove and return last element
    $popped = array_pop($fruits);
    echo "<b>array_pop():</b> Removed '$popped'<br>";
    echo "Array now: ";
    print_r($fruits);
    echo "<br>";

    // sort(): Sort array by values in ascending order (re-indexes keys)
    sort($fruits);
    echo "<b>sort():</b> Sorted fruits (keys reset)<br>";
    print_r($fruits);
    echo "<br>";

    // asort(): Sort array by values while maintaining key association
    $fruits_assoc = ["a" => "apple", "c" => "cherry", "b" => "banana"];
    echo "<b>Original Associative Array:</b><br>";
    print_r($fruits_assoc);
    echo "<br>";

    asort($fruits_assoc);
    echo "<b>asort():</b> Sort by values with keys preserved<br>";
    print_r($fruits_assoc);
    echo "<br>";

    // ksort(): Sort array by keys
    ksort($fruits_assoc);
    echo "<b>ksort():</b> Sort by keys<br>";
    print_r($fruits_assoc);
    echo "<br>";

    // in_array(): Check if a value exists in an array
    $check = "banana";
    echo "<b>in_array('$check'):</b> " . (in_array($check, $fruits_assoc) ? "Found" : "Not found") . "<br>";

    // array_keys(): Return all keys of an array
    echo "<b>array_keys():</b> ";
    print_r(array_keys($fruits_assoc));
    echo "<br>";

    // array_values(): Return all values of an array
    echo "<b>array_values():</b> ";
    print_r(array_values($fruits_assoc));
    echo "<br>";    
?>
</body>
</html>
