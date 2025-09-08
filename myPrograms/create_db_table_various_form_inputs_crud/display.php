<?php

    include("db_conn.php");

    // select the database (important!)
    mysqli_select_db($conn, "registration_db");

    // query to get data from database table
    $sql = "
        select * 
        from users
    ";

    $result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      padding: 10px;
      border: 1px solid #aaa;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
    img {
      width: 50px;
      height: 50px;
      object-fit: cover;
    }
    button{
        background: none;
        border: none;
        display: flex;
    }
  </style>

</head>
<body>

    <table>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Password</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Hobbies</th>
            <th>Country</th>
            <th>About</th>
            <th>DOB</th>
            <th>Age</th>
            <th>Profile</th>
            <th>Form ID</th>
            <th>Edit/Delete</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['password']); ?></td>
            <td><?php echo htmlspecialchars($row['email']); ?></td>
            <td><?php echo htmlspecialchars($row['gender']); ?></td>
            <td><?php echo htmlspecialchars($row['hobbies']); ?></td>
            <td><?php echo htmlspecialchars($row['country']); ?></td>
            <td><?php echo nl2br(htmlspecialchars($row['about'])); ?></td>
            <td><?php echo htmlspecialchars($row['dob']); ?></td>
            <td><?php echo htmlspecialchars($row['age']); ?></td>
            <td>
                <?php if (!empty($row['profile'])): ?>
                <img src="uploads/<?php echo $row['profile']; ?>" alt="Profile Image">
                <?php else: ?>
                N/A
                <?php endif; ?>
          </td>
          <td><?php echo htmlspecialchars($row['form_id']); ?></td>
          <td>
            <button name="edit">
                <a href="edit.php?id=<?php echo $row['id']; ?>">[Edit]</a>
            </button>
            <button name="delete">
                <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?');">[Delete]</a>
            </button>
          </td>
        </tr>
        <?php endwhile; ?>

    </table>
</body>
</html>