<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Data</title>
</head>
<body>
    <h2>Data Received via POST</h2>
    <?php
    if (isset($_POST) && !empty($_POST)) {
        echo "<pre>";
        echo "<h3>All POST Data:</h3>";
        print_r($_POST);
        echo "</pre>";

        if (isset($_POST['item_name'])) {
            echo "<p>Item Name: " . htmlspecialchars($_POST['item_name']) . "</p>";
        }
        if (isset($_POST['item_quantity'])) {
            echo "<p>Quantity: " . htmlspecialchars($_POST['item_quantity']) . "</p>";
        }
        if (isset($_POST['description'])) {
            echo "<p>Description: " . nl2br(htmlspecialchars($_POST['description'])) . "</p>";
        }
    } else {
        echo "<p>No POST data received.</p>";
    }
    ?>
    <p><a href="post_form.html">Go back to POST form</a></p>
</body>
</html>