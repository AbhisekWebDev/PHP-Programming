<?php

    include("db_conn.php");

    // create DB
    $sql = "create database registration_db";

    if($conn->query($sql) === true)
        echo "Database 'registration_db' created successfully";
    else
        die("Error creating database: " . $conn->error);

    // connect to the created DB - registration_db
    $conn->select_db("registration_db");

    // create table - user
    $table_sql = "
        create table users (
            id int auto_increment primary key,
            name varchar(20),
            password varchar(255),
            email varchar(20),
            gender varchar(20),
            hobbies text,
            country varchar(20),
            about text,
            dob date,
            age int,
            profile varchar(255),
            form_id varchar(50)
        )
    ";

    if($conn->query($table_sql) === true)
        echo "Table 'users' created successfully";
    else
        die("Error creating table: " . $conn->error);

    $conn->close();

?>