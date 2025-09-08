<?php

    session_start();

    include 'dbConn.php';

    include 'createSchema.php';

?>

<?php


    if(isset($_POST['register'])) {

        $username = $_POST['username'];
        $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // insert user into db
        $sql = "
            insert into users (username, password)
            values ('$username', '$hashedPassword')
        ";

        $result = mysqli_query($conn, $sql);

        if($result) {
            echo "User registered successfully.";
            header("Location: login.php");
            exit();
        } else
            echo "Error: " . mysqli_error($conn);

        mysqli_close($conn);
    }

?>

<!DOCTYPE html>
<html>
    <body>

        <h2>Register</h2>
        <form method="post" action="">
            Username: <input type="text" name="username" required><br><br>
            Password: <input type="password" name="password" required><br><br>
            <input type="submit" name="register" value="Register">
        </form>

    </body>
</html>