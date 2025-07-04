<?php
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

error_log("Script started.");

$target_dir = "uploads/";

// Ensure the 'uploads' directory exists
if (!file_exists($target_dir)) {
    error_log("'uploads' directory does not exist. Creating it...");
    if (!mkdir($target_dir, 0777, true)) {
        error_log("Failed to create 'uploads' directory.");
        die("Failed to create upload directory.");
    }
}

// Check if the request method is POST, 'imageFile' is set, and 'testType' is provided
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['imageFile']) && isset($_POST['testType'])) {
    error_log("POST request received, 'imageFile' and 'testType' are set.");

    // Get the test type from the POST data
    $testType = preg_replace("/[^a-zA-Z0-9-_]/", "", $_POST['testType']); // Sanitize $testType to avoid issues with file paths

    // Generate a unique file name based on the current timestamp and test type
    $datum = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
    $timestamp = date('Y.m.d_H:i:s_', $datum);
    $filename = $timestamp . "esp32-cam:" . $testType . "_" . basename($_FILES["imageFile"]["name"]);
    $target_file = $target_dir . $filename;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    error_log("Target file path: " . $target_file);
    error_log("Timestamp: $timestamp");
    error_log("Test Type: $testType");
    error_log("Original Filename: " . basename($_FILES["imageFile"]["name"]));
    error_log("Final Filename: $filename");


    // Check if image file is an actual image
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
    error_log("No POST request, 'imageFile', or 'testType' not set.");
    echo "No image data or test type received.";
}

error_log("Script ended.");
ob_end_flush();
?>
