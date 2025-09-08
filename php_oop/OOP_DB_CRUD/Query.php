<?php
    require_once 'Database.php';

    $db = new Database();
    $conn = $db->connect();

    // Example query
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "👤 ID: " . $row["id"] . " | Name: " . $row["name"] . " | Password: " . $row["password"] . "<br>";
        }
    } else {
        echo "No users found.";
    }

    // Close connection
    $db->close();
?>
