<!-- 
    Reading a File 
    PHP provides functions like fopen(), fread(), fgets(), fclose(), and file_get_contents() to read files.
-->
<?php
    $filename = "example.txt";

    // Check if file exists
    if (file_exists($filename)) {
        $file = fopen($filename, "r"); // open in read mode
        while (!feof($file))
            echo fgets($file) . "<br>"; // read line by line
        fclose($file);
    } else echo "File does not exist.";
?>


<!-- 
    Writing to Files 
    We can create or write to a file using fopen(), fwrite(), and fclose().
    "w" → write mode (overwrites file)
    "a" → append mode (adds data to the end)
-->
<?php
    $filename = "example.txt";
    $file = fopen($filename, "w"); // open in write mode
    fwrite($file, "Hello, this is a test file.\n");
    fwrite($file, "PHP makes file handling easy!");
    fclose($file);

    echo "File written successfully.";
?>
<!-- Appending to a File -->
<?php
    $filename = "example.txt";
    $file = fopen($filename, "a"); // open in append mode
    fwrite($file, "\nThis line is appended.");
    fclose($file);

    echo "Data appended successfully.";
?>


<!-- 
    Uploading Files 
    PHP allows uploading files using HTML forms and the $_FILES superglobal.
-->

<!-- Step 1: Create an Upload Form -->
<!DOCTYPE html>
<html>
<body>
    <h2>File Upload Form</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select file to upload: 
        <input type="file" name="myfile">
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>

<!-- Step 2: Handle Upload in upload.php -->
<?php
    $targetDir = "uploads/"; // create this folder in your project
    $targetFile = $targetDir . basename($_FILES["myfile"]["name"]);

    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFile))
        echo "The file ". basename($_FILES["myfile"]["name"]). " has been uploaded.";
    else
        echo "Sorry, there was an error uploading your file.";
?>



<!-- 
    Summary:
        Reading files → Use fopen(), fread(), fgets(), file_get_contents().
        Writing files → Use fopen(), fwrite(), fclose(). Modes like "w" (write), "a" (append).
        Uploading files → Use an HTML form (enctype="multipart/form-data") and handle with $_FILES in PHP. 
-->




<!-- 
    Opening and Closing Files:
        fopen("file.txt", "mode") → Opens a file.
        fclose($file) → Closes the file. 
-->
<?php
    $file = fopen("example.txt", "r") or die("Unable to open file!");
    fclose($file);
?>


<!-- 
    Reading Files:
        fread($file, filesize("example.txt")) → Reads specified length.
        fgets($file) → Reads a single line.
        fgetc($file) → Reads a single character.
        file_get_contents("file.txt") → Reads entire file into a string.
        file("file.txt") → Reads file into an array (line by line). 
-->
<?php
    echo file_get_contents("example.txt"); // read whole file
?>


<!-- 
    Writing and Appending Files:
        "w" → Write mode (erases old data).
        "a" → Append mode (adds to existing file).
        fwrite($file, "text") → Writes into a file.
        file_put_contents("file.txt", "content") → Quick write to file. 
-->
<?php
    file_put_contents("example.txt", "New content\n", FILE_APPEND);
?>


<!-- 
    Checking File Properties:
        file_exists("file.txt") → Check if file exists.
        filesize("file.txt") → Get size in bytes.
        is_file("file.txt") → Check if it’s a file.
        is_readable("file.txt") → Check if file is readable.
        is_writable("file.txt") → Check if file is writable. 
-->
<?php
    if (file_exists("example.txt"))
        echo "File size: " . filesize("example.txt") . " bytes";
?>


<!-- 
    Deleting and Renaming Files:
        unlink("file.txt") → Deletes a file.
        rename("old.txt", "new.txt") → Renames or moves a file. 
-->
<?php
    rename("example.txt", "newfile.txt");
    unlink("oldfile.txt");
?>


<!-- 
    Directory Handling:
        PHP also allows managing directories:
        mkdir("newFolder") → Create directory.
        rmdir("folderName") → Remove directory.
        scandir("folderName") → List files in a directory. 
-->
<?php
    $files = scandir(".");
    foreach($files as $file)
        echo $file . "<br>";
?>


<!-- 
    File Pointers & Advanced Handling:
        rewind($file) → Moves pointer to beginning.
        ftell($file) → Returns current position.
        fseek($file, $pos) → Moves pointer to a specific position. 
-->
<?php
    $file = fopen("example.txt", "r");
    fseek($file, 5); // move pointer to 6th character
    echo fgets($file);
    fclose($file);
?>




<!-- 
    Summary of File Handling in PHP

    Basic Operations: open, read, write, append, close.

    File Properties: check size, existence, permissions.

    File Management: rename, delete, move.

    Directory Handling: create, remove, list contents.

    Advanced: file pointers, error handling.

    File Uploads: handling user file input. 
-->