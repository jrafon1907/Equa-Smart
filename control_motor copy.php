<?php
// motor_control.php

// Function to send motor control commands to ESP32
function sendMotorCommand($motor, $direction, $time) {
    $esp32_ip = 'esp32water.local'; // Replace with your ESP32's IP address
    $url = "http://$esp32_ip/control_motor";

    // Prepare the JSON payload
    $data = array(
        "motor" => $motor,
        "direction" => $direction,
        "time" => $time
    );
    $json_data = json_encode($data);

    // Initialize cURL
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($json_data)
    ));

    // Execute the request
    $result = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Close cURL
    curl_close($ch);

    // Return the response
    return array(
        "status_code" => $httpcode,
        "response" => $result
    );
}

// Handle form submissions
$response = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $motor = $_POST['motor'];
    $direction = $_POST['direction'];
    $time = intval($_POST['time']);

    if ($motor && ($direction == 'forward' || $direction == 'reverse') && $time > 0) {
        $cmdResponse = sendMotorCommand($motor, $direction, $time);
        if ($cmdResponse['status_code'] == 200) {
            $response = "Command sent successfully.";
        } else {
            $response = "Failed to send command. Response: " . $cmdResponse['response'];
        }
    } else {
        $response = "Invalid input parameters.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ESP32 Motor Control</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .motor-control { border: 1px solid #ccc; padding: 20px; margin: 20px; }
        .motor-control h2 { text-transform: capitalize; }
        .response { color: green; }
        .error { color: red; }
    </style>
</head>
<body>
    <h1>ESP32 Motor Control Panel</h1>
    <?php if ($response): ?>
        <p class="response"><?php echo htmlspecialchars($response); ?></p>
    <?php endif; ?>

    <?php
    $motors = array("water", "ammonia", "ph", "nitrate");
    foreach ($motors as $motor) {
        ?>
        <div class="motor-control">
            <h2><?php echo ucfirst($motor); ?> Motor</h2>
            <form method="POST" action="">
                <input type="hidden" name="motor" value="<?php echo $motor; ?>">
                <label for="<?php echo $motor; ?>_time">Run Time (ms):</label>
                <input type="number" id="<?php echo $motor; ?>_time" name="time" min="1" required>
                <br><br>
                <button type="submit" name="direction" value="forward">Run Forward</button>
                <button type="submit" name="direction" value="reverse">Run Reverse</button>
            </form>
        </div>
        <?php
    }
    ?>

</body>
</html>
