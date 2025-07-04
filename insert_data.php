<?php
header("Content-Type: application/json");

// Database connection details
$host = 'localhost';
$dbname = 'db_equasmart';
$username = 'admin';
$password = '123';

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Retrieve JSON data from the request
    $data = json_decode(file_get_contents("php://input"), true);

    // Prepare the SQL statement for inserting each type of measurement
    $stmt = $pdo->prepare("INSERT INTO water_test_input (Name, Value) VALUES (:name, :value)");

    // Insert Ammonia value if provided
    if (!empty($data['ammonia'])) {
        $stmt->execute(['name' => 'Ammonia', 'value' => (float)$data['ammonia']]);
    }

    // Insert Nitrate value if provided
    if (!empty($data['nitrate'])) {
        $stmt->execute(['name' => 'Nitrate', 'value' => (float)$data['nitrate']]);
    }

    // Insert pH value if provided
    if (!empty($data['pH'])) {
        $stmt->execute(['name' => 'pH', 'value' => (float)$data['pH']]);
    }

    // Send success response
    echo json_encode(["success" => true]);
} catch (PDOException $e) {
    // Send error response
    echo json_encode(["success" => false, "error" => $e->getMessage()]);
}
?>
