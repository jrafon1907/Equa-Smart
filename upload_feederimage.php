<?php
ob_start();
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Debug: Log the start of the script
error_log("Script started.");

// Define the target directory for uploaded files
$target_dir = "uploads_feeder/";

// Ensure the 'uploads' directory exists
if (!file_exists($target_dir)) {
    error_log("'uploads' directory does not exist. Creating it...");
    if (!mkdir($target_dir, 0777, true)) {
        error_log("Failed to create 'uploads' directory.");
        die("Failed to create upload directory.");
    }
}

// Check if the request method is POST and the 'imageFile' is set
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['imageFile'])) {
    error_log("POST request received and 'imageFile' is set.");

    // Generate a unique file name based on the current timestamp
    $datum = mktime(date('H')+0, date('i'), date('s'), date('m'), date('d'), date('y'));
    $target_file = $target_dir . date('Y.m.d_H:i:s_', $datum) . basename($_FILES["imageFile"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Debug: Log the target file path
    error_log("Target file path: " . $target_file);

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["imageFile"]["tmp_name"]);
    if ($check !== false) {
        error_log("File is an image - " . $check["mime"] . ".");
        $uploadOk = 1;
    } else {
        error_log("File is not an image.");
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        error_log("Sorry, file already exists.");
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size (limit to 500 KB)
    if ($_FILES["imageFile"]["size"] > 500000) {
        error_log("Sorry, your file is too large.");
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow only certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        error_log("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        error_log("Sorry, your file was not uploaded.");
        echo "Sorry, your file was not uploaded.";
    } else {
        // Try to upload file
        if (move_uploaded_file($_FILES["imageFile"]["tmp_name"], $target_file)) {
            error_log("File uploaded successfully to: " . $target_file);
            echo "The file " . basename($_FILES["imageFile"]["name"]) . " has been uploaded.";
        } else {
            error_log("Error occurred while uploading the file.");
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    error_log("No POST request or 'imageFile' not set.");
    echo "No image data received.";
}

// Debug: Log the end of the script
error_log("Script ended.");
ob_end_flush();
?>
