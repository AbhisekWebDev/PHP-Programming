<?php
session_start(); // Resume the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Page 2</title>
</head>
<body>
    <h2>Session Data on Another Page</h2>
    <?php
    if (isset($_SESSION['views'])) {
        $_SESSION['views']++; // Increment again
        echo "<p>You have viewed this page " . $_SESSION['views'] . " time(s) in this session (across pages).</p>";
    } else {
        echo "<p>No active session or 'views' variable not set. Please go back to <a href='session_start.php'>Session Start</a> page.</p>";
    }

    if (isset($_SESSION['username'])) {
        echo "<p>Username from session: " . htmlspecialchars($_SESSION['username']) . "</p>";
    }
    if (isset($_SESSION['user_id'])) {
        echo "<p>User ID from session: " . htmlspecialchars($_SESSION['user_id']) . "</p>";
    }

    echo "<pre>";
    echo "<h3>All SESSION Data:</h3>";
    print_r($_SESSION);
    echo "</pre>";
    ?>
    <p><a href="session_start.php">Go back to Session Start</a></p>
    <p><a href="session_destroy.php">Destroy Session</a></p>
</body>
</html>