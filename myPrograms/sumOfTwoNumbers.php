<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $result = ""; // initialize result

        if(isset($_POST['submit'])) {

            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            $result = $num1 + $num2;

        }

    ?>

    <form action="sumOfTwoNumbers.php" method="post">

        Enter num1 = <input type="text" name="num1">
        <br>

        Enter num2 = <input type="text" name="num2">
        <br>

        <input type="submit" value="submit" name="submit">
        <br>
        <br>

        Answer = <p>
            <?php
                echo "The output is : " . $result;
            ?>
        </p>
    </form>
</body>
</html>