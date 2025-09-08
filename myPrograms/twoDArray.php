<?php
    // Two-dimensional array: each student has an array of subject marks
    $students = array(
        array(
            "name" => "Abhisek", 
            "subjects" => array(
                "Math" => 85, 
                "Science" => 90, 
                "English" => 88
            )
        ),
        array(
            "name" => "Priya",   
            "subjects" => array(
                "Math" => 92, 
                "Science" => 89, 
                "English" => 94
            )
        ),
        array(
            "name" => "Ravi",    
            "subjects" => array(
                "Math" => 76, 
                "Science" => 84, 
                "English" => 80
            )
        ),
        array(
            "name" => "Sneha",   
            "subjects" => array(
                "Math" => 95, 
                "Science" => 91, 
                "English" => 96
            )
        )
    );

    echo "Student Marks (2D Array): <br>";

    foreach($students as $student) {
        echo "Name - " . $student['name'] . "<br>";

        foreach($student['subjects'] as $subject => $mark) 
            echo $subject . " : $mark <br>";

        echo "<hr>";
    }

    // Access specific elements in a multidimensional array.
    // Access Priya's Science marks
    echo $students[1]["name"] . ' -> Science Marks: ' . $students[1]["subjects"]["Science"];
?>