<?php
    setcookie('fav_food', 'pizza', time() + 86400 * 2, '/');
    // first argument - key
    // second argument - value
    // third argument - expression time -> 1 day = 86400 seconds (* 2 krne se 2 din tk cookie stored rhega)
    // fourth argument - file path

    setcookie('fav_drink', 'chai', time() - 0, '/');
    // to9 delete cookie - set the time to (-0)

    setcookie('fav_fruit', 'mango', time() + 86400 * 2, '/');
    setcookie('fav_animal', 'lion', time() + 86400 * 2, '/');

    foreach($_COOKIE as $key => $value)
        echo $key . ' = ' . $value . '<br>' ;

    if(isset($_COOKIE['fav_food']))
        echo "buy some {$_COOKIE['fav_food']}";
    else echo "i dunno ur fav food";

    echo "<br>";

    if(isset($_COOKIE['fav_drink']))
        echo "buy some {$_COOKIE['fav_drink']}";
    else echo "i dunno ur fav drink";
?>