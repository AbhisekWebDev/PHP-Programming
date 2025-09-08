<?php
// Main file

echo "Using include:<br>";
include 'hello.php';           // Includes hello.php (even if already included elsewhere)

echo "Using require:<br>";
require 'hello.php';           // Includes hello.php again (fatal error if missing)

echo "Using include_once:<br>";
include_once 'hello.php';      // Includes hello.php only if it wasn't included previously in this script

echo "Using require_once:<br>";
require_once 'hello.php';      // Includes hello.php only if it wasn't required before

include 'notfound.php';      // Shows a warning, script continues
require 'notfound.php';      // Shows fatal error, script stops immediately
?>
