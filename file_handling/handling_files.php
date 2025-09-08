<?php

    // Open the file in read mode
    $file = fopen("gfg.txt", "r"); 


    if ($file) {
        echo "File opened successfully!";
        fclose($file); // Close the file
    } else {
        echo "Failed to open the file.";
    }

    // Reading the Entire File
    $file = fopen("gfg.txt", "r");
    $content = fread($file, filesize("gfg.txt"));

    echo $content;
    fclose($file);


    $file = fopen("gfgg.txt", "r"); 

    // Reading the Entire File
    if ($file) {
        while (($line = fgets($file)) !== false) {
            echo $line . "<br>";
        }
        fclose($file);
    }


    // Open the file in write mode
    $file = fopen("gfg.txt", 'w');

    if ($file) {
        $text = "Hello world\n";
        fwrite($file, $text);
        fclose($file);
    }


    if (file_exists("gfg.txt")) {
        unlink("gfg.txt");
        echo "File deleted successfully!";
    } else {
        echo "File does not exist.";
    }


?>