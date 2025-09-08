<?php

    function calculate($num1, $num2, $operator) {
        switch ($operator) {
            case '+' : return $num1 + $num2;
            case '-' : return $num1 - $num2;
            case '*' : return $num1 * $num2;
            case '/' :
                if ($num2 == 0) 
                    throw new Exception("Division by zero is not allowed.");
                return $num1 / $num2;
            default : throw new Exception("Invalid operator. Supported operators are +, -, *, /.");
        }
    }

?>

<?php

    $result = null;
    $error = null;

    if(isset($_POST['calculate'])) {
        $num1 = (float) $_POST['num1'];
        $num2 = (float) $_POST['num2'];
        $operator = $_POST['operator'];

        try {
            $result = calculate($num1, $num2, $operator);
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
    }

?>

<!DOCTYPE html>
<html>
    <body>

        <h2>Simple Calculator</h2>
        <form method="post" action="">
            Number 1: <input type="text" name="num1" required><br><br>
            Number 2: <input type="text" name="num2" required><br><br>

            Operation: 
            <select name="operator" required>
                <option value="+">Add</option>
                <option value="-">Subtract</option>
                <option value="*">Multiply</option>
                <option value="/">Divide</option>
            </select><br><br>

            <input type="submit" value="Calculate" name="calculate">
        </form>

        <hr>

        <?php 
            if ($error): 
        ?>
            <p style="color:red;">Error: <?php echo $error; ?></p>
        <?php 
            elseif ($result !== ""): 
        ?>
            <p>Result: <?php echo $result; ?></p>
        <?php 
            endif; 
        ?>

    </body>
</html>