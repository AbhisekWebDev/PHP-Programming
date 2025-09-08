<?php

    include("db_conn.php");

    if(isset($_GET['id'])) {

        $id = $_GET['id'];

        $sql = "delete from my_CRUD where id = $id";

        if(mysqli_query($conn, $sql)) echo "Record deleted successfully";
        else echo "Error deleting record: " . mysqli_error($conn);

        mysqli_close($conn);
        
    }

?>