<?php

    include 'db_conn.php';

    $sql = "select * from my_CRUD";

    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['password']."</td>
                <td>
                    <a href='update.php?id=$row[id]'><button>Update</button></a>
                    <a href='delete.php?id=$row[id]'><button>Delete</button></a>
                </td>
            </tr>";
    }

    mysqli_close($conn);

?>