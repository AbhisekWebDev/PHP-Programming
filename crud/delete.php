<?php
    include('connection.php');
?>

<?php

    $id = $_GET['id'];

    $query = "delete from form where id = '$id' ";

    $data = mysqli_query($conn, $query);

    if($data){
        echo "record deleted";
    }
    else{
        echo "failed to delete";
    }

?>