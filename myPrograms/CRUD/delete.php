<?php

    include("DB_Conn.php");

?>

<?php

    if (isset($_GET['id'])) {
        
        $sql = "
            delete from my_CRUD
            where id = '" . $_GET['id'] . "'
        ";

        if (mysqli_query($conn, $sql))
            echo "Record deleted successfully";
        else 
            echo "Error deleting record: " . mysqli_error($conn);

    }

    mysqli_close($conn);

?>