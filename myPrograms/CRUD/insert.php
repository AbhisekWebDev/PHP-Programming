<?php

    include("DB_Conn.php");

    include("form.php");

?>

<?php

    if(isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "
            insert into 
                my_CRUD (name, email, password)
                values ('$name',  '$email', '$password');
        ";

        $result = mysqli_query($conn, $sql);

        if($result)
            echo "Data inserted Successfully";
        else
            die("Error Occured" . mysqli_error($conn));

        mysqli_close($conn);

    }

?>