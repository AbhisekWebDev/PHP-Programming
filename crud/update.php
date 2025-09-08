<?php
    include('connection.php');
?>

<?php

    error_reporting(0);

    // Get the ID from URL
    $id = $_GET['id'];

    // Fetch existing data
    $query = "SELECT * FROM form WHERE id = '$id'";

    $data = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($data);
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

        <input type="hidden" name="id" value="<?php echo $result['id']; ?>">

        Enter Name : <input type="text" name="name" value="<?php echo $result['name']; ?>"> <br>

        Enter Password : <input type="password" name="password" value="<?php echo $result['password']; ?>"> <br>

        Enter Email : <input type="email" name="email" value="<?php echo $result['email']; ?>"> <br>

        Gender :
            <select name="gender">
                <option value="not selected">Select</option>
                <option value="male" <?php if($result['gender'] == "male") echo "selected"; ?>>Male</option>
                <option value="female" <?php if($result['gender'] == "female") echo "selected"; ?>>Female</option>
            </select> <br>

        Address : <textarea name="address"><?php echo $result['address']; ?></textarea> <br>

        Agree? : <input type="checkbox" checked disabled> <br>

        <input type="submit" name="update" value="Update">

    </form>

</body>
</html>

<?php
    // Update logic
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];

        $updateQuery = "
                        UPDATE form 
                        SET name='$name', password='$password', email='$email', gender='$gender', address='$address' 
                        WHERE id='$id'";
        $updateData = mysqli_query($conn, $updateQuery);

        if ($updateData) {
            echo "Record updated successfully.";
            // Optionally redirect: header("Location: view.php");
        } else {
            echo "Failed to update record.";
        }
    }
?>

