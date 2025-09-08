<?php

include("db_conn.php");

// select the database (important!)
mysqli_select_db($conn, "registration_db");

// FORM SUBMISSION — Update logic
if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'] ?? '';
    $hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : '';
    $country = $_POST['country'];
    $about = $_POST['about'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $form_id = $_POST['form_id'];

    // File upload handling
    if (isset($_FILES['profile']) && $_FILES['profile']['error'] == 0) {
        $profile_name = basename($_FILES['profile']['name']);
        $uploadDir = "uploads/";
        if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);
        move_uploaded_file($_FILES['profile']['tmp_name'], $uploadDir . $profile_name);
    } else {
        // Keep old profile image if new one not uploaded
        $getProfile = mysqli_query($conn, "SELECT profile FROM users WHERE id = $id");
        $oldData = mysqli_fetch_assoc($getProfile);
        $profile_name = $oldData['profile'];
    }

    // Update query only runs on form submission
    $sqlUpdate = "
        UPDATE users SET
            name = '$name',
            password = '$password',
            email = '$email',
            gender = '$gender',
            hobbies = '$hobbies',
            country = '$country',
            about = '$about',
            dob = '$dob',
            age = '$age',
            profile = '$profile_name',
            form_id = '$form_id'
        WHERE id = $id
    ";

    if (mysqli_query($conn, $sqlUpdate)) {
        echo "<p style='color:green;'> User updated successfully.</p>";
    } else {
        echo "<p style='color:red;'> Update failed: " . mysqli_error($conn) . "</p>";
    }
}

// GET — to fetch user data and show in form
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
    } else {
        die("User not found.");
    }
} else {
    die("Invalid or missing ID.");
}
?>

<!-- Display form only if $row is set -->
<?php if (isset($row)) : ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?= $row['id']; ?>">

    Name: <input type="text" name="name" value="<?= htmlspecialchars($row['name']); ?>" required><br><br>
    Password: <input type="password" name="password" value="<?= htmlspecialchars($row['password']); ?>" required><br><br>
    Email: <input type="email" name="email" value="<?= htmlspecialchars($row['email']); ?>"><br><br>

    Gender:
    <input type="radio" name="gender" value="Male" <?= ($row['gender'] == 'Male') ? "checked" : ""; ?>> Male
    <input type="radio" name="gender" value="Female" <?= ($row['gender'] == 'Female') ? "checked" : ""; ?>> Female
    <input type="radio" name="gender" value="Other" <?= ($row['gender'] == 'Other') ? "checked" : ""; ?>> Other
    <br><br>

    Hobbies:
    <?php $userHobbies = explode(", ", $row['hobbies']); ?>
    <input type="checkbox" name="hobbies[]" value="Reading" <?= in_array("Reading", $userHobbies) ? "checked" : ""; ?>> Reading
    <input type="checkbox" name="hobbies[]" value="Gaming" <?= in_array("Gaming", $userHobbies) ? "checked" : ""; ?>> Gaming
    <input type="checkbox" name="hobbies[]" value="Travelling" <?= in_array("Travelling", $userHobbies) ? "checked" : ""; ?>> Travelling
    <br><br>

    Country:
    <select name="country">
        <option value="India" <?= ($row['country'] == "India") ? "selected" : ""; ?>>India</option>
        <option value="USA" <?= ($row['country'] == "USA") ? "selected" : ""; ?>>USA</option>
        <option value="UK" <?= ($row['country'] == "UK") ? "selected" : ""; ?>>UK</option>
    </select>
    <br><br>

    About You:<br>
    <textarea name="about" rows="4" cols="40"><?= htmlspecialchars($row['about']); ?></textarea>
    <br><br>

    Date of Birth: <input type="date" name="dob" value="<?= $row['dob']; ?>"><br><br>
    Age: <input type="number" name="age" value="<?= $row['age']; ?>"><br><br>

    Upload Profile Photo: <input type="file" name="profile">
    <?php if (!empty($row['profile'])): ?>
        <br>Current: <img src="uploads/<?= $row['profile']; ?>" width="50">
    <?php endif; ?>
    <br><br>

    <input type="hidden" name="form_id" value="<?= $row['form_id']; ?>">
    <input type="submit" value="Update" name="submit">
</form>

</body>
</html>
<?php endif; ?>
