<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #ffffff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 50%;
            padding: 12px;
            background-color: #4CAF50;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background: #e8f5e9;
            border-left: 5px solid #4CAF50;
            border-radius: 8px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Registration</h2>
        <form action="#" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">

            <label for="password">Password:</label>
            <input type="password" name="password" id="password">

            <label for="age">Age:</label>
            <input type="text" name="age" id="age">

            <input type="submit" name="submit" value="Submit">
        </form>

</body>
</html>

<?php
    if( isset( $_POST['submit'] ) ) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $age = $_POST['age'];

        echo '<div class="result">';

        if (!is_numeric($age)) echo "Please enter a valid numeric age.<br>";
        else {
            $age = (int)$age;
            if ($age < 0) echo "Invalid age. Age cannot be negative.<br>";
            else if ($age < 18) echo "You are a kid.<br>";
            else echo "You are an adult.<br>";
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $shortHash = substr($hashedPassword, 0, 30) . '...'; // limit length

        echo "Username: " . htmlspecialchars($username) . "<br>";
        echo "Age: " . htmlspecialchars($age) . "<br>";
        echo "Original Password: " .$password . "<br>";
        echo "Hashed Password: " . $shortHash . "<br>";

        echo '</div>';
    }
?>