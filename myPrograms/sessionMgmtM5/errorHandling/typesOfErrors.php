<!-- 
    Errors are an essential part of the development process. 
    They help developers identify issues with their code and ensure that applications run smoothly. 
    PHP provides several types of errors. Understanding these error types is important for troubleshooting and debugging effectively.
    
    
    Types of Errors in PHP
    
    In PHP, there are four types of errors:

    1. Syntax Error or Parse Error -> 
    A syntax error, also known as a parse error, occurs when there is a mistake in the PHP code's syntax. 
    PHP's parser cannot understand the code due to incorrect usage of language rules, such as missing semicolons, parentheses, or braces.
    
    2. Fatal Error -> 
    A fatal error in PHP is a serious problem that causes the script to stop executing immediately. 
    Fatal errors occur when PHP cannot proceed with the execution of a script due to critical issues, 
    such as calling an undefined function or class.
    
    3. Warning Error -> 
    Warnings are non-fatal errors. PHP will continue executing the script even after a warning occurs. 
    They are typically issued when PHP encounters issues that do not prevent script execution but might lead to unexpected behavior
    
    4. Notice Error -> 
    Notice errors are the least severe type of PHP errors. 
    These are typically used to notify developers of minor issues in the code, such as accessing an undefined variable. 
    Notice errors do not interrupt script execution and often go unnoticed unless explicitly logged.
-->

<!-- Ex - Syntax Error(Parse error) -->
<?php
    echo Hello World  
?>
<!-- Parse error: syntax error, unexpected 'World' (T_STRING), expecting ';' or ',' in /home/guest/sandbox/Solution.php on line 32 -->


<!-- Ex - Fatal Error -->
<?php
    undefinedFunction();  // Function is not defined
?>
<!-- 
    Fatal error: Uncaught Error: Call to undefined function undefinedFunction() in /home/guest/sandbox/Solution.php:2
    Stack trace:
        #0 {main}
        thrown in /home/guest/sandbox/Solution.php on line 39 
-->


<!-- Ex - Warning Errors -->
<?php
    include("nonexistentfile.php");  // File does not exist
?>
<!-- 
    Warning: include(nonexistentfile.php): failed to open stream: No such file or directory in /home/guest/sandbox/Solution.php on line 49
    Warning: include(): Failed opening 'nonexistentfile.php' for inc... 
-->


<!-- Ex - Notice Error -->
<?php
    echo $undefinedVariable;  // Accessing an undefined variable
?>
<!-- Undefined variable $undefinedVariable in /tmp/tdcD60JcaH/main.php on line 57 -->



<!-- 
    PHP Error Constants and their Descriptions
    E_ERROR : A fatal error that causes script termination
    E_WARNING : Run-time warning that does not cause script termination
    E_PARSE : Compile time parse error.
    E_NOTICE : Run time notice caused due to error in code
    E_CORE_ERROR : Fatal errors that occur during PHP's initial startup (installation)
    E_CORE_WARNING : Warnings that occur during PHP's initial startup
    E_COMPILE_ERROR : Fatal compile-time errors indication problem with script.
    E_USER_ERROR : User-generated error message.
    E_USER_WARNING : User-generated warning message.
    E_USER_NOTICE : User-generated notice message.
    E_STRICT : Run-time notices.
    E_RECOVERABLE_ERROR : Catchable fatal error indicating a dangerous error
    E_DEPRECATED : Run-time notices. 
-->