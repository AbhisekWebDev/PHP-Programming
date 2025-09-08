<!-- 
Securing File Uploads
    Problem:
        Hackers may upload malicious files (like .php scripts) disguised as images or documents. 
-->

<!-- Vulnerable Example -->
<?php
    move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $_FILES["file"]["name"]);
?>

<!-- Secure Solution -->
<?php
    $targetDir = "uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFile = $targetDir . $fileName;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Allow only images
    $allowedTypes = ["jpg", "jpeg", "png", "gif"];

    if (!in_array($fileType, $allowedTypes))
        die("Invalid file type!");

    // Limit file size (2MB)
    if ($_FILES["file"]["size"] > 2000000)
        die("File too large!");

    // Generate unique filename
    $newFileName = uniqid() . "." . $fileType;
    move_uploaded_file($_FILES["file"]["tmp_name"], $targetDir . $newFileName);

    echo "File uploaded successfully!";
?>
<!-- 
    Best Practices for File Upload Security:
        Restrict allowed file types.
        Check file size.
        Rename uploaded files (avoid using original names).
        Store outside web root when possible.
        Validate MIME type using mime_content_type(). 
-->