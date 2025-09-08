<?php

    session_start();

    include 'dbConn.php';

    include 'createSchema.php';

?>

<?php

    if(isset($_POST['login'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        // check if user exists
        $sql = "
            select * from users where username = '$username'
        ";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // verify password
            if(password_verify($password, $row['password'])) {
                $_SESSION['username'] = $username;
                header("Location: welcome.php");
                exit();
            } else 
                echo "Invalid password.";
        }

    }

    mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
    <body>

        <h2>Login</h2>
        <form method="post" action="">
            Username: <input type="text" name="username" required><br><br>
            Password: <input type="password" name="password" required><br><br>
            <input type="submit" name="login" value="Login">
        </form>

        <p>Don't have an account? <a href="register.php">Register</a></p>

    </body>
</html>