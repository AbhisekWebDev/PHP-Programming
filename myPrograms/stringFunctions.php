<!DOCTYPE html>
<html>
<head>
    <title>PHP String Functions Demo</title>
</head>
<body>
<?php

    $original = "  Hello World!  ";
    echo $original ."<br>" ;

    // strlen(): Get string length
    echo "<b>strlen():</b> ".strlen($original)."<br>";  // Outputs 15 (includes spaces) [1]

    // strpos(): Find position of substring
    echo "<b>strpos() position of 'World':</b> ".strpos($original, "World")."<br>";  // Outputs 8 [9]

    // substr(): Extract substring
    echo "<b>substr() (index 2, length 5):</b> '".substr($original, 2, 5)."'<br>";  // Outputs 'Hello' [2]

    // str_replace(): Replace substring
    echo "<b>str_replace() 'World' with 'PHP':</b> '".str_replace("World", "PHP", $original)."'<br>";  // Outputs '  Hello PHP!  ' [8]

    // trim(): Remove whitespace from ends
    echo "<b>trim():</b> '".trim($original)."'<br>";  // Outputs 'Hello World!' (no leading/trailing spaces) [1]

    // strtoupper(): Convert to uppercase
    echo "<b>strtoupper():</b> '".strtoupper($original)."'<br>";  // Outputs '  HELLO WORLD!  ' [1]

    // strtolower(): Convert to lowercase
    echo "<b>strtolower():</b> '".strtolower($original)."'<br>";  // Outputs '  hello world!  ' [1]
?>
</body>
</html>
