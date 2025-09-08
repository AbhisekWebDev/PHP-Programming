<?php
// Start session
session_start();

// Destroy the session
session_destroy();

echo "You are logged out. <a href='login.php'>Login again</a>";
?>