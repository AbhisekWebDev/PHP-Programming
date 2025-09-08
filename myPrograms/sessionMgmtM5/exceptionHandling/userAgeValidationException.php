<?php

    function checkAge($age) {
        if ($age < 18)
            throw new Exception("You must be at least 18 years old.");
        return "Access granted.";
    }

    try {
        echo checkAge(15);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }

?>
