<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Data</title>
</head>
<body>
    <h2>Data Received via GET</h2>
    <?php
    if (isset($_GET) && !empty($_GET)) {
        echo "<pre>";
        echo "<h3>All GET Data:</h3>";
        print_r($_GET);
        echo "</pre>";

        if (isset($_GET['username'])) {
            echo "<p>Name from form: " . htmlspecialchars($_GET['username']) . "</p>";
        }
        if (isset($_GET['useremail'])) {
            echo "<p>Email from form: " . htmlspecialchars($_GET['useremail']) . "</p>";
        }
        if (isset($_GET['product'])) {
            echo "<p>Product from URL: " . htmlspecialchars($_GET['product']) . "</p>";
        }
        if (isset($_GET['price'])) {
            echo "<p>Price from URL: $" . htmlspecialchars($_GET['price']) . "</p>";
        }
    } else {
        echo "<p>No GET data received.</p>";
    }
    ?>
    <p><a href="get_form.html">Go back to GET form</a></p>
</body>
</html>