<?php
// Get the current date and time
$current_date_time = date("Y-m-d H:i:s");  // Format: 2024-09-23 14:30:00
echo "Current Date and Time: " . $current_date_time . "<br>";

// Get the current date only
$current_date = date("Y-m-d");  // Format: 2024-09-23
echo "Current Date: " . $current_date . "<br>";

// Get the current time only
$current_time = date("H:i:s");  // Format: 14:30:00 (24-hour format)
echo "Current Time: " . $current_time . "<br>";

// Get the day of the week
$day_of_week = date("l");  // Format: Monday, Tuesday, etc.
echo "Day of the Week: " . $day_of_week . "<br>";

// Get the current year
$current_year = date("Y");  // Format: 2024
echo "Current Year: " . $current_year . "<br>";

// Get the current month
$current_month = date("F");  // Format: September (full month name)
echo "Current Month: " . $current_month . "<br>";

// Get the current day of the month
$current_day = date("d");  // Format: 23 (day of the month)
echo "Current Day: " . $current_day . "<br>";
?>
