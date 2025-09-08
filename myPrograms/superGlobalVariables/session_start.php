<?php
session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Start</title>
</head>
<body>
    <h2>Session Management</h2>
    <?php
    if (!isset($_SESSION['views'])) {
        $_SESSION['views'] = 0;
    }
    $_SESSION['views']++; // Increment page view counter

    $_SESSION['username'] = "Abhisek";
    $_SESSION['user_id'] = 123;

    echo "<p>Session started. You have viewed this page " . $_SESSION['views'] . " time(s) in this session.</p>";
    echo "<p>Username set in session: " . htmlspecialchars($_SESSION['username']) . "</p>";
    echo "<p>User ID set in session: " . htmlspecialchars($_SESSION['user_id']) . "</p>";
    ?>
    <p><a href="session_page2.php">Go to Session Page 2</a></p>
    <p><a href="session_destroy.php">Destroy Session</a></p>
</body>
</html>