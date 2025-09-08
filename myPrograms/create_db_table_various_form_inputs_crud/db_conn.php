<?php

    // DB conn
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);

    // check conn
    if($conn->connect_error)
        die("Connection failed: " . $conn->connect_error);

?>