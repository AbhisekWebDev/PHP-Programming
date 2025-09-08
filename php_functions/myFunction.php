<?php
    
    function greet($name = 'guest'){
        return 'Hello,' . $name;
    }

    echo greet('Abhisek');
    echo greet();
?>