<?php

    function readFiles($fileName) {
        if(!file_exists($fileName)) 
            throw new Exception("File not found: $filename");
        return file_get_contents($filename);
    }

    try{
        echo readFiles("data.txt");
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }

?>