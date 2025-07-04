<?php
// Path to the file that stores the test state
$stateFile = './water_settings_ajax/test_running.lock';

// Function to check if a test is already running
function isTestRunning()
{
    global $stateFile;
    return file_exists($stateFile);
}

// Function to set test as running
function setTestRunning($running)
{
    global $stateFile;
    if ($running) {
        // Create the file to indicate a test is running
        file_put_contents($stateFile, '1');
    } else {
        // Remove the file to indicate no test is running
        if (file_exists($stateFile)) {
            unlink($stateFile);
        }
    }
}

// Check if a testType is provided
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['testType'])) {
    $testType = $_POST['testType'];

    // Check if a test is already running
    if (isTestRunning()) {
        echo json_encode(["status" => "error", "message" => "A test is already in progress. Please wait until it completes."]);
        exit;
    }

    // Set test as running
    setTestRunning(true);

    // Run the test sequence based on testType
    $cmd = '';

    if ($testType === "ammonia") {
        // Run ammonia test sequence
        $cmd = "php ./run_sequence.php testType=ammonia > /dev/null &";
    } elseif ($testType === "nitrate") {
        // Run nitrate test sequence
        $cmd = "php ./run_sequence.php testType=nitrate > /dev/null &";
    } elseif ($testType === "ph") {
        // Run pH test sequence
        $cmd = "php ./run_sequence.php testType=ph > /dev/null &";
    } elseif ($testType === "flush_test_tube") {
        // Flush the test tube
        $cmd = "php ./run_sequence.php testType=flush_test_tube > /dev/null &";
    } else {
        // Invalid test type
        echo json_encode(["status" => "error", "message" => "Invalid test type"]);
        exit;
    }

    // Execute the command in the background
    exec($cmd);


    // Duration for each test in seconds
    $testDurations = [
        'ammonia' => 30, // 2 minutes
        'nitrate' => 30, // 2.5 minutes
        'ph' => 30,      // 1.67 minutes
        'flush_test_tube' => 30 // 30 seconds
    ];

    // Determine the duration based on test type
    $duration = $testDurations[$testType] ?? 60; // Default to 60 seconds if not specified

    // Mark test as running
    setTestRunning(true);

    // Simulate waiting for test completion
    sleep($duration);

    // Mark test as complete
    setTestRunning(false);

    echo json_encode(["status" => "test_completed", "testType" => $testType]);

    exit;
} else {
    echo json_encode(["status" => "error", "message" => "No test type provided_motor_control"]);
    exit;
}
?>
