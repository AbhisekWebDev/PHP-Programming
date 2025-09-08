<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Print Name</title>
</head>
<body>

    <form action="" method="post">
        Enter your name: <input type="text" name="name">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = htmlspecialchars($_POST['name']);
        echo "<p>Your name is: <strong>$name</strong></p>";
    }
    ?>

</body>
</html>
