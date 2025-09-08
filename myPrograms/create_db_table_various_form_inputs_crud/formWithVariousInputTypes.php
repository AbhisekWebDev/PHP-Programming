<?php

    include("db_conn.php");
    
    // select the database (important!)
    mysqli_select_db($conn, "registration_db");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Registration Form</h2>

    <form action="insertion.php" method="post" enctype="multipart/form-data">

        <!-- Text input -->
        Name: <input type="text" name="name" required>
        
        <br><br>

        <!-- Password input -->
        Password: <input type="password" name="password" required>
        
        <br><br>

        <!-- Email input -->
        Email: <input type="email" name="email">
        
        <br><br>

        <!-- Radio buttons -->
        Gender:
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other
        
        <br><br>

        <!-- Checkbox -->
        Hobbies:
        <input type="checkbox" name="hobbies[]" value="Reading"> Reading
        <input type="checkbox" name="hobbies[]" value="Gaming"> Gaming
        <input type="checkbox" name="hobbies[]" value="Travelling"> Travelling
        
        <br><br>

        <!-- Select dropdown -->
        Country:
        <select name="country">
            <option value="India">India</option>
            <option value="USA">USA</option>
            <option value="UK">UK</option>
        </select>
        
        <br><br>

        <!-- Textarea -->
        About You:
        <br>
        <textarea name="about" rows="4" cols="40"></textarea>
        
        <br><br>

        <!-- Date and Number -->
        Date of Birth: <input type="date" name="dob">
        
        <br><br>

        Age: <input type="number" name="age">
        
        <br><br>

        <!-- File upload -->
        Upload Profile Photo: <input type="file" name="profile">
        
        <br><br>

        <!-- Hidden input -->
        <input type="hidden" name="form_id" value="12345">

        <br><br>

        <!-- Submit -->
        <input type="submit" value="Register" name="submit">

    </form>

</body>
</html>

<?php

    if(isset($_POST['submit'])) {

        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $gender = ($_POST['gender'] ?? 'Not selected');
        $hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : 'None';
        $country = $_POST['country'];
        $about = $_POST['about'];
        $dob = $_POST['dob'];
        $age = $_POST['age'];
        $form_id = $_POST['form_id'];

    }

?>