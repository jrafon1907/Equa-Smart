<?php
header("Access-Control-Allow-Origin: *"); // Allow requests from any origin
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// If the request method is OPTIONS, exit early for CORS preflight checks
if ($_SERVER["REQUEST_METHOD"] === "OPTIONS") {
    http_response_code(200);
    exit;
}

// Only proceed if the request method is POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    // Check if the log data is set in the JSON payload
    if (isset($data["log"])) {
        $logMessage = date('Y-m-d H:i:s') . " - " . $data["log"] . "\n";
        
        // Specify the log file path
        $logFilePath = "./esp32water_logs.txt";
        
        // Attempt to write to the log file
        if (file_put_contents($logFilePath, $logMessage, FILE_APPEND | LOCK_EX)) {
            echo json_encode(["status" => "success", "message" => "Log saved"]);
            http_response_code(200);
        } else {
            echo json_encode(["status" => "error", "message" => "Failed to write to log file"]);
            http_response_code(500);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "No log data provided"]);
        http_response_code(400);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method"]);
    http_response_code(405);
}
?>
