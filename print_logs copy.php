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
        }
        /* Container for the content next to the menu */
        .container_menu {
            grid-area: 1 / 2 / -1 / -1;
            grid-template-columns: 1fr;
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
            margin: 0 auto; /* Center and add margin-bottom */
            margin-top: 3%
        }
        .log-container button{
            margin-top: 0px;
            margin-bottom: 2%;
        }
        .log-container h2{
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
            height: 25%;
            gap: 2%; /* Adds space between the containers */
            margin: 2%;
        }
        /* Adjust widths to fit side-by-side */
        .date-picker, .log-list-container {
            width: 50%; /* Set appropriate widths */
            padding: 20px;
            background-color: lemonchiffon;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
        }
        .date-picker h2, .log-list-container h2{
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
            display:none;
        }
        @media (max-width: 1010px) {
            *, body {
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

<body>
    <?php include "user_menu.php"; ?>
    <div class="container_menu">
        <h2 id="pageTitle">DATE PICKER AND LOG PREVIEW</h2>

        <!-- Right side: Log preview -->
        <div class="log-container">
            <h2>Log Preview</h2>
            <button onclick="printLog()">Print Log</button>
            <div class="log" id="log"></div>
        </div>
        <div class="side-by-side-wrapper">
        <!-- Left side: Date picker and Log list -->
        <div class="date-picker">
            <h2>Select Date</h2>
            <label for="date">Pick a date:</label>
            <input type="date" id="date">
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
        var logs = [];
        var selectedLogType = ''; // To store the selected log type

        function logDate() {
            var selectedDate = document.getElementById('date').value;
            logs.push(selectedDate);
            var logElement = document.createElement('p');
            logElement.textContent = 'Selected date: ' + selectedDate;
            document.getElementById('log').appendChild(logElement);

            updateLogList();
        }

        function showLog(logFile) {
            // Set the selected log type
            selectedLogType = logFile;

            // Use AJAX to load the PHP file content dynamically into the log container
            var xhr = new XMLHttpRequest();
            xhr.open('GET', logFile, true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    document.getElementById('log').innerHTML = xhr.responseText;
                } else {
                    document.getElementById('log').innerHTML = 'Error loading log content';
                }
            };
            xhr.send();
        }

        function printLog() {
            // Trigger the print dialog
            window.print();
        }

        function updateLogList() {
            var logListElement = document.getElementById('logList');
            logListElement.innerHTML = '';
            logs.forEach(function (log, index) {
                var logItem = document.createElement('div');
                logItem.textContent = 'Log ' + (index + 1) + ': ' + log;
                logItem.classList.add('log-item');
                logListElement.appendChild(logItem);
            });
        }

        function downloadLog() {
            // Navigate to the 'download-log.html' page
            window.location.href = 'water_test.php';
        }
    </script>
</body>

</html>
<?php ob_end_flush(); ?>
