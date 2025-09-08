<?php

    include("db_conn.php");

    if(isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "insert into my_CRUD(name, email, password) values('$name', '$email', '$password')";

        if(mysqli_query($conn, $sql)) echo "New record created successfully";
        else echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        
        mysqli_close($conn);
        
    }

?>