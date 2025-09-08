<!DOCTYPE html>
<html>
<head>
    <title>XSS Protection Demo</title>
</head>
<body>

<h2>Enter Your Name</h2>
<form method="POST">
    <input type="text" name="username" required>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input to prevent XSS
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    echo "<h3>Hello, $username!</h3>";
}
?>

</body>
</html>
