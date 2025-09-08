<?php

    function validateAge($age) {
        if ($age < 18)
            throw new Exception("You must be at least 18 years old to register.");
        return true;
    }

    function saveUser($username, $age) {
        $filename = "users.txt";

        // Check if file is writable
        if (!is_writable("."))
            throw new Exception("Cannot write to directory.");

        // Try opening file
        $file = fopen($filename, "a");
        if (!$file)
            throw new Exception("Failed to open file.");

        // Save user data
        fwrite($file, "$username | $age\n");
        fclose($file);

        return "User saved successfully!";
    }

    $result = "";
    $error = "";

    if (isset($_POST['register'])) {
        $username = trim($_POST['username']);
        $age = (int)$_POST['age'];

        try {
            validateAge($age);
            $result = saveUser($username, $age);
        } catch (Exception $e) {
            $error = $e->getMessage();
        } finally {
            echo "Registration attempt completed.<br>";
        }
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <h2>User Registration</h2>
        <form method="post" action="">
            Username: <input type="text" name="username" required><br><br>
            Age: <input type="number" name="age" required><br><br>
            <input type="submit" name="register" value="Register">
        </form>

        <hr>

        <?php if ($error): ?>
            <p style="color:red;">Error: <?php echo $error; ?></p>
        <?php elseif ($result): ?>
            <p style="color:green;"><?php echo $result; ?></p>
        <?php endif; ?>
    </body>
</html>
