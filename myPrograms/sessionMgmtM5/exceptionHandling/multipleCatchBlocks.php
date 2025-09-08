<?php
class DivideByZeroException extends Exception {}
class InvalidOperatorException extends Exception {}

function divide($a, $b) {
    if ($b == 0) {
        throw new DivideByZeroException("Division by zero is not allowed.");
    }
    return $a / $b;
}

try {
    echo divide(10, 0);
} catch (DivideByZeroException $e) {
    echo "Math Error: " . $e->getMessage();
} catch (Exception $e) {
    echo "General Error: " . $e->getMessage();
}
?>
