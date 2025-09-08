<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calculator-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 350px;
        }

        .calculator-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .output {
            margin-top: 20px;
            background: #f8f9fa;
            padding: 15px;
            border-left: 4px solid #007bff;
            border-radius: 6px;
            font-size: 16px;
        }
    </style>

</head>
<body>

    <?php

        class calculations {

            public function add($num1, $num2) {
                return $num1 + $num2;
            }

            public function sub($num1, $num2) {
                return $num1 - $num2;
            }

            public function mult($num1, $num2) {
                return $num1 * $num2;
            }

            public function div($num1, $num2) {
                if ($num2 == 0) return "Cannot divide by zero";
                return $num1 / $num2;
            }

        }

        $result = "";

        if(isset($_POST['submit'])) {

            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            $calc = new calculations();

            $result  = "Addition: " . $calc->add($num1, $num2) . "<br>";
            $result .= "Subtraction: " . $calc->sub($num1, $num2) . "<br>";
            $result .= "Multiplication: " . $calc->mult($num1, $num2) . "<br>";
            $result .= "Division: " . $calc->div($num1, $num2);

        }

    ?>
    
    <div class="calculator-container">
        <h2>Simple PHP Calculator</h2>
        <form action="calculations.php" method="post">
            <label>Enter num1:</label>
            <input type="text" name="num1" value="<?php echo isset($_POST['num1']) ? htmlspecialchars($_POST['num1']) : '' ?>">

            <label>Enter num2:</label>
            <input type="text" name="num2" value="<?php echo isset($_POST['num2']) ? htmlspecialchars($_POST['num2']) : '' ?>">

            <input type="submit" value="Calculate" name="submit">
        </form>

        <?php if ($result !== ""): ?>
            <div class="output">
                <?php echo $result; ?>
            </div>
        <?php endif; ?>
    </div>

</body>
</html>