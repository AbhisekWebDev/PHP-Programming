<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
            box-sizing: border-box;
        }
        h2 {
            color: #0056b3;
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 20px;
        }
        input[type="text"], select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            width: 100%; /* Make inputs fill container */
            box-sizing: border-box; /* Include padding in width */
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .result-box {
            background-color: #e9e9e9;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            color: #0056b3;
            min-height: 50px; /* Ensure some height even if empty */
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .error-message {
            color: #dc3545;
            font-weight: normal;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Simple PHP Calculator</h2>

        <?php
            // Initialize result variable
            $calculation_result = "";
            $error_message = "";

            // --- Function Definitions ---
            function sum($a, $b) {
                return $a + $b;
            }

            function sub($a, $b) {
                return $a - $b;
            }

            function mult($a, $b) {
                return $a * $b;
            }

            function div($a, $b) {
                if ($b == 0) {
                    return "Error: Division by zero!";
                }
                return $a / $b;
            }

            // A display function to output the result
            function display_result($value) {
                echo htmlspecialchars($value); // Use htmlspecialchars for safe output
            }

            // --- Form Submission Handling ---
            if(isset($_POST['submit'])) {
                $num1 = filter_var($_POST['num1'], FILTER_VALIDATE_FLOAT);
                $num2 = filter_var($_POST['num2'], FILTER_VALIDATE_FLOAT);
                $operation = $_POST['operation'];

                // Validate inputs
                if ($num1 === false || $num2 === false) {
                    $error_message = "Please enter valid numbers.";
                } else {
                    switch ($operation) {
                        case 'add':
                            $calculation_result = sum($num1, $num2);
                            break;
                        case 'subtract':
                            $calculation_result = sub($num1, $num2);
                            break;
                        case 'multiply':
                            $calculation_result = mult($num1, $num2);
                            break;
                        case 'divide':
                            $calculation_result = div($num1, $num2);
                            break;
                        default:
                            $error_message = "Invalid operation selected.";
                            break;
                    }
                }
            }
        ?>

        <form action="" method="post">
            <input type="text" name="num1" placeholder="Enter first number" value="<?php echo isset($_POST['num1']) ? htmlspecialchars($_POST['num1']) : ''; ?>">
            <select name="operation">
                <option value="add" <?php echo (isset($_POST['operation']) && $_POST['operation'] == 'add') ? 'selected' : ''; ?>>+</option>
                <option value="subtract" <?php echo (isset($_POST['operation']) && $_POST['operation'] == 'subtract') ? 'selected' : ''; ?>>-</option>
                <option value="multiply" <?php echo (isset($_POST['operation']) && $_POST['operation'] == 'multiply') ? 'selected' : ''; ?>>*</option>
                <option value="divide" <?php echo (isset($_POST['operation']) && $_POST['operation'] == 'divide') ? 'selected' : ''; ?>>/</option>
            </select>
            <input type="text" name="num2" placeholder="Enter second number" value="<?php echo isset($_POST['num2']) ? htmlspecialchars($_POST['num2']) : ''; ?>">
            <input type="submit" value="Calculate" name="submit">
        </form>

        <div class="result-box">
            <?php
                if (!empty($error_message)) {
                    echo "<span class='error-message'>" . htmlspecialchars($error_message) . "</span>";
                } elseif (!empty($calculation_result) || (isset($calculation_result) && $calculation_result === 0.0)) { // Handle 0 as a valid result
                    display_result($calculation_result);
                } else {
                    echo "Enter numbers and calculate";
                }
            ?>
        </div>
    </div>
</body>
</html>
