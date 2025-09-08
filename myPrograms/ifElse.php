<?php

    $result = "";

    if(isset($_POST['submit'])) {

        $age = $_POST['age'];

        if($age <= 0)
            $result = "Invalid age, enter a valid age";
        else if($age < 18)
            $result = "You are a kid";
        else
            $result = "Welcome!";

    }

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
        Enter age : <input type="text" name="age">
        <input type="submit" value="submit" name="submit">
        <p>
            <?php echo $result; ?>
        </p>
    </form>
</body>
</html>