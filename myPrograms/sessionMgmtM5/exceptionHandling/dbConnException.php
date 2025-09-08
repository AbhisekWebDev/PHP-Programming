<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wrongDB"; // intentionally wrong

    try {
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn)
            throw new Exception("Database connection failed: " . $conn->connect_error);

        echo "Connected successfully!";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }

?>
