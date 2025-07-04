<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/equasmartlogo_croppedlogo.png" type="image/svg+xml">
    <link rel="stylesheet" href="css/css/all.min.css">
    <link rel="stylesheet" href="css/css/fontawesome.min.css">
    <title>Date Picker and Log Preview</title>
    <style>
        :root {
        /* FLUID RESPONSIVE PADDING/MARGIN SPACE BASE VALUE = 12px, MIN WIDTH = 320px, AND MAX VALUE = 21px, MAX WIDTH = 1240px (added by mark romualdo)*/
            --space-3xs: clamp(3px, 2.3043px + 0.2174cqi, 5px);/*Multiplier = 0.25*/
            --space-2xs: clamp(6px, 4.2609px + 0.5435cqi, 11px);/*Multiplier = 0.5*/
            --space-xs: clamp(9px, 6.5652px + 0.7609cqi, 16px);/*Multiplier = 0.75*/
            --space-s: clamp(12px, 8.8696px + 0.9783cqi, 21px);/*Multiplier = 1*/
            --space-m: clamp(13px, 9.5217px + 1.087cqi, 23px);/*Multiplier = 1.1*/
            --space-l: clamp(14px, 10.1739px + 1.1957cqi, 25px);/*Multiplier = 1.2*/
            --space-xl: clamp(16px, 12.1739px + 1.1957cqi, 27px);/*Multiplier = 1.3*/
            --space-2xl: clamp(17px, 12.8261px + 1.3043cqi, 29px);/*Multiplier = 1.4*/
            --space-3xl: clamp(18px, 13.1304px + 1.5217cqi, 32px);/*Multiplier = 1.5*/
            --space-4xl: clamp(19px, 13.7826px + 1.6304cqi, 34px);/*Multiplier = 1.6*/
            --space-5xl: clamp(24px, 17.7391px + 1.9565cqi, 42px);/*Multiplier = 2*/
            --space-6xl: clamp(30px, 22px + 2.5cqi, 53px);/*Multiplier = 2.5*/
            --space-7xl: clamp(36px, 26.6087px + 2.9348cqi, 63px);/*Multiplier = 3*/
            --space-8xl: clamp(42px, 30.8696px + 3.4783cqi, 74px);/*Multiplier = 3.5*/
            --space-9xl: clamp(48px, 35.4783px + 3.913cqi, 84px);/*Multiplier = 4*/
            --space-10xl: clamp(54px, 39.7391px + 4.4565cqi, 95px);/*Multiplier = 4.5*/
            --space-11xl: clamp(60px, 44.3478px + 4.8913cqi, 105px);/*Multiplier = 5*/
            --space-12xl: clamp(66px, 48.6087px + 5.4348cqi, 116px);/*Multiplier = 5.5*/
            --space-13xl: clamp(72px, 53.2174px + 5.8696cqi, 126px);/*Multiplier = 6*/
            /* One-up pairs */
            --space-3xs-2xs: clamp(3px, 0.2174px + 0.8696cqi, 11px);
            --space-2xs-xs: clamp(6px, 2.5217px + 1.087cqi, 16px);
            --space-xs-s: clamp(9px, 4.8261px + 1.3043cqi, 21px);
            --space-s-m: clamp(12px, 8.1739px + 1.1957cqi, 23px);
            --space-m-l: clamp(13px, 8.8261px + 1.3043cqi, 25px);
            --space-l-xl: clamp(14px, 9.4783px + 1.413cqi, 27px);
            --space-xl-2xl: clamp(16px, 11.4783px + 1.413cqi, 29px);
            --space-2xl-3xl: clamp(17px, 11.7826px + 1.6304cqi, 32px);
            --space-3xl-4xl: clamp(18px, 12.4348px + 1.7391cqi, 34px);
            --space-4xl-5xl: clamp(19px, 11px + 2.5cqi, 42px);
            --space-5xl-6xl: clamp(24px, 13.913px + 3.1522cqi, 53px);
            --space-6xl-7xl: clamp(30px, 18.5217px + 3.587cqi, 63px);
            --space-7xl-8xl: clamp(36px, 22.7826px + 4.1304cqi, 74px);
            --space-8xl-9xl: clamp(42px, 27.3913px + 4.5652cqi, 84px);
            --space-9xl-10xl: clamp(48px, 31.6522px + 5.1087cqi, 95px);
            --space-10xl-11xl: clamp(54px, 36.2609px + 5.5435cqi, 105px);
            --space-11xl-12xl: clamp(60px, 40.5217px + 6.087cqi, 116px);
            --space-12xl-13xl: clamp(66px, 45.1304px + 6.5217cqi, 126px);
            /* Custom pairs */
            --space-s-l: clamp(12px, 7.4783px + 1.413cqi, 25px);
            /* FLUID RESPONSIVE FONT SIZE BASE VALUE = 9px MIN WIDTH = 425px AND MAX VALUE = 14px MAX WIDTH = 1480px*/
            --step--6: clamp(0.1884rem, 0.1741rem + 0.0713vw, 0.2294rem);
            --step--5: clamp(0.2261rem, 0.205rem + 0.1055vw, 0.2867rem);
            --step--4: clamp(0.2713rem, 0.241rem + 0.1515vw, 0.3584rem);
            --step--3: clamp(0.3255rem, 0.2829rem + 0.213vw, 0.448rem);
            --step--2: clamp(0.3906rem, 0.3317rem + 0.2946vw, 0.56rem);
            --step--1: clamp(0.4688rem, 0.3883rem + 0.4022vw, 0.7rem);
            --step-0: clamp(0.5625rem, 0.4538rem + 0.5435vw, 0.875rem);
            --step-1: clamp(0.675rem, 0.5293rem + 0.7283vw, 1.0938rem);
            --step-2: clamp(0.81rem, 0.6162rem + 0.969vw, 1.3672rem);
            --step-3: clamp(0.972rem, 0.7157rem + 1.2817vw, 1.709rem);
            --step-4: clamp(1.1664rem, 0.8291rem + 1.6867vw, 2.1362rem);
            --step-5: clamp(1.3997rem, 0.9577rem + 2.2098vw, 2.6703rem);
            --step-6: clamp(1.6796rem, 1.1028rem + 2.8839vw, 3.3379rem);
    }
        /* Layout styles for body */
        body {
            display: grid;
            grid-template-columns: auto 1fr;
            grid-template-rows: auto;
            margin: 0;
            height: 100vh;
            overflow-x: hidden;
            /* Prevent horizontal overflow */
        }
        /* Container for the content next to the menu */
        .container_menu {
            grid-area: 1 / 2 / -1 / -1;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-y: auto;
            /* Enable vertical scrolling if content overflows */
            padding: var(--space-m);
            background-color: azure;
        }
        /* General styles */
        h2 {
            font-family: Verdana, sans-serif;
            text-align: center;
            margin: 0;
            padding: 10px 0;
            font-size: var(--step-2);
        }
        .log-container {
            width: 95%;
            height: 60%;
            padding: 20px;
            background-color: lemonchiffon;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
            margin: 0 auto;
            overflow-y: auto;
            /* Prevent content overflow */
            max-height: 400px;
        }
        .log-container button{
            margin-top: 0px;
            margin-bottom: 2%;
        }

        .log {
            border: 1px solid #ccc;
            padding: 2%;
            border-radius: 5px;
            max-height: 325px;
            overflow-y: auto;
            /* Enable scrolling for overflow content */
        }

        .log-container h2 {
            font-size: var(--step-0);
            padding-top: 0px;
            padding-bottom: 5px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="date"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: var(--step-0);
        }
        button:hover {
            background-color: #0056b3;
        }
        .side-by-side-wrapper {
            display: flex;
            justify-content: center;
            width: 100%;
            gap: var(--space-m);
            /* Adds space between the containers */
            margin-top: var(--space-m);
        }
        /* Adjust widths to fit side-by-side */
        .date-picker,
        .log-list-container {
            width: 48%;
            padding: 20px;
            background-color: lemonchiffon;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
        }

        /* Styling for the interval dropdown */
        .interval-dropdown {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 10px;
            font-size: var(--step-0);
            background-color: #fff;
            color: #333;
        }

        /* Hover and focus styles for dropdown */
        .interval-dropdown:hover,
        .interval-dropdown:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        /* Styling for the label and date picker input to match the interval dropdown */
        .date-picker label {
            font-size: var(--step-0);
            font-weight: bold;
            color: #333;
            margin-bottom: var(--space-xs);
            display: inline-block;
        }

        .date-picker input[type="date"],
        .date-picker .interval-dropdown {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 10px;
            font-size: var(--step-0);
            background-color: #fff;
            color: #333;
        }

        /* Hover and focus styles for date input and interval dropdown */
        .date-picker input[type="date"]:hover,
        .date-picker input[type="date"]:focus,
        .date-picker .interval-dropdown:hover,
        .date-picker .interval-dropdown:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .date-picker h2,
        .log-list-container h2 {
            padding: 0;
            font-size: var(--step-0);
        }
        .log {
            border: 1px solid #ccc;
            padding: 2%;
            border-radius: 5px;
            max-height: 325px;
            overflow-y: auto;
        }
        .log p {
            margin: 0;
        }
        .log-list {
            text-align: center;
        }
        .log-item {
            margin-bottom: 10px;
        }
        /* Page title styles */
        #pageTitle {
            grid-column: 1 / 3;
            grid-row: 1 / 2;
            text-align: center;
            padding-bottom: 20px;
        }
        @media (max-width: 1010px) {

            *,
            body {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            .container_menu {
                display: block;
                padding: 10px;
            }
            .log-container{
                width: 100%;
                height: auto;   
                margin: 20px auto;
            }
            .side-by-side-wrapper {
                display: flex;
                flex-direction: column; /* Stack date-picker and log-list-container vertically*/
                width: 100%;
                margin-top: 15%;
                margin-inline: 0;
            }
            .date-picker{
                font-size: var(--step-0);
            }
            .date-picker, .log-list-container {
                width: 100%; /* Full width on smaller screens */
                margin-top: 20px;
            }
            #pageTitle {
                padding: 10px 0;
            }
            h2 {
                font-size: var(--step-1);
            }
            button{
                font-size: var(--step-0);
            }
            input[type="date"]{
                font-size: var(--step-0);
            }
        }
        @media (max-width: 480px){
            .side-by-side-wrapper {
                margin-top: 45%;
            }
        }
    </style>
