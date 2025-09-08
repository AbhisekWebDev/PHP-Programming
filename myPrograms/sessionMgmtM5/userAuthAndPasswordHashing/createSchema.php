<?php

    include 'dbConn.php';

    $sql = "
        create database if not exists userAuthDB
    ";

    if(mysqli_query($conn, $sql))
        echo "Database and table created successfully.";
    else
        echo "Error: " . mysqli_error($conn);

    // Select the database
    mysqli_select_db($conn, "userAuthDB");
    
    // create table
    $sqlTable = "
        create table if not exists users (
            id int(11) auto_increment primary key,
            username varchar(50) not null unique,
            password varchar(255) not null
        )
    ";

    if (mysqli_query($conn, $sqlTable))
        echo "Table created <br>";
    else
        die("Error creating table: " . mysqli_error($conn));

?>