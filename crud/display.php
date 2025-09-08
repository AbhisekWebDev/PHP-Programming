<?php
    include('connection.php');
?>

<?php

    $query = "select * from form";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);

    if ($total > 0) {

        echo "<table border='1' cellpadding='10' cellspacing='0'>";
        echo "<tr>
                <th>ID</th>
                <th>Name</th>
                <th>Password</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Update</th>
                <th>Delete</th>
              </tr>";

        while ($result = mysqli_fetch_assoc($data)) {
            echo "<tr>
                    <td>{$result['id']}</td>
                    <td>{$result['name']}</td>
                    <td>{$result['password']}</td>
                    <td>{$result['email']}</td>
                    <td>{$result['gender']}</td>
                    <td>{$result['address']}</td>
                   
                    <td>
                        <a href = 'update.php?id=$result[id]'> Update </a>
                    </td>
                    <td>
                        <a href = 'delete.php?id=$result[id]' > Delete </a>
                    </td>
                  </tr>";
        }

        echo "</table>";

    } else {
        echo "No records found.";
    }

?>