</head>

<?php
include "logindbase.php"; // Database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $interval = $_POST['interval'] ?? '';
    $date = $_POST['date'] ?? '';
    $table = (strpos($_SERVER['REQUEST_URI'], 'feedlog') !== false) ? 'feed_history' : 'water_test_input';
    $dateColumn = ($table === 'feed_history') ? 'feed_time' : 'Date_and_Time';

    $logs = [];
    if ($interval) {
        $query = "";

        if ($interval === 'daily') {
            $query = "SELECT AVG(Value) as average, $dateColumn as date_info FROM $table WHERE DATE($dateColumn) = ? GROUP BY $dateColumn";
        } elseif ($interval === 'weekly') {
            $query = "SELECT AVG(Value) as average, WEEK($dateColumn) as week FROM $table WHERE YEAR($dateColumn) = YEAR(?) GROUP BY WEEK($dateColumn)";
        } elseif ($interval === 'monthly') {
            $query = "SELECT AVG(Value) as average, MONTH($dateColumn) as month FROM $table WHERE YEAR($dateColumn) = YEAR(?) GROUP BY MONTH($dateColumn)";
        } elseif ($interval === 'yearly') {
            $query = "SELECT AVG(Value) as average, YEAR($dateColumn) as year FROM $table GROUP BY YEAR($dateColumn)";
        }

        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $date);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $logs[] = $row;
        }
    }

    if (!empty($logs)) {
        foreach ($logs as $log) {
            echo "<p>Average: " . htmlspecialchars($log['average']) . "</p>";
            echo "<p>Date/Interval: " . htmlspecialchars($log['date_info'] ?? ($log['week'] ?? $log['month'] ?? $log['year'])) . "</p>";
            echo "<hr>";
        }
    } else {
        echo "<p>No logs found for the selected date and interval.</p>";
    }
}
?>

