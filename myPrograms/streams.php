<!-- What is a PHP Stream?
A stream in PHP is a general way to read/write data from/to different sources — files, network sockets, memory, compression filters, etc.
You can think of it like a pipe that carries data, no matter if the data comes from a file, HTTP request, FTP server, or even in-memory storage.

Key Points about PHP Streams
They unify how PHP handles different kinds of I/O.

Can read/write from files, URLs, data wrappers (php://, http://, ftp://).

Support filters (e.g., compress data, convert encoding while reading).

Work with standard file functions like fopen(), fread(), fwrite(), etc. -->


<?php
    
    // ex1 - Reading a File via Stream
    $handle = fopen("ex.txt", "r");

    if($handle) {
        while(($Line = fgets($handle)) !== false)
            echo $line;

        fclose($handle);
    } else {
        echo "Error opening file.";
    }



    // ex2 - Using a Stream with php://memory (No File Needed)
    // Create an in-memory stream
    $stream = fopen("php://memory", "w+");

    // Write data to it
    fwrite($stream, "Hello, PHP Streams!\nThis is cool!");

    // Go back to the start of the stream
    rewind($stream);

    // Read the contents
    echo stream_get_contents($stream);

    // Close the stream
    fclose($stream);



    // ex3 - Reading from a URL via Stream
    $handle = fopen("https://www.example.com", "r");

    if ($handle) {
        while (!feof($handle)) {
            echo fgets($handle);
        }
        fclose($handle);
    }
    // If allow_url_fopen is enabled in PHP, this reads directly from a web page.



    // Listing Available Stream Wrappers
    print_r(stream_get_wrappers());

?>

<!-- Why Streams Matter
Uniform interface for different data sources.

Memory streams for temporary data.

Network and file operations without separate APIs.

Real-time filtering of data. -->




 