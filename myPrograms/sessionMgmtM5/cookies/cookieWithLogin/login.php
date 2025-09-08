<?php

    if(isset($_COOKIE['username'])) {
        $username = $_COOKIE['username'];
        echo "Welcome back, $username! <br>";
        echo "<a href='logout.php'>Logout</a>";
        exit();
    }

    // handle login
    if(isset($_POST['login'])) {
        $username = $_POST["username"];
        $remember = isset($_POST["remember"]);

        if($remember)
            // set cookie for 1 day
            setcookie("username", $username, time() + (86400), "/");
        
        echo "Hello, $username!<br>";
        echo "<a href='logout.php'>Logout</a>";
        exit();
    }

?>

<!DOCTYPE html>
<html>
    <body>

        <h2>Login</h2>
        <form method="post" action="">
            Username: <input type="text" name="username" required><br><br>
            <label>
                <input type="checkbox" name="remember"> Remember Me
            </label><br><br>
            <input type="submit" name="login" value="Login">
        </form>

    </body>
</html>