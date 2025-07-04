<?php
header('Content-Type: application/json');

// Define the duration and command for the motor to run
$duration = 5000; // Default duration in milliseconds
$command = "pump1"; // Default command

if (isset($_POST['activateWater'])) {
    $duration = 5000; // Set duration for water pump
    $command = "pump1";
} elseif (isset($_POST['phWater'])) {
    $duration = 10000; // Set duration for pH pump
    $command = "pump2";
} elseif (isset($_POST['ammoniaWater'])) {
    $duration = 15000; // Set duration for ammonia pump
    $command = "pump3";
}

// Define the full path to the Python interpreter and the Python script
$python_path = 'C:\\Users\\Jayson\\PycharmProjects\\pythonProject\\venv\\Scripts\\python.exe';  // Adjust this path to your Python executable
$script_path = 'C:\\Users\\Jayson\\PycharmProjects\\pythonProject\\control_water.py';  // Adjust this path to your Python script

// Prepare the command to execute
$command_line = "\"$python_path\" \"$script_path\" $command $duration";

// Execute the command
$output = shell_exec($command_line . " 2>&1");

// Check if the command was successful
if ($output === null) {
    echo json_encode(['error' => 'Failed to execute command', 'command' => $command_line]);
} else {
    echo json_encode(['success' => 'Pump activated', 'output' => $output, 'command' => $command_line]);
}
?>
