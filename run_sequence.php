<?php
// Load database configuration
include "logindbase.php";

// Define the log file path and the logging function
define('LOG_FILE', __DIR__ . '/sequence_log.txt');

function logMessage($message) {
    $timestamp = date("Y-m-d H:i:s");
    $logEntry = "[$timestamp] $message" . PHP_EOL;
    file_put_contents(LOG_FILE, $logEntry, FILE_APPEND);
}

function sendMotorCommand($motor, $direction, $time) {
    $esp32_ip = 'http://esp32water.local'; // Replace with your ESP32's IP or hostname
    $url = "$esp32_ip/control_motor";
    $data = json_encode([
        "motor" => $motor,
        "direction" => $direction,
        "time" => $time
    ]);

    $options = [
        "http" => [
            "header"  => "Content-type: application/json",
            "method"  => "POST",
            "content" => $data
        ]
    ];
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    $logResult = $result === FALSE ? "Failed to send command" : "Command sent successfully";
    logMessage("Motor command: motor=$motor, direction=$direction, time=$time - $logResult");

    return $logResult;
}

// Function to send servo commands to ESP32
function sendServoCommand($angle) {
    $esp32_ip = 'http://esp32water.local'; // Replace with your ESP32's IP or hostname
    $url = "$esp32_ip/control_servo";
    $data = json_encode(["angle" => $angle]);

    $options = [
        "http" => [
            "header"  => "Content-type: application/json",
            "method"  => "POST",
            "content" => $data
        ]
    ];
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    $logResult = $result === FALSE ? "Failed to send command" : "Command sent successfully";
    logMessage("Servo command: angle=$angle - $logResult");

    return $logResult;
}

// Function to capture an image from ESP32
function captureImage($testType) {
    $esp32_ip = 'http://esp32water.local'; // Replace with your ESP32's IP or hostname
    $url = "$esp32_ip/capture_image";
    $data = json_encode(["testType" => $testType]);

    $options = [
        "http" => [
            "header"  => "Content-type: application/json",
            "method"  => "POST",
            "content" => $data
        ]
    ];
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    $logResult = $result === FALSE ? "Failed to capture image" : "Image captured successfully";
    logMessage("Capture image command - $logResult");

    return $logResult;
}

// Function to retrieve motor run time from database
function getMotorTime($conn, $motor) {
    $stmt = $conn->prepare("SELECT run_time_ms FROM motor_times WHERE motor_name = ?");
    $stmt->bind_param("s", $motor);
    $stmt->execute();
    $stmt->bind_result($time);
    $stmt->fetch();
    $stmt->close();
    return $time ?? 0;
}

