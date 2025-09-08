<?php

    include 'db_conn.php';

    if(isset($_GET['id'])){

        $id = $_GET['id'];

        $sql = "select * from my_CRUD where id = $id";

        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);

    } 

    if(isset($_POST['submit'])){

        $id = $_GET['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "update my_CRUD set id=$id, name='$name', email='$email', password='$password' where id=$id";

        $result = mysqli_query($conn, $sql);

        if($result) echo "Updated Successfully";

        else die(mysqli_error($conn));

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
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        <input type="text" name="name" value="<?php echo $row['name'] ?>" placeholder="Enter your name"><br><br>
        <input type="email" name="email" value="<?php echo $row['email'] ?>" placeholder="Enter your email"><br><br>
        <input type="password" name="password" value="<?php echo $row['password'] ?>" placeholder="Enter your password"><br><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>