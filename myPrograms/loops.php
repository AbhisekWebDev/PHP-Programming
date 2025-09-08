<?php
    $table = ""; 
    $while_loop_output = "";
    $do_while_loop_output = "";
    $foreach_loop_output = "";

    if(isset($_POST['submit'])) {
        // Validate and sanitize the input to ensure it's a valid integer
        $num = filter_var($_POST['num'], FILTER_VALIDATE_INT);

        // Check if the input is a valid number
        if ($num === false) {
            $table = "Please enter a valid number.";
        } else {
            // for loop
            $table = "<h4>Multiplication Table for $num</h4>";
            for($i = 1 ; $i <= 10 ; $i++) {
                // Append each line of the table to the result
                $table .= "$num x $i = " . ($num * $i) . "<br>";
            }
        }

        // while loop
        $x = 1;
        while($x <= 5){
            $while_loop_output =  "Current number: " . $x . "<br>";
            $x++;
        }

        // do while loop
        $y = 3;
        do{
            $do_while_loop_output =  "Current count: " . $y . "<br>";
            $y--;
        }while ($y > 0); // Loop continues as long as $j is greater than 0

        // foreach loop
        $fruits = ["Apple", "Banana", "Cherry", "Date", "Elderberry"];
        foreach($fruits as $fruit)
            $foreach_loop_output .= "<li>" . $fruit . "</li>";
                                // append krna hoga
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table Generator</title>
</head>
<body>
    <form action="" method="post">
        Enter number for table: <input type="text" name="num">
        <input type="submit" value="submit" name="submit">
        <p>
            <?php 
                echo "Demonstration of for loop <br>";
                echo $table . "<br>";

                echo "Demonstration of while loop <br>";
                echo $while_loop_output . "<br>";

                echo "Demonstration of do while loop <br>";
                echo $do_while_loop_output . "<br>";

                echo "Demonstration of foreach loop <br>";
                echo $foreach_loop_output . "<br>";
            ?>
        </p>
    </form>
</body>
</html>