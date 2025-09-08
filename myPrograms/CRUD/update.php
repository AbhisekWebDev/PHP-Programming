<?php

    include("DB_Conn.php");

?>

<?php

    if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "SELECT * FROM my_CRUD WHERE id = '$id'";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    }

?>

<?php

    if(isset($_POST['submit'])) {

        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $updateSql = "
            update my_CRUD
                set name = '$name',
                    email = '$email',
                    password = '$password'
            where id = '$id'
        ";

        if(mysqli_query($conn, $updateSql))
            echo "Record updated successfully";
        else
            echo "Error updating record: " . mysqli_error($conn);

    }

    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Enter name : <input type="text" name="name" value="<?php echo $row['name']; ?>">
        <br>
        Enter Email : <input type="text" name="email" value="<?php echo $row['email']; ?>">
        <br>
        Enter Password : <input type="text" name="password" value="<?php echo $row['password']; ?>">
        <br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
