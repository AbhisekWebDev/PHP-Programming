<?php

    if(isset($_POST['delete'])) {
        setcookie("username", "", time() - 3600); // expire it
        echo "Cookie deleted!";
    }

?><!DOCTYPE html>
<html>
    <body>

        <h2>Read Cookie</h2>

        <?php
            if (isset($_COOKIE["username"])) 
                echo "Hello, " . $_COOKIE["username"] . "!<br><br>";
            else
                echo "No cookie found.<br><br>";
        ?>

        <form method="post">
            <input type="submit" name="delete" value="Delete Cookie">
        </form>

    </body>
</html>