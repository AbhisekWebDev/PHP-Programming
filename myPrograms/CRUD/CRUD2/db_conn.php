<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registration_db";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn) die("conn failed");
    else echo "conn success";

?>