// Define the test sequences
function getTestSequence($testType, $conn) {
    $sequence = [];
    if ($testType === "ammonia") {
        $controlwater_time = getMotorTime($conn, "control_water");
        $ammonia1_time = getMotorTime($conn, "ammonia1");
        $ammonia2_time = getMotorTime($conn, "ammonia2");
        $pondwater_time = getMotorTime($conn, "pond_water");

        $sequence = [
            ["servo" => true, "angle" => 0, "duration" => 10000],
            ["delay" => 1000],
            ["motor" => "pond_water", "direction" => "forward", "time" => $pondwater_time],
            ["delay" => $pondwater_time],
            ["motor" => "control_water", "direction" => "forward", "time" => $controlwater_time],
            ["delay" => $controlwater_time],
            ["delay" => 1000],
            ["motor" => "ammonia1", "direction" => "forward", "time" => $ammonia1_time],
            ["delay" => 2500],
            ["motor" => "ammonia2", "direction" => "forward", "time" => $ammonia2_time],
            ["delay" => 2500],
            ["motor" => "air_pump", "direction" => "forward", "time" => 100],
            // reverse for air pump is correct
            ["delay" => 500],
            ["motor" => "air_pump", "direction" => "forward", "time" => 100],
            // reverse for air pump is correct
            ["delay" => 60000],
            ["action" => "capture_image"],
            ["delay" => 10000],
            ["servo" => true, "angle" => 170, "duration" => 10000],
            ["delay" => 1000]

        // $sequence = [
        //     ["servo" => true, "angle" => 0, "duration" => 1000],
        //     ["delay" => 5000],
        //     ["motor" => "control_water", "direction" => "forward", "time" => $controlwater_time],
        //     ["delay" => $controlwater_time],
        //     ["motor" => "control_water", "direction" => "reverse", "time" => $controlwater_time],
        //     ["delay" => $controlwater_time],
        //     ["motor" => "ammonia1", "direction" => "forward", "time" => $ammonia1_time],
        //     ["delay" => $ammonia1_time],
        //     ["motor" => "ammonia1", "direction" => "reverse", "time" => $ammonia1_time],
        //     ["delay" => $ammonia1_time],
        //     ["motor" => "ammonia2", "direction" => "forward", "time" => $ammonia2_time],
        //     ["delay" => $ammonia2_time],
        //     ["motor" => "ammonia2", "direction" => "reverse", "time" => $ammonia2_time],
        //     ["delay" => $ammonia2_time],
        //     ["motor" => "air_pump", "direction" => "reverse", "time" => 2500],
        //     // reverse for air pump is correct
        //     ["delay" => 2500],
        //     ["servo" => true, "angle" => 90, "duration" => 1000],
        //     ["delay" => 1000],
        //     ["servo" => true, "angle" => 0, "duration" => 1000],
        //     ["delay" => 1000],
        //     ["action" => "capture_image"]
        ];
    } elseif ($testType === "nitrate") {
    
        $controlwater_time = getMotorTime($conn, "control_water");
        $nitrate1_time = getMotorTime($conn, "nitrate1");
        $nitrate2_time = getMotorTime($conn, "nitrate2");
        $pondwater_time = getMotorTime($conn, "pond_water");

        $sequence = [
            ["servo" => true, "angle" => 0, "duration" => 10000],
            ["delay" => 1000],
            // ["motor" => "pond_water", "direction" => "forward", "time" => $pondwater_time],
            // ["delay" => $pondwater_time],
            ["motor" => "control_water", "direction" => "forward", "time" => $controlwater_time],
            ["delay" => $controlwater_time],
            ["delay" => 1000],
            ["motor" => "nitrate1", "direction" => "forward", "time" => $nitrate1_time],
            ["delay" => 2500],
            ["motor" => "nitrate2", "direction" => "forward", "time" => $nitrate2_time],
            ["delay" => 2500],
            ["motor" => "air_pump", "direction" => "forward", "time" => 100],
            // reverse for air pump is correct
            ["delay" => 500],
            ["motor" => "air_pump", "direction" => "forward", "time" => 100],
            // reverse for air pump is correct
            ["delay" => 60000],
            ["action" => "capture_image"],
            ["delay" => 10000],
            ["servo" => true, "angle" => 170, "duration" => 10000],
            ["delay" => 1000]




            // ["servo" => true, "angle" => 0, "duration" => 1000],
            // ["delay" => 5000],
            // ["motor" => "control_water", "direction" => "forward", "time" => $controlwater_time],
            // ["delay" => $controlwater_time],
            // ["motor" => "control_water", "direction" => "reverse", "time" => $controlwater_time],
            // ["delay" => $controlwater_time],
            // ["motor" => "nitrate1", "direction" => "forward", "time" => $nitrate1_time],
            // ["delay" => $nitrate1_time],
            // ["motor" => "nitrate1", "direction" => "reverse", "time" => $nitrate1_time],
            // ["delay" => $nitrate1_time],
            // ["motor" => "nitrate2", "direction" => "forward", "time" => $nitrate2_time],
            // ["delay" => $nitrate2_time],
            // ["motor" => "nitrate2", "direction" => "reverse", "time" => $nitrate2_time],
            // ["delay" => $nitrate2_time],
            // ["motor" => "air_pump", "direction" => "reverse", "time" => 2500],
            // // reverse for air pump is correct
            // ["delay" => 2500],
            // ["servo" => true, "angle" => 90, "duration" => 1000],
            // ["delay" => 1000],
            // ["servo" => true, "angle" => 0, "duration" => 1000],
            // ["delay" => 1000],
            // ["action" => "capture_image"]
        ];
    } elseif ($testType === "ph") {
        $ph_time = getMotorTime($conn, "ph");
        $controlwater_time = getMotorTime($conn, "control_water");
        $pondwater_time = getMotorTime($conn, "pond_water");

        $sequence = [
            ["servo" => true, "angle" => 0, "duration" => 10000],
            ["delay" => 1000],
            ["motor" => "pond_water", "direction" => "forward", "time" => $pondwater_time],
            ["delay" => $pondwater_time],
            ["delay" => 1000],
            ["motor" => "control_water", "direction" => "forward", "time" => $controlwater_time],
            ["delay" => $controlwater_time],
            ["delay" => 1000],
            ["motor" => "ph", "direction" => "forward", "time" => $ph_time],
            ["delay" => 2500],
            ["motor" => "air_pump", "direction" => "forward", "time" => 100],
            // reverse for air pump is correct
            ["delay" => 500],
            ["motor" => "air_pump", "direction" => "forward", "time" => 100],
            // reverse for air pump is correct
            // ["delay" => 60000],
            ["action" => "capture_image"],
            ["delay" => 10000],
            ["servo" => true, "angle" => 170, "duration" => 10000],
            ["delay" => 1000]


            // ["servo" => true, "angle" => 0, "duration" => 1000],
            // ["delay" => 5000],
            // ["motor" => "control_water", "direction" => "forward", "time" => $controlwater_time],
            // ["delay" => $controlwater_time],
            // ["motor" => "control_water", "direction" => "reverse", "time" => $controlwater_time],
            // ["delay" => $controlwater_time],
            // ["motor" => "ph", "direction" => "forward", "time" => $ph_time],
            // ["delay" => $ph_time],
            // ["motor" => "ph", "direction" => "reverse", "time" => $ph_time],
            // ["delay" => $ph_time],
            // ["motor" => "air_pump", "direction" => "forward", "time" => 2500],
            // // reverse for air pump is correct
            // ["delay" => 2500],
            // ["servo" => true, "angle" => 170, "duration" => 1000],
            // ["delay" => 5000],
            // ["servo" => true, "angle" => 0, "duration" => 1000],
            // ["delay" => 5000],
            // ["action" => "capture_image"]
        ];
    } elseif ($testType === "flush_test_tube") {

        $controlwater_time = getMotorTime($conn, "control_water");
        $pondwater_time = getMotorTime($conn, "pond_water");

        $sequence = [
            ["servo" => true, "angle" => 0, "duration" => 10000],
            ["delay" => 1000],
            ["motor" => "control_water", "direction" => "forward", "time" => $controlwater_time],
            ["delay" => 1000],
            ["servo" => true, "angle" => 170, "duration" => 10000],
            ["delay" => 1000]
        ];    
    }
    return $sequence;
}

// Run the test sequence
if ($argc > 1) {
    parse_str($argv[1], $_GET); // Convert CLI arguments to $_GET array
    $testType = $_GET['testType'] ?? '';

    if (!$testType) {
        logMessage("Error: No test type specified");
        exit("No test type specified");
    }

    logMessage("Starting sequence for test type: $testType");
    $sequence = getTestSequence($testType, $conn);

    foreach ($sequence as $step) {
        if (isset($step['motor'])) {
            logMessage("Executing motor command: " . json_encode($step));
            sendMotorCommand($step['motor'], $step['direction'], $step['time']);
        } elseif (isset($step['delay'])) {
            logMessage("Delay for {$step['delay']} ms");
            usleep($step['delay'] * 1000);
        } elseif (isset($step['servo'])) {
            logMessage("Executing servo command: " . json_encode($step));
            sendServoCommand($step['angle']);
            usleep($step['duration'] * 1000);
        } elseif (isset($step['action']) && $step['action'] === "capture_image") {
            logMessage("Executing capture image action");
            captureImage($testType);
        }
    }

    logMessage("Completed sequence for test type: $testType");
}

$conn->close();
?>
