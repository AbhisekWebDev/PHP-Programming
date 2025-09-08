<?php
// Set cookies
// setcookie(name, value, expire, path, domain, secure, httponly)
setcookie("user_preference", "dark_mode", time() + (86400 * 30), "/"); // 86400 = 1 day, expires in 30 days
setcookie("last_visit", date("Y-m-d H:i:s"), time() + (86400 * 7), "/"); // Expires in 7 days
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Superglobal</title>
</head>
<body>
    <h2>`$_COOKIE` Superglobal</h2>
    <p>Two cookies have been set: "user_preference" and "last_visit".</p>
    <p>You may need to refresh the page once for the newly set cookies to be available in `$_COOKIE`.</p>

    <?php
    echo "<pre>";
    echo "<h3>All COOKIE Data:</h3>";
    print_r($_COOKIE);
    echo "</pre>";

    if (isset($_COOKIE['user_preference'])) {
        echo "<p>User Preference (from cookie): " . htmlspecialchars($_COOKIE['user_preference']) . "</p>";
    } else {
        echo "<p>User preference cookie not found.</p>";
    }

    if (isset($_COOKIE['last_visit'])) {
        echo "<p>Last Visit (from cookie): " . htmlspecialchars($_COOKIE['last_visit']) . "</p>";
    } else {
        echo "<p>Last visit cookie not found.</p>";
    }
    ?>

    <h3>Delete a Cookie:</h3>
    <p>Click <a href="delete_cookie.php">here</a> to delete the "user_preference" cookie.</p>
</body>
</html>