<?php

    session_start();

    if(!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }

?>

<!DOCTYPE html>
<html>
    <body>

        <h2>Welcome Page</h2>
        <p>Hello, <?php echo $_SESSION["username"]; ?>!</p>
        <p><a href="logout.php">Logout</a></p>

    </body>
</html>