<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '/var/www/html/logindbase.php';

$logFile = '/var/www/html/save_test_results.log'; // Path to the log file

function logMessage($message) {
    global $logFile;
    file_put_contents($logFile, date('Y-m-d H:i:s') . " - " . $message . "\n", FILE_APPEND);
}

if (!isset($conn)) {
    logMessage("Database connection not established.");
    die(json_encode(['success' => false, 'message' => 'Database connection not established.']));
}

$data = json_decode(file_get_contents('php://input'), true);

$ammonia = $data['ammonia'] ?? 0;
$nitrate = $data['nitrate'] ?? 0;
$ph = $data['ph'] ?? 0;
$currentDate = date('Y-m-d');

try {
    // Function to insert or update test results
    function upsertTestResult($conn, $name, $value, $currentDate) {
        global $logFile;
        $query = "SELECT Test_ID FROM water_test_input WHERE Name = ? AND DATE(Date_and_Time) = ?";
        $stmt = $conn->prepare($query);
        if (!$stmt) {
            throw new Exception("Failed to prepare SELECT statement: " . $conn->error);
        }

        $stmt->bind_param("ss", $name, $currentDate);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Update existing record
            $updateQuery = "UPDATE water_test_input SET Value = ?, Date_and_Time = NOW() WHERE Name = ? AND DATE(Date_and_Time) = ?";
            $updateStmt = $conn->prepare($updateQuery);
            if (!$updateStmt) {
                throw new Exception("Failed to prepare UPDATE statement: " . $conn->error);
            }

            $updateStmt->bind_param("dss", $value, $name, $currentDate);
            $updateStmt->execute();
            $updateStmt->close();
            logMessage("Updated $name with value $value for $currentDate.");
        } else {
            // Insert new record
            $insertQuery = "INSERT INTO water_test_input (Name, Value, Date_and_Time) VALUES (?, ?, NOW())";
            $insertStmt = $conn->prepare($insertQuery);
            if (!$insertStmt) {
                throw new Exception("Failed to prepare INSERT statement: " . $conn->error);
            }

            $insertStmt->bind_param("sd", $name, $value);
            $insertStmt->execute();
            $insertStmt->close();
            logMessage("Inserted $name with value $value for $currentDate.");
        }

        $stmt->close();
    }

    // Perform upsert for each test type
    upsertTestResult($conn, 'Ammonia', $ammonia, $currentDate);
    upsertTestResult($conn, 'Nitrate', $nitrate, $currentDate);
    upsertTestResult($conn, 'pH', $ph, $currentDate);

    echo json_encode(['success' => true, 'message' => 'Test results saved successfully.']);
} catch (Exception $e) {
    logMessage("Error: " . $e->getMessage());
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}

$conn->close();
?>
