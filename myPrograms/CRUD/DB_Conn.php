<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbName = "registration_db";

    $conn = new mysqli($host, $username, $password, $dbName);

    if(!$conn)
        die("Connection failed");
    else
        echo "Connected Successfully"

?>