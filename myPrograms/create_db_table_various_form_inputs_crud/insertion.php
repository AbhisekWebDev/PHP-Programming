<?php

    // include form input variables
    include("formWithVariousInputTypes.php");

    // select the database (important!)
    mysqli_select_db($conn, "registration_db");

    // handling file upload
        $profile_name = '';

        if(isset($_FILES['profile']) && $_FILES['profile']['error'] == 0) {

            $profile_name = basename($_FILES['profile']['name']);
            $uploadDir = "uploads/";

            // if directory not exists
            if (!is_dir($uploadDir)) 
                mkdir($uploadDir, 0777, true);
            
            $uploadPath = $uploadDir . $profile_name;
            move_uploaded_file($_FILES['profile']['tmp_name'], $uploadPath);

        }

        // insert into DB
        $sql = "
            insert into 
                users
                    (name, password, email, gender, hobbies, country, about, dob, age, profile, form_id)
                values
                    ('$name', '$password', '$email', '$gender', '$hobbies', '$country', '$about', '$dob', '$age', '$profile_name', '$form_id')
        ";

        if (mysqli_query($conn, $sql)) {
            echo "<p style='color:green;'> Registration successful!</p>";
        } else {
            echo "<p style='color:red;'> Error: " . mysqli_error($conn) . "</p>";
        }

        mysqli_close($conn);


?>