<?php

    // Expire the cookie
    setcookie("username", "", time() - 3600, "/");
    echo "You are logged out.<br>";
    echo "<a href='login.php'>Login again</a>";
    
?>