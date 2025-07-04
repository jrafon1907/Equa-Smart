<?php
// Log file path
$logFile = './esp32feeder_logs.txt';  // Update with your desired file path

// Get JSON input from the ESP32
$input = file_get_contents('php://input');
$data = json_decode($input, true);

if ($data && isset($data['log'])) {
    $logMessage = $data['log'];
    $timestamp = date('Y-m-d H:i:s');
    $entry = "[$timestamp] $logMessage\n";

    // Append log message to the log file
    file_put_contents($logFile, $entry, FILE_APPEND | LOCK_EX);

    echo "Log saved successfully.";
} else {
    echo "Invalid log data.";
}
?>
