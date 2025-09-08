<?php
    include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="insert.php" method = "post">

        Enter Name : <input type="text" name = "name"> <br>

        Enter Password : <input type="password" name = "password"> <br>

        Enter Email : <input type="email" name = "email"> <br>

        Gender : 
            <select name="gender" id="">
                <option value="not selected">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select> <br>

        Address : <textarea name="address" id=""></textarea> <br>

        Agree? : <input type="checkbox">

        <br>

        <input type="submit" name = "submit">

    </form>
    
</body>
</html>

