<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '/var/www/html/logindbase.php';

$logFile = '/var/www/html/fetch_test_results.log'; // Path to the log file

function logMessage($message) {
    global $logFile;
    file_put_contents($logFile, date('Y-m-d H:i:s') . " - " . $message . "\n", FILE_APPEND);
}

if (!isset($conn)) {
    logMessage("Database connection not established.");
    die(json_encode(['success' => false, 'message' => 'Database connection not established.']));
}

$currentDate = date('Y-m-d');

try {
    $response = [
        'success' => true,
        'ammonia' => 0,
        'nitrate' => 0,
        'ph' => 0
    ];

    // Query to fetch results for the current date
    $query = "SELECT Name, Value FROM water_test_input WHERE DATE(Date_and_Time) = ?";
    $stmt = $conn->prepare($query);
    if (!$stmt) {
        throw new Exception("Failed to prepare statement: " . $conn->error);
    }

    $stmt->bind_param("s", $currentDate);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        if ($row['Name'] === 'Ammonia') {
            $response['ammonia'] = $row['Value'];
        } elseif ($row['Name'] === 'Nitrate') {
            $response['nitrate'] = $row['Value'];
        } elseif ($row['Name'] === 'pH') {
            $response['ph'] = $row['Value'];
        }
    }

    logMessage("Fetched results: " . json_encode($response));
    echo json_encode($response);
} catch (Exception $e) {
    logMessage("Error: " . $e->getMessage());
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}

$conn->close();
?>
