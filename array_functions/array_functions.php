<?php

    // array() -
    // function is used to create an array.
    // In PHP, there are three types of arrays:
        // Indexed arrays - Arrays with numeric index
        // Associative arrays - Arrays with named keys
        // Multidimensional arrays - Arrays containing one or more arrays
    $cars=array("Volvo","BMW","Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

    echo "<br>";

    // Create an associative array named $age
    $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
    echo "Peter is " . $age['Peter'] . " years old.";

    echo "<br>";

    // Loop through and print all the values of an indexed array
    for($i = 0 ; $i < count($cars) ; $i++) {
        echo $cars[$i];
        echo "<br>";
    }

    echo "<br>";

    // Loop through and print all the values of an associative array
    foreach($age as $x=>$x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    echo "<br>";

    // Create a multidimensional array
    // A two-dimensional array:
    $cars1=array(
        array("Volvo",100,96),
        array("BMW",60,59),
        array("Toyota",110,100)
    );
    for ($i = 0; $i < count($cars1); $i++) 
        echo $cars1[$i][0] . ": Ordered: " . $cars1[$i][1] . ". Sold: " . $cars1[$i][2] . "<br>";

    echo "<br>";
    
    // array_change_key_case() -
    // function changes all keys in an array to lowercase or uppercase.
    print_r(array_change_key_case($age,CASE_UPPER));
    // Syntax - array_change_key_case(array, case)
        // Parameter    Values
        // Parameter	Description
        // array	    Required. Specifies the array to use
        // case	        Optional. Possible values:
        //              CASE_LOWER - Default value. Changes the keys to lowercase
        //              CASE_UPPER - Changes the keys to uppercase

    echo "<br>";

    // array_chunk() -
    // function splits an array into chunks of new arrays.
    $cars2=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
    print_r(array_chunk($cars2,2));
    // Syntax - array_chunk(array, size, preserve_key)
        // Parameter        Values
        // Parameter	    Description
        // array	        Required. Specifies the array to use
        // size	            Required. An integer that specifies the size of each chunk
        // preserve_key	    Optional. Possible values:
        //                          true - Preserves the keys
        //                          false - Default. Reindexes the chunk numerically

    echo "<br>";

    // array_column() -
    // function returns the values from a single column in the input array.

    // An array that represents a possible record set returned from a database
    $a = array(
        array(
            'id' => 5698,
            'first_name' => 'Peter',
            'last_name' => 'Griffin',
        ),
        array(
            'id' => 4767,
            'first_name' => 'Ben',
            'last_name' => 'Smith',
        ),
        array(
            'id' => 3809,
            'first_name' => 'Joe',
            'last_name' => 'Doe',
        )
    );
    $last_names = array_column($a, 'last_name');
    print_r($last_names);
    // Syntax - array_column(array, column_key, index_key)
        // Parameter    Values
        // Parameter	Description
        // array	    Required. Specifies the multi-dimensional array (record-set) to use. As of PHP 7.0, this can also be an array of objects.
        // column_key	Required. An integer key or a string key name of the column of values to return. This parameter can also be NULL to return complete arrays (useful together with index_key to re-index the array)
        // index_key	Optional. The column to use as the index/keys for the returned array
    
    echo "<br>";

    // array_combine() -
    // function creates an array by using the elements from one "keys" array and one "values" array.
    // Note: Both arrays must have equal number of elements!
    $fname=array("Peter","Ben","Joe");
    $age2=array("35","37","43");
    $c=array_combine($fname,$age2);
    print_r($c);

    echo "<br>";

    // array_count_values()
    $a=array("A","Cat","Dog","A","Dog");
    print_r(array_count_values($a));

    echo "<br>";

    // array_diff() -
    // function compares the values of two (or more) arrays, and returns the differences.
    // and return an array that contains the entries from array1 that are not present in array2 or array3, etc.
    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("e"=>"red","f"=>"green","g"=>"blue");
    $result=array_diff($a1,$a2);
    print_r($result);

    echo "<br>";

    // array_diff_assoc() -
    // function compares the keys and values of two (or more) arrays, and returns the differences.
    // and return an array that contains the entries from array1 that are not present in array2 or array3, etc.
    $result1=array_diff_assoc($a1,$a2);
    print_r($result1);

    echo "<br>";

    // array_fill() -
    // function fills an array with values.
    $a3=array_fill(3,4,"blue");
    $b1=array_fill(0,1,"red");
    print_r($a3);
    
    print_r($b1);
        // Parameter    Values
        // Parameter	Description
        // index	    Required. The first index of the returned array
        // number	    Required. Specifies the number of elements to insert
        // value	    Required. Specifies the value to use for filling the array

    echo "<br>";
    
    // array_fill_keys()
    $keys=array("a","b","c","d");
    $a4=array_fill_keys($keys,"blue");
    print_r($a4);

    echo "<br>";

    // array_filter() -
    // function filters the values of an array using a callback function.
    // This function passes each value of the input array to the callback function. If the callback function returns true, the current value from input is returned into the result array. Array keys are preserved.
    
    // Filter the values of an array using a callback function:
    function test_odd($var) {
        return($var & 1);
    }
    $a5=array(1,3,2,3,4);
    print_r(array_filter($a5,"test_odd"));
        // Syntax - array_filter(array, callbackfunction, flag)
        // Parameter            Values
        // Parameter	        Description
        // array	            Required. Specifies the array to filter
        // callbackfunction	    Optional. Specifies the callback function to use
        // flag	                Optional. Specifies what arguments are sent to callback:
        //                              ARRAY_FILTER_USE_KEY - pass key as the only argument to callback (instead of the value)
        //                              ARRAY_FILTER_USE_BOTH - pass both value and key as arguments to callback (instead of the value)
    
    echo "<br>";

    // array_flip() -
    // function flips/exchanges all keys with their associated values in an array.
    $result=array_flip($a1);
    print_r($result);

    echo "<br>";

    // array_intersect() -
    // function compares the values of two (or more) arrays, and returns the matches.
    // and return an array that contains the entries from array1 that are present in array2, array3, etc.
    $result4=array_intersect($a1,$a2);
    print_r($result4);

    echo "<br>";

    // array_map() -
    // function sends each value of an array to a user-made function, and returns an array with new values, given by the user-made function.
    // Tip: You can assign one array to the function, or as many as you like.
    function myfunction($v){
        return($v*$v);
    }
    $a6=array(1,2,3,4,5);
    print_r(array_map("myfunction",$a6));

    echo "<br>";

    // array_merge() -
    // function merges one or more arrays into one array.
    // Tip: You can assign one array to the function, or as many as you like.
    // Note: If two or more array elements have the same key, the last one overrides the others.
    // Note: If you assign only one array to the array_merge() function, and the keys are integers, the function returns a new array with integer keys starting at 0 and increases by 1 for each value (See example below).
    // Tip: The difference between this function and the array_merge_recursive() function is when two or more array elements have the same key. Instead of override the keys, the array_merge_recursive() function makes the value as an array.
    $a7=array("red","green");
    $a8=array("blue","yellow");
    print_r(array_merge($a7,$a8));

    echo "<br>";

    // array_merge_recursive() -
    // function merges one or more arrays into one array.
    // The difference between this function and the array_merge() function is when two or more array elements have the same key. Instead of override the keys, the array_merge_recursive() function makes the value as an array.
    // Note: If you assign only one array to the array_merge_recursive() function, it will behave exactly the same as the array_merge() function.
    print_r(array_merge_recursive($a7,$a8));

    echo "<br>";

    // array_pad() -
    // function inserts a specified number of elements, with a specified value, to an array.
    // Tip: If you assign a negative size parameter, the function will insert new elements BEFORE the original elements (See example below).
    // Note: This function will not delete any elements if the size parameter is less than the size of the original array.
    $a9=array("red","green");
    print_r(array_pad($a9,5,"blue"));
        // Syntax - array_pad(array, size, value)
        // Parameter    Values
        // Parameter	Description
        // array	    Required. Specifies an array
        // size	        Required. Specifies the number of elements in the array returned from the function
        // value	    Required. Specifies the value of the new elements in the array returned from the function

    echo "<br>";

    // array_pop() - pops last element
    $a10=array("red","green","blue");
    array_pop($a10);
    print_r($a10);

    echo "<br>";

    // array_product()
    echo(array_product(array(5,5)));

    echo "<br>";

    // array_push()
    $a11=array("red","green");
    array_push($a11,"blue","yellow");
    print_r($a11);

    echo "<br>";

    // array_rand() -
    // function returns a random key from an array, or it returns an array of random keys if you specify that the function should return more than one key.
    $a12=array("red","green","blue","yellow","brown");
    $random_keys=array_rand($a12,3);
    echo $a12[$random_keys[0]]."<br>";
    echo $a12[$random_keys[1]]."<br>";
    echo $a12[$random_keys[2]];

    echo "<br>";

    // array_reduce() -
    // function sends the values in an array to a user-defined function, and returns a string.
    // Note: If the array is empty and initial is not passed, this function returns NULL.
    function myfunction1($v1,$v2) {
        return $v1 . "-" . $v2;
    }
    $a=array("Dog","Cat","Horse");
    print_r(array_reduce($a,"myfunction1"));

    echo "<br>";

    // array_replace()
    $a13=array("red","green");
    $a14=array("blue","yellow");
    print_r(array_replace($a13,$a14));

    echo "<br>";

    // array_reverse()
    print_r(array_reverse(array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota")));

    // array_search()

?>