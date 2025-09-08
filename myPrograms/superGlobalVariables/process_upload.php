<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Result</title>
</head>
<body>
    <h2>File Upload Result</h2>
    <?php
    if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] == UPLOAD_ERR_OK) {
        echo "<pre>";
        echo "<h3>All FILES Data:</h3>";
        print_r($_FILES['fileToUpload']);
        echo "</pre>";

        $target_dir = "uploads/"; // Make sure this directory exists and is writable
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "<p style='color:red;'>Sorry, file already exists.</p>";
            $uploadOk = 0;
        }

        // Check file size (e.g., max 500KB)
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "<p style='color:red;'>Sorry, your file is too large.</p>";
            $uploadOk = 0;
        }

        // Allow certain file formats (optional)
        // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        // && $imageFileType != "gif" ) {
        //     echo "<p style='color:red;'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</p>";
        //     $uploadOk = 0;
        // }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "<p style='color:red;'>Your file was not uploaded.</p>";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "<p style='color:green;'>The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.</p>";
                echo "<p>File Name: " . htmlspecialchars($_FILES['fileToUpload']['name']) . "</p>";
                echo "<p>File Type: " . htmlspecialchars($_FILES['fileToUpload']['type']) . "</p>";
                echo "<p>File Size: " . htmlspecialchars($_FILES['fileToUpload']['size']) . " bytes</p>";
                echo "<p>Temporary Name: " . htmlspecialchars($_FILES['fileToUpload']['tmp_name']) . "</p>";
            } else {
                echo "<p style='color:red;'>Sorry, there was an error uploading your file.</p>";
            }
        }
    } else if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] !== UPLOAD_ERR_NO_FILE) {
        // Handle specific upload errors
        switch ($_FILES['fileToUpload']['error']) {
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                echo "<p style='color:red;'>The uploaded file exceeds the maximum file size.</p>";
                break;
            case UPLOAD_ERR_PARTIAL:
                echo "<p style='color:red;'>The uploaded file was only partially uploaded.</p>";
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                echo "<p style='color:red;'>Missing a temporary folder.</p>";
                break;
            case UPLOAD_ERR_CANT_WRITE:
                echo "<p style='color:red;'>Failed to write file to disk.</p>";
                break;
            case UPLOAD_ERR_EXTENSION:
                echo "<p style='color:red;'>A PHP extension stopped the file upload.</p>";
                break;
            default:
                echo "<p style='color:red;'>Unknown upload error.</p>";
                break;
        }
    } else {
        echo "<p>No file uploaded or an error occurred.</p>";
    }
    ?>
    <p><a href="upload_form.html">Go back to upload form</a></p>
</body>
</html>