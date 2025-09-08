<?php

    session_start(); // start session

    if(isset($_POST['login'])) {
        $_SESSION['username'] = $_POST['username']; // superglobal
        header("Location: welcome.php"); // redirect to welcome page
        exit();
    }

?>

<!DOCTYPE html>
<html>
    <body>

        <h2>Login</h2>
        <form method="post" action="">
            Enter your name: <input type="text" name="username" required>
            <input type="submit" value="Login" name="login">
        </form>

    </body>
</html>