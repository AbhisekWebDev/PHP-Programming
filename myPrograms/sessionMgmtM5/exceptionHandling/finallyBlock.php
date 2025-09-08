<?php
try {
    echo "Opening file...<br>";
    throw new Exception("File error!");
} catch (Exception $e) {
    echo "Caught: " . $e->getMessage() . "<br>";
} finally {
    echo "Closing file... (this runs always)";
}
?>
