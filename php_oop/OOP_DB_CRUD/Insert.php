<?php
    require_once 'Database.php';

    $db = new Database();
    $conn = $db->connect();

    $name = "Abhisek";
    $password = 123456;

    $stmt = $conn->prepare("INSERT INTO users (name, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $password);

    if ($stmt->execute()) {
        echo "✅ User added successfully!";
    } else {
        echo "❌ Error: " . $stmt->error;
    }

    $stmt->close();
    $db->close();
?>
