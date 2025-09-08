<?php

    if(isset($_POST['submit'])) {

        $num = $_POST['num'];

        $result = "";

        switch((int)$num) { // cast $num to an integer for reliable comparison - typecasting

            case 1 : $result = "you chose 1";
            break;

            case 2 : $result = "you chose 2";
            break;

            case 3 : $result = "you chose 3";
            break;

            default : $result = "enter a valid number";

        }

    }
    else $result = ""; // initialize for the first page load when submit hasn't been pressed

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="num" value="" placeholder="Enter number between 1 to 3">
                                        <!-- name dena zruri hota h -->
        <input type="submit" value="submit" name="submit"> 
        <p>
            <?php echo $result; ?>
        </p>
    </form>
</body>
</html>