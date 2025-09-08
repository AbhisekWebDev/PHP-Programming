<?php
// To delete a cookie, set its expiration time to a time in the past
setcookie("user_preference", "", time() - 3600, "/"); // Expires an hour ago
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Cookie</title>
</head>
<body>
    <h2>Cookie Deleted</h2>
    <p>"user_preference" cookie has been set to expire. It should be gone on the next page load.</p>
    <p><a href="cookie_test.php">Go back to Cookie Test page</a></p>
</body>
</html>