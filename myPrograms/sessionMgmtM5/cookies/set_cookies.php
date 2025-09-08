<?php

    setcookie("username", "Abhisek", time() + (60*5)); // expires in 5 minutes

?>

<!DOCTYPE html>
<html>
    <body>

        <h2>Cookie Set</h2>
        <p>We have set a cookie named <b>username</b> with value <b>Abhisek</b>.</p>
        <p><a href="get_cookie.php">Go to next page</a> to see the cookie.</p>

    </body>
</html>