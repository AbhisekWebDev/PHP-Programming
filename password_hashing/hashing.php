<?php
    $password = 'password';
    $hash = password_hash($password, PASSWORD_DEFAULT);
    // password_hash takes 2 arguments
    // 1 - the password
    // 2 - the passsword constant algorithm -> by the name (PASSWORD_DEFAULT)
    echo $hash;

    if(password_verify($password, $hash))
        echo "logged in";
    else echo "fkk yaar";
?>