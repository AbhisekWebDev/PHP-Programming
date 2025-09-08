<?php
    
    echo "function to demonstrate factorial <br>";
    function factorial($num) {
        $result = 1;
        for($i = 1 ; $i <= $num ; $i++)
            $result *= $i;
        return $result;
    }
    echo factorial(5);

    echo "<br>";

    echo "function to demonstrate prime no. <br>";
    function isPrime($num) {
        if($num <= 1) return false;
        else if($num == 2) return false;
        else if($num % 2 == 0) return false;

        for($i = 3 ; $i <= sqrt($num) ; $i += 2)
            if($num % $i == 0) return false;
        return true;
    }
    $num = 13;
    if (isPrime($num))
        echo "$num is a prime number";
    else
        echo "$num is not a prime number";
?>