<body>
    <?php include "user_menu.php"; ?>
    <div class="container_menu">
        <h2 id="pageTitle">DATE PICKER AND LOG PREVIEW</h2>

        <!-- Right side: Log preview -->
        <div class="log-container">
            <h2>Log Preview</h2>
    <button id="printLogButton" onclick="printLog()">Print Log</button>
    <div class="log" id="log">
    </div>
        </div>
        <div class="side-by-side-wrapper">
        <!-- Left side: Date picker and Log list -->
        <div class="date-picker">
            <h2>Select Date</h2>
            <label for="date">Pick a date:</label>
            <input type="date" id="date">

                <!-- Dropdown for interval selection -->
                <label for="interval">Select Interval:</label>
                <select id="interval" class="interval-dropdown">
                    <option value="daily">Daily</option>
                    <option value="weekly">Weekly</option>
                    <option value="monthly">Monthly</option>
                    <option value="yearly">Yearly</option>
                </select>

            <button onclick="logDate()">Log Date</button>
        </div>
        <div class="log-list-container">
            <h2>Select Log to Print</h2>
            <div class="log-list" id="logList"></div>
            <button onclick="showLog('/templates/feedlog_template.php')">Feed Log</button>
            <button onclick="showLog('/templates/waterlog_template.php')">Water Log</button>
            <!-- <button onclick="downloadLog()">Water Test</button> -->
        </div>
        </div>
        
    </div>

    <script>
    var logs = []; // Declare logs array globally

        function logDate() {
            var selectedDate = document.getElementById('date').value;
        var selectedInterval = document.getElementById('interval').value;

        if (selectedDate && selectedInterval === 'select') {
            logs.push(selectedDate);
        } else if (selectedInterval !== 'select') {
            logs.push(selectedInterval);
        } else {
            alert("Please select either a date or an interval.");
        }
    }

    // Function to dynamically display the log based on selected date, interval, and log type
        function showLog(logFile) {
        var selectedDate = document.getElementById('date').value;
        var selectedInterval = document.getElementById('interval').value;

        if (!selectedDate) {
            alert("Please select a date first.");
            return;
        }

            var xhr = new XMLHttpRequest();
        xhr.open('POST', logFile, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById('log').innerHTML = xhr.responseText;
            }
        };

        // Send both date and interval as parameters to the server
        xhr.send("date=" + encodeURIComponent(selectedDate) + "&interval=" + encodeURIComponent(selectedInterval));
    }

  

    // Function to update log title based on interval selection
