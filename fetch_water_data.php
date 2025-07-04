<?php
header('Content-Type: application/json');

include "logindbase.php";
// Get the selected date and range from the query string
$date = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$range = isset($_GET['range']) ? $_GET['range'] : 'daily';

// Initialize SQL query based on the selected range
$sql = "SELECT Date_and_Time, Name, Value FROM water_test_input WHERE ";

switch ($range) {
    case 'daily':
        $sql .= "DATE(Date_and_Time) = '{$date}'";
        break;
    case 'weekly':
        $sql .= "WEEK(Date_and_Time) = WEEK('{$date}') AND YEAR(Date_and_Time) = YEAR('{$date}')";
        break;
    case 'monthly':
        $sql .= "MONTH(Date_and_Time) = MONTH('{$date}') AND YEAR(Date_and_Time) = YEAR('{$date}')";
        break;
    case 'yearly':
        $sql .= "YEAR(Date_and_Time) = YEAR('{$date}')";
        break;
    default:
        $sql .= "DATE(Date_and_Time) = '{$date}'";
        break;
}

$sql .= " ORDER BY Date_and_Time";
$result = $conn->query($sql);

if (!$result) {
    echo json_encode(["error" => "Query failed: " . $conn->error]);
    exit();
}

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Output the data as JSON
echo json_encode($data);

$conn->close();
?>
