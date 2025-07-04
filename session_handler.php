<?php
ob_start();
include "logindbase.php";
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

function loginUser($username, $position, $user_id)
{
    $_SESSION['username'] = $username;
    $_SESSION['position'] = $position;
    $_SESSION['user_id'] = $user_id;

    // global $conn; // Use the global $conn object if it's defined outside the function
    $userId = $_SESSION['user_id'];
    // $sql = "UPDATE tbl_user_status SET status = 'online', status_starttime = NOW() WHERE user_id = ?";
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param("i", $userId); // "i" denotes that the parameter is an integer
    // if ($stmt->execute()) {
    //     // Success. logging.
    // } else {
    //     // Error handling. Log the error or handle it as per your need.
    //     echo "Error updating record: " . $conn->error;
    // }
    // $stmt->close();
}

function logoutUser()
{
    global $conn; // Use the global $conn object if it's defined outside the function

    $userId = $_SESSION['user_id'];
    $sql = "UPDATE user_status SET Status = 'offline', Status_Time = NOW() WHERE UserID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId); // "i" denotes that the parameter is an integer
    if ($stmt->execute()) {
        // Success. logging.
    } else {
        // Error handling. Log the error or handle it as per your need.
        echo "Error updating record: " . $conn->error;
    }
    $stmt->close();

    // Proceed to clear the session
    $_SESSION = array(); // Clear the session variables.
    session_destroy(); // Destroy the session.
}

function isLoggedIn()
{
    return isset($_SESSION['username']);
}
ob_end_flush();
?>