function updateLogTitle() {
    var logTitleElement = document.getElementById("logTitle");
    var selectedInterval = document.getElementById("interval").value;

    const titleMap = {
        'daily': 'Daily Feed Log',
        'weekly': 'Weekly Feed Log',
        'monthly': 'Monthly Feed Log',
        'yearly': 'Yearly Feed Log'
    };

    // Update the log title based on the selected interval
    logTitleElement.textContent = titleMap[selectedInterval] || 'Log Preview';
    
}

// Initialize event listeners and other setups on document ready
document.addEventListener("DOMContentLoaded", function() {
    // Bind interval change event to update log title
    document.getElementById("interval").addEventListener("change", updateLogTitle);
    
    // Trigger update on initial load to reflect the current selection
    updateLogTitle();
});

function printLog() {
    // Hide buttons or any unnecessary elements before printing
    var logContainer = document.getElementById('log');
    var printButton = document.getElementById('printLogButton');
    if (printButton) printButton.style.display = 'none';

    // Clone the log container to avoid affecting the original
    var logClone = logContainer.cloneNode(true);

    // Include the state of checkboxes in the clone
    var checkboxes = logClone.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function (checkbox) {
        // Replace the checkbox element with a styled representation of its state
        var checkboxState = checkbox.checked ? '☑️' : '☐';
        var stateSpan = document.createElement('span');
        stateSpan.textContent = checkboxState;
        stateSpan.style.marginRight = '10px';

        // Replace checkbox with its state representation
        checkbox.replaceWith(stateSpan);
    });

    // Get the updated HTML content
    var logContent = logClone.innerHTML || "<p>No log content available</p>";

    // Create a new window for printing
    var printWindow = window.open('', '_blank');

    // Write the log content with styling to the new window
    printWindow.document.write('<html><head><title>Log Preview</title>');
    printWindow.document.write('<style>');
    printWindow.document.write('body {font-family: "Arial", sans-serif; margin: 20px;}');
    printWindow.document.write('.log-container {width: 100%; border: 1px solid #ccc; padding: 10px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);}');
    printWindow.document.write('.log p {margin: 5px 0; font-size: 14px;}');
    printWindow.document.write('.log hr {border: none; border-top: 1px solid #ccc; margin: 10px 0;}');
    printWindow.document.write('</style></head><body>');
    printWindow.document.write('<div class="log-container">' + logContent + '</div>');
    printWindow.document.write('</body></html>');

    // Close the document, trigger the print dialog, and then close the window
    printWindow.document.close();
    printWindow.print();
    printWindow.close();

    // Show the buttons after printing
    if (printButton) printButton.style.display = 'block';
        }
    </script>


<?php ob_end_flush(); ?>
