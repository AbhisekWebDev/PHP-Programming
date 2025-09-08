<?php
    $array = array(1,2,3,4,5,6);
    $colors = array("Red", "Green", "Blue");

    // manually indexed array
    $fruits = array(0 => "Apple", 1 => "Banana", 2 => "Cherry");

    echo $array[0] . "<br>";
    echo $colors[1] . "<br>";
    echo $fruits[2] . "<br>";

    echo "<br>";

    // looping through using for loop
    for($i = 0 ; $i < count($array) ; $i++)
        echo $array[$i] . "<br>";

    echo "<br>";

    for($i = 0 ; $i < count($colors) ; $i++)
        echo $colors[$i] . "<br>";

    echo "<br>";

    for($i = 0 ; $i < count($fruits) ; $i++)
        echo $fruits[$i] . "<br>";

    echo "<br>";

    
    // associative array
    $veggies = array('a' => "Potato", 'b' => "Onion", 'c' => "Garlic");
    // associative arrays have string keys, numeric for loops won't work. 
    // use foreach to access key-value pairs easily.

    echo $veggies['c'] . "<br>";

    echo "<br>";

    // Looping through associative array using foreach
    foreach($veggies as $key => $value)
        echo "$key => $value <br>";

    echo "<br>";

    foreach($array as $key => $value)
        echo "$key => $value <br>";

    echo "<br>";

    foreach($colors as $key => $value)
        echo "$key => $value <br>";

    echo "<br>";

    foreach($fruits as $key => $value)
        echo "$key => $value <br>";

    echo "<br>";


    // associative array example
    $studentsMarks = array(
        "Abhisek" => 88,
        "Priya" => 92,
        "Ravi" => 75,
        "Sneha" => 95,
        "Amit" => 81
    );

    echo "Student Marks: <br>";

    foreach($studentsMarks as $name => $marks)
        echo "$name scored $marks marks<br>";


    // associative array with 2 separate arrays
    $students = array(
        "stu1" => "Abhisek", 
        "stu2" => "Priya", 
        "stu3" => "Ravi", 
        "stu4" => "Sneha", 
        "stu5" => "Amit"
    );
    $marks = array(
        "stu1marks" => 88, 
        "stu2marks" => 92, 
        "stu3marks" => 75, 
        "stu4marks" => 95, 
        "stu5marks" => 81
    );

    // Loop through both arrays usinf foreach
    foreach($students as $stuId => $name) {
        $markKey = $stuId . "marks";
        $mark = $marks[$markKey];
        echo "$name scored $mark marks<br>";
    }
?>