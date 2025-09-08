<!DOCTYPE html>
<html>
<head>
    <title>Secure File Upload</title>
</head>
<body>

<h2>Upload a File (Only Images allowed)</h2>
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="upload" required>
    <input type="submit" value="Upload">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $targetDir = __DIR__ . "/uploads/";
    $maxFileSize = 2 * 1024 * 1024; // 2 MB

    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true); // Create uploads dir if not exists
    }

    $file = $_FILES['upload'];
    $filename = basename($file['name']);
    $tempName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileExt = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

    // Whitelist allowed extensions and MIME types
    $allowedExts = ['jpg', 'jpeg', 'png', 'gif'];
    $allowedMime = ['image/jpeg', 'image/png', 'image/gif'];

    // Check file size
    if ($fileSize > $maxFileSize) {
        die("File too large. Max 2MB allowed.");
    }

    // Check extension
    if (!in_array($fileExt, $allowedExts)) {
        die("Invalid file extension.");
    }

    // Validate real MIME type
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo, $tempName);
    finfo_close($finfo);

    if (!in_array($mime, $allowedMime)) {
        die("Invalid file type.");
    }

    // Rename file to avoid collision
    $newName = uniqid("img_", true) . '.' . $fileExt;
    $uploadPath = $targetDir . $newName;

    // Move file securely
    if (move_uploaded_file($tempName, $uploadPath)) {
        echo "File uploaded successfully as <strong>$newName</strong>";
    } else {
        echo "Upload failed!";
    }
}
?>

</body>
</html>
