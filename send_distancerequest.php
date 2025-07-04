<?php
include "logindbase.php";

$esp32_url = 'http://esp32feeder.local/request_data'; // Replace with the actual ESP32 IP address
$data = array('command' => 'get_distance');

// Initialize and send the POST request to ESP32
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($esp32_url, false, $context);

if ($result === FALSE) {
    die('Error connecting to ESP32');
}

// Get the current date
$currentDate = date('Y-m-d');

// Prepare SQL query to check if a row already exists for today
$checkQuery = "SELECT id FROM measurements WHERE DATE(timestamp) = ?";
$stmt = $conn->prepare($checkQuery);
$stmt->bind_param("s", $currentDate);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // If a row exists, update the distance value
    $updateQuery = "UPDATE measurements SET distance = ? WHERE DATE(timestamp) = ?";
    $updateStmt = $conn->prepare($updateQuery);
    $updateStmt->bind_param("ds", $result, $currentDate);
    $updateStmt->execute();
    $updateStmt->close();
    echo "Feed levels updated successfully.";
} else {
    // If no row exists, insert a new row
    $insertQuery = "INSERT INTO measurements (distance, timestamp) VALUES (?, NOW())";
    $insertStmt = $conn->prepare($insertQuery);
    $insertStmt->bind_param("d", $result);
    $insertStmt->execute();
    $insertStmt->close();
    echo "Feed levels saved successfully.";
}

// Close connections
$stmt->close();
$conn->close();
?>
