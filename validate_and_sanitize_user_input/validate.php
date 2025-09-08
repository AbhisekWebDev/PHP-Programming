<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="validate.php" method = "POST">
        username : <input type="text" name = "username">
        <br>
        age : <input type="text" name = "age">
        <br>
        email : <input type="text" name = "email">
        <br>
        <input type="submit" name = "login" value = "login">
    </form>
</body>
</html>

<?php
    if(isset($_POST['login'])){

        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        if(empty($age))
            echo "not valid age";
        else echo "valid age $age";

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        if(empty($email))
            echo "not valid email";
        else echo "valid email $email";
    }
?>