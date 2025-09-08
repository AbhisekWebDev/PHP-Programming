<?php

    include("DB_Conn.php");

?>

<?php

    $sql = "
        select *
        from my_CRUD
    ";

    $result = mysqli_query($conn, $sql);

?>

<!-- edit / update -->

<?php

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td> <a href='update.php?id=" . $row['id'] . "'>Edit</a> </td>";
            echo "<td> <a href='delete.php?id=" . $row['id'] . "'>Delete</a> </td>";
        echo "</tr>";
    }

    mysqli_close($conn);

?>