<?php
// Set a cookie to demonstrate $_REQUEST also includes $_COOKIE
setcookie("my_cookie", "cookie_value_123", time() + 3600); // Expires in 1 hour
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REQUEST Data</title>
</head>
<body>
    <h2>Data Received via REQUEST</h2>
    <p>This page demonstrates how `$_REQUEST` combines GET, POST, and COOKIE data.</p>
    <p>A cookie named "my_cookie" has been set for this demonstration.</p>

    <?php
    echo "<pre>";
    echo "<h3>All REQUEST Data:</h3>";
    print_r($_REQUEST);
    echo "</pre>";

    if (isset($_REQUEST['get_value'])) {
        echo "<p>GET value from form: " . htmlspecialchars($_REQUEST['get_value']) . "</p>";
    }
    if (isset($_REQUEST['post_value'])) {
        echo "<p>POST value from form: " . htmlspecialchars($_REQUEST['post_value']) . "</p>";
    }
    if (isset($_REQUEST['url_param'])) {
        echo "<p>URL parameter: " . htmlspecialchars($_REQUEST['url_param']) . "</p>";
    }
    if (isset($_REQUEST['my_cookie'])) {
        echo "<p>Cookie value ('my_cookie'): " . htmlspecialchars($_REQUEST['my_cookie']) . "</p>";
    }
    ?>
    <p><a href="request_test.html">Go back to REQUEST test page</a></p>
</body>
</html>