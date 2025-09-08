<!-- 
SQL Injection Prevention
    Problem:
        Attackers can insert malicious SQL queries into input fields to manipulate the database. 
-->

<!-- Vulnerable Example: -->
<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "
        SELECT * FROM users WHERE username = '$username' AND password = '$password'
    ";
    $result = mysqli_query($conn, $sql);
?>
<!-- If the attacker enters: ' OR '1'='1 → query always returns true. -->

<!-- Secure Solution (Prepared Statements) -->
<?php
    // Connect to DB
    $conn = mysqli_connect("localhost", "root", "", "your_database");

    // Check connection
    if (!$conn)
        die("Connection failed: " . mysqli_connect_error());

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Use prepared statement (procedural style)
        $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
        $stmt = mysqli_prepare($conn, $sql);
        // mysqli_prepare() → creates a prepared statement where placeholders (?) are used. 
        
        // Then, you bind user input with mysqli_stmt_bind_param(). 
        
        // This way, the input is treated as data, not as SQL code → safe against SQL Injection.

        if ($stmt) {
            // Bind parameters (ss = string, string)
            mysqli_stmt_bind_param($stmt, "ss", $username, $password);

            // Execute statement
            mysqli_stmt_execute($stmt);

            // Get result
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) > 0)
                echo "Login successful!";
            else
                echo "Invalid username or password.";

            // Close statement
            mysqli_stmt_close($stmt);
        } 
        else echo "Error in preparing statement: " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
?>
<!-- Use mysqli with prepared statements to prevent SQL injection. -->