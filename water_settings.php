<!-- j -->
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/equasmartlogo_croppedlogo.png" type="image/svg+xml">
    <link rel="stylesheet" href="css/css/all.min.css">
    <link rel="stylesheet" href="css/css/fontawesome.min.css">
    <title>Water Settings</title>
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        :root {
            /* FLUID RESPONSIVE PADDING/MARGIN SPACE BASE VALUE = 12px, MIN WIDTH = 320px, AND MAX VALUE = 21px, MAX WIDTH = 1240px (added by mark romualdo)*/
            --space-3xs: clamp(3px, 2.3043px + 0.2174cqi, 5px);
            /*Multiplier = 0.25*/
            --space-2xs: clamp(6px, 4.2609px + 0.5435cqi, 11px);
            /*Multiplier = 0.5*/
            --space-xs: clamp(9px, 6.5652px + 0.7609cqi, 16px);
            /*Multiplier = 0.75*/
            --space-s: clamp(12px, 8.8696px + 0.9783cqi, 21px);
            /*Multiplier = 1*/
            --space-m: clamp(13px, 9.5217px + 1.087cqi, 23px);
            /*Multiplier = 1.1*/
            --space-l: clamp(14px, 10.1739px + 1.1957cqi, 25px);
            /*Multiplier = 1.2*/
            --space-xl: clamp(16px, 12.1739px + 1.1957cqi, 27px);
            /*Multiplier = 1.3*/
            --space-2xl: clamp(17px, 12.8261px + 1.3043cqi, 29px);
            /*Multiplier = 1.4*/
            --space-3xl: clamp(18px, 13.1304px + 1.5217cqi, 32px);
            /*Multiplier = 1.5*/
            --space-4xl: clamp(19px, 13.7826px + 1.6304cqi, 34px);
            /*Multiplier = 1.6*/
            --space-5xl: clamp(24px, 17.7391px + 1.9565cqi, 42px);
            /*Multiplier = 2*/
            --space-6xl: clamp(30px, 22px + 2.5cqi, 53px);
            /*Multiplier = 2.5*/
            --space-7xl: clamp(36px, 26.6087px + 2.9348cqi, 63px);
            /*Multiplier = 3*/
            --space-8xl: clamp(42px, 30.8696px + 3.4783cqi, 74px);
            /*Multiplier = 3.5*/
            --space-9xl: clamp(48px, 35.4783px + 3.913cqi, 84px);
            /*Multiplier = 4*/
            --space-10xl: clamp(54px, 39.7391px + 4.4565cqi, 95px);
            /*Multiplier = 4.5*/
            --space-11xl: clamp(60px, 44.3478px + 4.8913cqi, 105px);
            /*Multiplier = 5*/
            --space-12xl: clamp(66px, 48.6087px + 5.4348cqi, 116px);
            /*Multiplier = 5.5*/
            --space-13xl: clamp(72px, 53.2174px + 5.8696cqi, 126px);
            /*Multiplier = 6*/

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

        body {
            display: grid;
            grid-template-columns: auto 1fr;
            grid-template-rows: auto;
            margin: 0;
            height: 100vh;
            background-color: azure;
        }

        .container_menu {
            grid-area: 1 / 2 / -1 / -1;
            display: grid;
            grid-template-columns:50% 50%;
            grid-template-rows: auto;
            background-color: azure;

        }

        h2 {
            font-family: Verdana, sans-serif;
            text-align: center;
            margin-block: 1%;
        }

        .container {
            grid-area: 2 / 1 / 2 / span 2;
            width: 86%;
            max-width: 4000px; /* Add a maximum width to prevent over-expansion */
            margin: 0 auto;
            margin-top: 4%;
            margin-left: 14%;
            padding: 4% 2%;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            /* Adjusts spacing equally */
            align-items: center;
        }

        .chart-container {
            width: 50%;
            /* Adjust width to fit your desired size */
            height: 300px;
            /* Set a specific height for the chart container */
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        canvas {
            width: 10%;
            height: 10%;
            /* Make sure the canvas takes full height */
        }



        h4 {
            text-align: center;
        }

        canvas {
            display: block;
            margin: 0 auto;
            margin-top: 20px;
            width: 100%;
            height: 70%;
            max-width: 30%;
        }

        .calendar {
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 20px;
            padding: 90px;
            width: 100%;
            font-size: var(--step-0);
        }

        .calendar h4 {
            margin-bottom: 2%;
        }

        #calendar,
        #dateRange {
            font-size: var(--step--1);
        }

        .calendar input[type="date"] {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .input {
            grid-area: 3 / 1 / 3 / 1;
            display: flex;
            justify-content: center;
            /* Centers content vertically */
            align-items: center;
            /* Centers content horizontally */
            margin: auto;
            margin-left: 28%;
            flex-direction: column;
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
            padding: 40px;
            width: 80%;
            height: 90%;
        }

        .input input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-block: 1%;
            align-self: center;
        }

        .input button {
            width: 100%;
            padding: 10px;
            margin-block: 1%;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            align-self: center;
            font-size: var(--step-0);
        }

        .input button:hover {
            background-color: #45a049;
        }

        .calendar {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: mediumaquamarine;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 50%;
            max-width: 500px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .calendar:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.9);
        }

        .calendar h4 {
            margin-bottom: 10px;
            font-family: Arial, sans-serif;
            color: #333;
        }

        .calendar input[type="date"],
        .calendar select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .calendar input[type="date"]:hover,
        .calendar select:hover {
            background-color: #f0f8ff;
            border-color: #a0a0a0;
        }

        .calendar select:focus,
        .calendar input[type="date"]:focus {
            outline: none;
            border-color: #4a90e2;
            box-shadow: 0 0 5px rgba(74, 144, 226, 0.5);
        }

        .calendar select {
            appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="gray"><path d="M7 10l5 5 5-5H7z"/></svg>');
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 15px;
        }

        .testing-history {
            grid-area: 3 / 2 / 3 / 2;
            width: 90%;
            height: 90%;
            margin: auto;
            margin-left: 10%;
            background-color: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);

            display: flex;
            flex-direction: column;
        }

        label {
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #333;
            padding-bottom: 2px;
            border-bottom: 1px solid transparent;
            transition: border-bottom 0.4s ease-in-out;
            font-weight: bold;
        }

        label:hover {
            border-bottom: 5px solid #333;
        }

        /* Default background colors */
        #input1 {
            background-color: #ff7878;
            /* Solid light red for Ammonia */
        }

        #input2 {
            background-color: #7e7efc;
            /* Solid light violet for Nitrate */
        }

        #input3 {
            background-color: #ffc65e;
            /* Solid light blue for pH */
        }

        /* Hover effect with distinct colors */
        #input1:hover {
            background-color: #FF0000;
            /* Darker red on hover for Ammonia */
        }

        #input2:hover {
            background-color: #2e2ec9;
            /* Darker violet on hover for Nitrate */
        }

        #input3:hover {
            background-color: #FFA500;
            /* Darker blue on hover for pH */
        }

        .boxx {
            width: auto;
            color: white;
            align-self: center;
        }

        .test-controls {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            /* Centers the buttons horizontally */
            margin-top: 4%;
            gap: 10px;
            /* Adjust the value as needed to create the desired space */
            height: 50%;
        }

        .test-controls button {
            border-style: none;
            border-radius: 3px;
            padding: 8px 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.9);
            font-size: var(--step--1);
            color: white;
        }

        .test-controls button:active {
            transform: scale(0.95);
            /* Scales down the button slightly */
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
            /* Reduces shadow to make it look pressed */
        }

        #testAmonia_btn {
            background-color: #FF0000; /* Red */
        }

        #testNitrate_btn {
            background-color: #0000FF; /* Blue */
        }

        #testPh_btn {
            background-color: #FFA500; /* Orange */
        }

        #flushTube_btn {
            background-color: #B651E8; /* Purple */
        }

        .openConfig_btn {
            background-color: #4CAF50; /* Green */
        }

        #testAmonia_btn:hover {
            background-color: #C91616; /* Darker Red */
        }

        #testNitrate_btn:hover {
            background-color: #1A1AC9; /* Darker Blue */
        }

        #testPh_btn:hover {
            background-color: #D18F17; /* Darker Orange */
        }

        #flushTube_btn:hover {
            background-color: #9436C2; /* Darker Purple */
        }

        .openConfig_btn:hover {
            background-color: #23A627; /* Darker Green */
        }

        /* Shared Button Styles */
        #testAmonia_btn,
        #testNitrate_btn,
        #testPh_btn,
        #flushTube_btn,
        .openConfig_btn {
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.4),
                        inset 0 -2px 5px rgba(0, 0, 0, 0.3),
                        inset 0 2px 3px rgba(255, 255, 255, 0.4);
            color: white;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: bold;
            padding: 12px 24px;
            text-transform: uppercase;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            cursor: pointer;
            outline: none;
            transition: transform 0.2s ease-in-out, background 0.3s ease-in-out;
            width: calc(50% - 10px);
        }

        #testAmonia_btn:hover,
        #testNitrate_btn:hover,
        #testPh_btn:hover,
        #flushTube_btn:hover,
        .openConfig_btn:hover {
            box-shadow: inset 0 2px 5px rgba(255, 255, 255, 0.6),
                        inset 0 -2px 5px rgba(0, 0, 0, 0.4),
                        3px 3px 6px rgba(0, 0, 0, 0.6);
            transform: scale(0.98);
        }


        #pageTitle {
            grid-area: 1 / 1 / 1 / span 3;
            font-size: var(--step-2);
            justify-self: center;
            align-self: center;
        }

        #activateButton,
        #activateButton1,
        #activateButton2 {
            display: block;
            width: calc(100% - 10px);
            margin: 5px auto;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }

        #activateButton:hover,
        #activateButton1:hover,
        #activateButton2:hover {
            background-color: #45a049;
        }

        #saveTestResultsButton {
    background-color: #4CAF50; /* Green color similar to Open Configuration */
    border: none;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.4),
                inset 0 -2px 5px rgba(0, 0, 0, 0.3),
                inset 0 2px 3px rgba(255, 255, 255, 0.4);
    color: white;
    font-family: Arial, sans-serif;
    font-size: 14px;
    font-weight: bold;
    padding: 12px 24px;
    text-transform: uppercase;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    cursor: pointer;
    outline: none;
    transition: transform 0.2s ease-in-out, background 0.3s ease-in-out;
}

#saveTestResultsButton:hover {
    background-color: #23A627; /* Darker green for hover */
    box-shadow: inset 0 2px 5px rgba(255, 255, 255, 0.6),
                inset 0 -2px 5px rgba(0, 0, 0, 0.4),
                3px 3px 6px rgba(0, 0, 0, 0.6);
    transform: scale(0.98);
}


        .gallery-container {
            width: 100%;
            max-height: 400px;
            /* Adjust the height as needed */
            overflow-y: auto;
            /* Adds a vertical scroll bar */
            overflow-x: hidden;
            padding: 10px;
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
        }

        .image-gallery img {
            max-width: 200px;
            margin: 10px;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .image-gallery img:hover {
            transform: scale(1.1);
            cursor: pointer;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 999;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            overflow: auto;
        }

        .modal-content {
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80%;
            max-width: 900px;
        }

        .modal-content img {
            max-width: 50%;
            border-radius: 10px;
            margin: 0 10px;
            /* Add spacing between images */
        }

        .modal-content img:hover {
            transform: scale(1.05);
        }

        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        .response {
            color: green;
        }

        /* Config Modal styling */
        .config_modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            /* Semi-transparent background */
        }

        .config_modal_content {
            background-color: #fff;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #ccc;
            width: 80%;
            max-width: 500px;
            border-radius: 8px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
            position: relative;
        }

        .config_close_btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            cursor: pointer;
        }


        .test-controls button.disabled {
            cursor: not-allowed;
            /* Change cursor */
            opacity: 0.6;
            /* Make button look 'greyed out' */
        }

        /* Water Scheduling Modal Styling */
        .water-scheduling-modal-overlay {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }


        .water-scheduling-modal-content {
            /* background-color: #fff; */
            margin: 10% auto;
            padding: 20px;
            /* border: 1px solid #ccc; */
            width: 80%;
            max-width: 750px;
            border-radius: 8px;
            /* box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3); */
            position: relative;
        }

        .water-scheduling-modal-close {
            /* position: relative; */
            top: 10px;
            right: 15px;
            font-size: 3em;
            font-weight: bold;
            color: #FFD700;
            cursor: pointer;
        }

        .water-scheduling-modal-close:hover {
            color: #000;
        }

        /* Button to Open Water Scheduling Modal */
        .water-scheduling-trigger-button {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: white;
            background-size: 30px 30px;
            background-repeat: no-repeat;
            background-position: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.9);
            margin: 10px auto;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .water-scheduling-trigger-button:active {
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.5);
            transform: translateY(2px);
        }

        /* Scheduler Container */
        #waterTestingScheduler {
            background-color: #fff8dc;
            /* Light cream color for container */
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 800px;
            width: 100%;
        }

        /* Day Toggle Buttons */
        .day-toggle {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .day {
            background-color: #e6e6e6;
            /* Gray for inactive buttons */
            color: #555;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 1em;
            transition: all 0.3s ease;
        }

        .day:hover {
            background-color: #d4d4d4;
        }

        .day.active {
            background-color: #94d494;
            /* Green for active days */
            color: white;
        }

        /* Time Input Section */
        .time-input {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .time-input label {
            flex: 1;
            font-size: 1em;
            color: #555;
        }

        .time-input input {
            flex: 2;
            padding: 5px 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Add Time Button */
        #addTimeInput {
            background-color: #00aaff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 1em;
            cursor: pointer;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        #addTimeInput:hover {
            background-color: #008ecc;
        }

        /* Select Test Type */
        #testTypeSelector {
            width: 100%;
            padding: 10px 15px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        /* Save Button */
        .save-schedule-btn {
            background-color: #28a745;
            /* Green button */
            color: white;
            border: none;
            border-radius: 5px;
            padding: 15px 20px;
            font-size: 1em;
            cursor: pointer;
            width: 100%;
            transition: all 0.3s ease;
        }

        .save-schedule-btn:hover {
            background-color: #218838;
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
                /* Stack menu items vertically */
            }

            .container,
            .input,
            .testing-history {
                width: 90%;
                /* Ensure full width for each section */
                margin: 3% auto;
                /* Center elements and add spacing */
                height: auto;
                /* Let height adjust based on content */
            }

            .container {
                display: flex;
                flex-direction: column;
            }

            #lineChart {
                max-width: 90%;
                max-height: 300px;
            }

            .calendar {
                width: 80%;
            }

            .input {
                padding: 7px 4px;
            }

            .input input {
                font-size: var(--step--1);
            }

            .modal {
                display: none;
                position: fixed;
                z-index: 999;
                padding-top: 100px;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.8);
                overflow: auto;
            }

            .modal-content {
                margin: auto;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 80%;
                max-width: 900px;
            }

            .modal-content img {
                max-width: 50%;
                border-radius: 10px;
                margin: 0 10px;
            }

            .close {
                position: absolute;
                top: 15px;
                right: 35px;
                color: #f1f1f1;
                font-size: 40px;
                font-weight: bold;
                transition: 0.3s;
                cursor: pointer;
            }

            .close:hover,
            .close:focus {
                color: #bbb;
                text-decoration: none;
                cursor: pointer;
            }

        }
    </style>
</head>
<?php
include 'logindbase.php'; // Ensure database connection

// Function to fetch test values for the current day
function fetchTestValues($conn)
{
    $currentDate = date('Y-m-d');
    $sql = "SELECT Name, Value FROM water_test_input WHERE DATE(Date_and_Time) = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $currentDate);
    $stmt->execute();
    $result = $stmt->get_result();

    $data = ['Ammonia' => 0, 'Nitrate' => 0, 'pH' => 0]; // Default values
    while ($row = $result->fetch_assoc()) {
        $data[$row['Name']] = $row['Value'];
    }

    return $data;
}

// Fetch and populate test values for the current day
$testValues = fetchTestValues($conn);

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ammonia = $_POST['input1'] ?? 0;
    $nitrate = $_POST['input2'] ?? 0;
    $pH = $_POST['input3'] ?? 0;

    $currentDate = date('Y-m-d');
    $tests = ['Ammonia' => $ammonia, 'Nitrate' => $nitrate, 'pH' => $pH];

    foreach ($tests as $name => $value) {
        // Check if a record exists for the current day and test
        $sqlCheck = "SELECT Test_ID FROM water_test_input WHERE Name = ? AND DATE(Date_and_Time) = ?";
        $stmtCheck = $conn->prepare($sqlCheck);
        $stmtCheck->bind_param('ss', $name, $currentDate);
        $stmtCheck->execute();
        $resultCheck = $stmtCheck->get_result();

        if ($resultCheck->num_rows > 0) {
            // Update existing record
            $sqlUpdate = "UPDATE water_test_input SET Value = ? WHERE Name = ? AND DATE(Date_and_Time) = ?";
            $stmtUpdate = $conn->prepare($sqlUpdate);
            $stmtUpdate->bind_param('dss', $value, $name, $currentDate);
            $stmtUpdate->execute();
        } else {
            // Insert new record
            $sqlInsert = "INSERT INTO water_test_input (Name, Value, Date_and_Time) VALUES (?, ?, NOW())";
            $stmtInsert = $conn->prepare($sqlInsert);
            $stmtInsert->bind_param('sd', $name, $value);
            $stmtInsert->execute();
        }
    }

    // Reload the page to reflect the updated values
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<body>
    <?php include "user_menu.php"; ?>
    <?php include "header.php"; ?>
    <div class="container_menu">
        <!-- <h2 id="pageTitle">WATER SETTINGS</h2> -->
        <!-- Modal for Enlarged Image -->
        <div id="imageModal" class="modal">
            <span class="close">&times;</span>
            <div class="modal-content">
                <div style="display: flex; justify-content: center;">
                    <!-- Selected Image -->
                    <img id="modalImage" src="" alt="Enlarged Image" style="max-width: 50%; margin-right: 10px; transform:rotate(180deg);">
                    <!-- Comparison Image -->
                    <!-- <div id="comparisonLabel"><span>OPTIMAL</span><span>OKAY</span><span>NOT RECOMMENDED</span> </div> -->
                    <!-- <img id="comparisonImage" src="/uploads/ammonia_comparison.jpg" alt="Comparison Image" style="max-width: 50%;"> -->
                    <img id="comparisonImage" alt="Comparison Image" style="max-width: 50%;">

                </div>
            </div>
        </div>

        <!-- Modal for Water Testing Scheduling -->
        <div id="water-scheduling-modal" class="water-scheduling-modal-overlay">
            <div class="water-scheduling-modal-content">
                <span id="water-scheduling-modal-close" class="water-scheduling-modal-close">&times;</span>
                <div id="waterTestingScheduler">
                    <h3>Select Days of the Week:</h3>
                    <div class="day-toggle">
                        <button type="button" class="day" data-day="Sunday">Sun</button>
                        <button type="button" class="day" data-day="Monday">Mon</button>
                        <button type="button" class="day" data-day="Tuesday">Tue</button>
                        <button type="button" class="day" data-day="Wednesday">Wed</button>
                        <button type="button" class="day" data-day="Thursday">Thu</button>
                        <button type="button" class="day" data-day="Friday">Fri</button>
                        <button type="button" class="day" data-day="Saturday">Sat</button>
                    </div>

                    <h3>Testing Times:</h3>
                    <div id="timeInputsContainer">
                        <!-- Dynamically added time inputs will go here -->
                    </div>
                    <button class="button" id="addTimeInput">Add Testing Time</button>

                    <h3>Select Test Type:</h3>
                    <select id="testTypeSelector">
                        <option value="ammonia">Ammonia</option>
                        <option value="nitrate">Nitrate</option>
                        <option value="ph">pH</option>
                    </select>

                    <button class="button save-schedule-btn" id="saveWaterSchedule">Save Water Testing Schedule</button>
                </div>
            </div>
        </div>


        <!-- The Config Modal -->
        <div id="config_modal" class="config_modal">
            <div class="config_modal_content">
                <span class="config_close_btn" onclick="closeConfigModal()">&times;</span>
                <div id="config_modal_body">
                    <!-- Content from motor_config.php will be loaded here -->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="gallery-container">
                <div id="imageGallery" class="image-gallery">
                    <!-- Images will be loaded here -->
                </div>
            </div>
            <div class="calendar">
                <h4>Calendar</h4>
                <input type="date" id="calendar" onchange="updateChart()">
                <select id="dateRange" onchange="updateChart()">
                    <option value="daily">Daily</option>
                    <option value="weekly">Weekly</option>
                    <option value="monthly">Monthly</option>
                    <option value="yearly">Yearly</option>
                </select>
            </div>
            <canvas id="lineChart"></canvas>

        </div>

        <div class="input">
            <form id="testResultsForm" method="POST" action="">
                <h2>Input Fields</h2>
                <label for="input1" class="label">Ammonia:</label>
                <input
                    type="text"
                    id="input1"
                    name="input1"
                    value="<?php echo htmlspecialchars($testValues['Ammonia']); ?>"
                    placeholder="Enter Ammonia value">

                <label for="input2" class="label">Nitrate:</label>
                <input
                    type="text"
                    id="input2"
                    name="input2"
                    value="<?php echo htmlspecialchars($testValues['Nitrate']); ?>"
                    placeholder="Enter Nitrate value">

                <label for="input3" class="label">pH:</label>
                <input
                    type="text"
                    id="input3"
                    name="input3"
                    value="<?php echo htmlspecialchars($testValues['pH']); ?>"
                    placeholder="Enter pH value">

                <button type="button" id="saveTestResultsButton">Save</button>
            </form>

        </div>


        <div class="testing-history">
            <!-- <h4>Testing History</h4> -->

            <!-- <div>
                    <label class="label1">5/5/24</label>
                </div>
                <div>
                    <label class="label1">5/5/24</label>
                </div>
                <div>
                    <label class="label1">5/5/24</label>
                </div> -->


            <!-- Button to open the water scheduling modal -->
            <button id="open-water-scheduling-modal" class="water-scheduling-trigger-button" type="button"><i class="fa-regular fa-calendar-days"></i></button>



            <!-- <div class="test-controls">
                    <h2>Run Tests</h2>
                    <button onclick="startTest('ammonia')">Test Ammonia</button>
                    <button onclick="startTest('nitrate')">Test Nitrate</button>
                    <button onclick="startTest('ph')">Test pH</button>
                    <button onclick="startTest('flush_test_tube')">Flush Test Tube</button>
                    <button onclick="openConfigModal()">Open Configuration</button> 
                </div> -->

            <div class="test-controls">
                <button class="test-button" onclick="startTest('ammonia')" id="testAmonia_btn">Test Ammonia</button>
                <button class="test-button" onclick="startTest('nitrate')" id="testNitrate_btn">Test Nitrate</button>
                <button class="test-button" onclick="startTest('ph')" id="testPh_btn">Test pH</button>
                <button class="test-button" onclick="startTest('flush_test_tube')" id="flushTube_btn">Flush Test Tube</button>
                <button onclick="openConfigModal()" class="openConfig_btn">Open Configuration</button> <!-- This button remains unaffected -->
            </div>


            <!-- <button id="activateButton" type="button">Test Ammonia</button>
                <button id="activateButton1" type="button">Test Nitrate</button>
                <button id="activateButton2" type="button">Test pH</button> -->
            <!-- <button id="activateButton2" onclick="captureImage()">Capture and Upload Image</button> -->
            <!-- <p id="status"></p> -->


        </div>
    </div>


    <script>
        // Open the config modal
        function openConfigModal() {
            document.getElementById("config_modal").style.display = "block";

            // Fetch the motor configuration content from motor_config.php
            fetch("watermotor_config.php")
                .then(response => response.text())
                .then(data => {
                    document.getElementById("config_modal_body").innerHTML = data;
                })
                .catch(error => console.error("Error loading content:", error));
        }

        // Close the config modal
        function closeConfigModal() {
            document.getElementById("config_modal").style.display = "none";
        }

        // Close the modal when clicking outside of it
        window.onclick = function(event) {
            const modal = document.getElementById("config_modal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        function startTest(testType) {
            // Select all test buttons within the 'test-controls' div
            const testButtons = document.querySelectorAll('.test-controls button');

            // Disable all test buttons
            testButtons.forEach(button => {
                button.disabled = true;
                button.classList.add('disabled'); // Add custom class for styling
                button.title = "A test is already running. Please wait until it's complete."; // Add tooltip
            });

            // Make AJAX request to start the test
            $.ajax({
                url: './motor_control.php',
                type: 'POST',
                data: {
                    testType: testType
                },
                success: function(response) {
                    // Handle test completion
                    const result = JSON.parse(response);
                    if (result.status === "test_completed") {
                        // Re-enable all test buttons after test completion
                        testButtons.forEach(button => {
                            button.disabled = false;
                            button.classList.remove('disabled');
                            button.removeAttribute('title');
                        });
                    }
                },
                error: function() {
                    alert('Error starting the test. Please try again.');
                    // Re-enable buttons in case of error
                    testButtons.forEach(button => {
                        button.disabled = false;
                        button.classList.remove('disabled');
                        button.removeAttribute('title');
                    });
                }
            });
        }

        // Function to set the current date in the input field
        function setCurrentDate() {
            const today = new Date();
            const yyyy = today.getFullYear();
            const mm = String(today.getMonth() + 1).padStart(2, '0'); // Months are zero-based
            const dd = String(today.getDate()).padStart(2, '0');

            const formattedDate = `${yyyy}-${mm}-${dd}`;
            document.getElementById('calendar').value = formattedDate; // Set input field to current date
        }

        $(document).ready(function() {
            // Set the current date on page load
            setCurrentDate();

            // Code below is for water test scheduling
            const timeInputsContainer = $('#timeInputsContainer');
            const modalOverlay = $('#water-scheduling-modal');
            const modalCloseButton = $('#water-scheduling-modal-close');

            // Toggle active state for day buttons
            $('.day').on('click', function() {
                $(this).toggleClass('active'); // Toggle the "active" class
            });

            // Function to fetch and populate schedule for a specific test type
            function fetchAndPopulateSchedule(testType) {
                $.ajax({
                    url: './water_settings_ajax/get_schedule.php',
                    type: 'GET',
                    data: {
                        testType: testType
                    },
                    success: function(response) {
                        const data = JSON.parse(response);

                        if (data.status === 'success') {
                            // Clear existing data
                            timeInputsContainer.empty();
                            $('.day').removeClass('active');

                            // Populate days
                            data.daysOfWeek.forEach(day => {
                                $(`.day[data-day="${day}"]`).addClass('active');
                            });

                            // Populate testing times
                            data.testingTimes.forEach((time, index) => {
                                addTimeInput(time, index + 1);
                            });
                        } else {
                            alert('Error fetching schedule: ' + data.message);
                        }
                    },
                    error: function(error) {
                        console.error('Error fetching schedule:', error);
                    },
                });
            }

            // Add a new time input dynamically
            function addTimeInput(value = '', index = null) {
                const inputIndex = index || timeInputsContainer.children().length + 1;
                const timeInputHtml = `
            <div class="time-input" data-index="${inputIndex}">
                <label for="time${inputIndex}">Testing Time ${inputIndex}:</label>
                <input type="time" id="time${inputIndex}" name="time${inputIndex}" value="${value}">
                <button class="remove-time" data-index="${inputIndex}">X</button>
            </div>`;
                timeInputsContainer.append(timeInputHtml);
            }

            // Handle "Add Testing Time" button
            $('#addTimeInput').on('click', function() {
                addTimeInput();
            });

            // Remove a time input
            timeInputsContainer.on('click', '.remove-time', function() {
                $(this).closest('.time-input').remove(); // Remove the field
            });

            $('#saveWaterSchedule').on('click', function() {
                const selectedDays = [];
                const testingTimes = [];
                const testType = $('#testTypeSelector').val();

                // Collect active days
                $('.day.active').each(function() {
                    selectedDays.push($(this).data('day')); // Add active days to the array
                });

                // Collect time inputs
                timeInputsContainer.find('input[type="time"]').each(function() {
                    const timeValue = $(this).val();
                    if (timeValue) {
                        testingTimes.push(timeValue);
                    }
                });

                // Save data via AJAX
                $.ajax({
                    url: './water_settings_ajax/save_water_schedule.php',
                    type: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify({
                        testType: testType,
                        daysOfWeek: selectedDays, // Can be empty
                        testingTimes: testingTimes, // Can be empty
                    }),
                    success: function() {
                        alert('Schedule saved successfully.');
                        modalOverlay.hide(); // Close the modal
                    },
                    error: function(error) {
                        console.error('Error saving schedule:', error);
                    },
                });
            });


            // Open modal and load schedules for default test type
            $('#openSchedulerButton').on('click', function() {
                const defaultTestType = $('#testTypeSelector').val();
                fetchSchedulesForTestType(defaultTestType);
                modalOverlay.show(); // Open the modal
            });

            // Close modal
            modalCloseButton.on('click', function() {
                modalOverlay.hide();
            });

            // Update schedules when test type is changed
            $('#testTypeSelector').on('change', function() {
                const testType = $(this).val();
                fetchAndPopulateSchedule(testType); // Fetch and display the schedule
            });

            // Initial population for the default test type
            const defaultTestType = $('#testTypeSelector').val();
            fetchAndPopulateSchedule(defaultTestType);

            // Close modal if the user clicks outside the modal content
            modalOverlay.on('click', function(e) {
                if ($(e.target).is('.water-scheduling-modal-overlay')) {
                    modalOverlay.hide();
                }
            });
            // End of water test scheduling code

            $.ajax({
                url: './water_settings_ajax/check_test_status.php',
                type: 'POST',
                dataType: 'json',
                success: function(response) {
                    if (response.isTestRunning) {
                        // If a test is running, disable all test buttons
                        const testButtons = document.querySelectorAll('.test-controls button');
                        testButtons.forEach(button => {
                            // Only disable test buttons
                            button.disabled = true;
                            button.classList.add('disabled'); // Add disabled styling
                            button.title = "A test is already running. Please wait until it's complete.";

                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error checking test status:', error);
                }
            });

            // Load images when the date is selected
            $('#calendar').on('change', function() {
                var selectedDate = $(this).val();

                // AJAX request to fetch images from the selected date
                $.ajax({
                    url: './water_settings_ajax/fetch_images.php',
                    type: 'POST',
                    data: {
                        date: selectedDate
                    },
                    success: function(response) {
                        $('#imageGallery').html(response); // Update the gallery with the response

                        // Add click event to gallery images to show them in modal
                        $('.gallery-image').on('click', function() {
                            var imageUrl = $(this).attr('src');

                            // Extract the testType from the filename
                            var filename = imageUrl.split('/').pop();
                            var testType = '';

                            if (filename.includes('testTypeammonia')) {
                                testType = 'ammonia';
                            } else if (filename.includes('testTypenitrate')) {
                                testType = 'nitrate';
                            } else if (filename.includes('testTypeph')) {
                                testType = 'ph';
                            }

                            // Set the comparison image based on test type
                            var comparisonSrc = '';
                            switch (testType) {
                                case 'ammonia':
                                    comparisonSrc = './ammonia_comparison.jpg';
                                    break;
                                case 'nitrate':
                                    comparisonSrc = './nitrate_comparison.jpg';
                                    break;
                                case 'ph':
                                    comparisonSrc = './ph_comparison.jpg';
                                    break;
                                default:
                                    comparisonSrc = ''; // Optional: set a default or empty if no match
                            }

                            $('#modalImage').attr('src', imageUrl); // Set the clicked image
                            $('#comparisonImage').attr('src', comparisonSrc); // Set the comparison image based on test type
                            $('#imageModal').fadeIn(); // Show the modal
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching images:', error);
                    }
                });
            });

            // Trigger the change event to load images for the current date on page load
            $('#calendar').trigger('change');

            // // Close the modal when the close button is clicked
            // $('.close').on('click', function() {
            //     $('#imageModal').fadeOut();
            // });

            // // Close the modal if clicked outside the image
            // $(window).on('click', function(e) {
            //     if ($(e.target).is('#imageModal')) {
            //         $('#imageModal').fadeOut();
            //     }
            // });
        });




        // Close the modal when the close button is clicked
        $('.close').on('click', function() {
            $('#imageModal').fadeOut();
        });

        // Close the modal if clicked outside the image
        $(window).on('click', function(e) {
            if ($(e.target).is('#imageModal')) {
                $('#imageModal').fadeOut();
            }
        });



        // Function to send commands to the ESP32
        function sendCommand(command) {
            fetch(`http://esp32water.local/api?command=${command}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error("HTTP error! Status: " + response.status);
                    }
                    return response.text();
                })
                .then(data => {
                    alert(data);
                })
                .catch(error => {
                    console.error("Error occurred:", error);
                    alert("Error: " + error.message);
                });
        }

        function captureImage() {
            console.log("Attempting to capture image..."); // Log the start of the function

            fetch('http://esp32water.local/capture_image')
                .then(response => {
                    console.log("Received response:", response); // Log the response object

                    // Check if the response is OK (status 200-299)
                    if (!response.ok) {
                        throw new Error("HTTP error! Status: " + response.status); // Throw an error for non-OK response
                    }
                    return response.text(); // Return the response text
                })
                .then(data => {
                    console.log("Response data:", data); // Log the response data
                    // alert(data); // Alert the user with the response data
                })
                .catch(error => {
                    console.error("Error occurred:", error); // Log the error to the console
                    alert("Error: " + error.message); // Alert the user with the error message
                });
        }


        $(document).ready(function() {

            // Modal Interaction Logic
            const waterSchedulingModal = document.getElementById("water-scheduling-modal");
            const openModalButton = document.getElementById("open-water-scheduling-modal");
            const closeModalButton = document.getElementById("water-scheduling-modal-close");

            // Open modal
            openModalButton.onclick = () => {
                waterSchedulingModal.style.display = "block";
            };

            // Close modal
            closeModalButton.onclick = () => {
                waterSchedulingModal.style.display = "none";
            };

            // Close modal when clicking outside the content
            window.onclick = (event) => {
                if (event.target === waterSchedulingModal) {
                    waterSchedulingModal.style.display = "none";
                }
            };

            // Updated buttons to send commands to the ESP32 API
            $('#activateButton').on('click', function() {
                sendCommand('TITRATE_AMMONIA');
            });

            $('#activateButton1').on('click', function() {
                sendCommand('TITRATE_PH');
            });

            //     $('#activateButton2').on('click', function() {
            //         sendCommand('TITRATE_NITRATE');
            //     });

            document.getElementById('saveTestResultsButton').addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default button behavior if needed

                const ammonia = parseFloat(document.getElementById('input1').value) || 0;
                const nitrate = parseFloat(document.getElementById('input2').value) || 0;
                const pH = parseFloat(document.getElementById('input3').value) || 0;

                fetch('save_test_results.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            ammonia,
                            nitrate,
                            ph: pH
                        }),
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert("Test results saved successfully.");
                        } else {
                            console.error("Failed to save test results:", data.message);
                        }
                    })
                    .catch(error => console.error("Error:", error));
            });



        });

        document.addEventListener("DOMContentLoaded", function() {
    const ctx = document.getElementById('lineChart').getContext('2d');

    // Gradients for datasets
    const ammoniaGradient = ctx.createLinearGradient(0, 0, 0, 400);
    ammoniaGradient.addColorStop(0, 'rgba(255, 107, 107, 0.5)');
    ammoniaGradient.addColorStop(1, 'rgba(255, 107, 107, 0.1)');

    const nitrateGradient = ctx.createLinearGradient(0, 0, 0, 400);
    nitrateGradient.addColorStop(0, 'rgba(77, 150, 255, 0.5)');
    nitrateGradient.addColorStop(1, 'rgba(77, 150, 255, 0.1)');

    const phGradient = ctx.createLinearGradient(0, 0, 0, 400);
    phGradient.addColorStop(0, 'rgba(255, 217, 61, 0.5)');
    phGradient.addColorStop(1, 'rgba(255, 217, 61, 0.1)');

    const lineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [], // Dynamically updated labels
            datasets: [
                {
                    label: 'Ammonia',
                    data: [],
                    borderColor: '#ff0000',
                    borderWidth: 3,
                    tension: 0.4, // Smooth curve
                    pointRadius: 3, // Highlighted points
                    pointBackgroundColor: 'white',
                    pointBorderColor: '#ff0000',
                    backgroundColor: ammoniaGradient, // Gradient fill
                    fill: true, // Enable gradient fill
                },
                {
                    label: 'Nitrate',
                    data: [],
                    borderColor: '#0000FF',
                    borderWidth: 3,
                    tension: 0.4,
                    pointRadius: 3,
                    pointBackgroundColor: 'white',
                    pointBorderColor: '#0000FF',
                    backgroundColor: nitrateGradient,
                    fill: true,
                },
                {
                    label: 'pH',
                    data: [],
                    borderColor: '#ffa500',
                    borderWidth: 3,
                    tension: 0.4,
                    pointRadius: 3,
                    pointBackgroundColor: 'white',
                    pointBorderColor: '#ffa500',
                    backgroundColor: phGradient,
                    fill: true,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false, // For flexibility in canvas sizing
            plugins: {
                legend: {
                    position: 'bottom', // Legend below the chart
                    labels: {
                        font: {
                            family: 'Arial', // Font family
                            size: 12, // Font size
                            weight: 'bold', // Bold text
                        },
                        usePointStyle: true, // Circular markers
                        padding: 20, // Spacing between legend items
                    },
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            const value = tooltipItem.raw; // Data value
                            return `${tooltipItem.dataset.label}: ${value}`;
                        },
                        title: function(tooltipItems) {
                            return `Date: ${tooltipItems[0].label}`; // Tooltip title
                        },
                    },
                    backgroundColor: 'rgba(0, 0, 0, 0.7)', // Dark background
                    titleFont: {
                        size: 14,
                        weight: 'bold',
                    },
                    bodyFont: {
                        size: 12,
                    },
                    bodySpacing: 5,
                    padding: 10,
                    cornerRadius: 5,
                },
                title: {
                    display: true,
                    text: 'Water Quality Trends',
                    font: {
                        size: 16,
                        weight: 'bold',
                    },
                    padding: {
                        top: 10,
                        bottom: 20,
                    },
                },
            },
            scales: {
                x: {
                    grid: {
                        display: false, // Hide vertical gridlines
                    },
                    ticks: {
                        font: {
                            size: 12,
                            family: 'Arial',
                        },
                    },
                },
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.1)', // Light gridlines
                    },
                    ticks: {
                        font: {
                            size: 12,
                            family: 'Arial',
                        },
                    },
                },
            },
            elements: {
                line: {
                    tension: 0.4, // Smooth curve
                },
                point: {
                    radius: 4, // Size of points
                    borderWidth: 2,
                },
            },
        },
    });

    // Function to update chart data dynamically
    function updateChart() {
        const selectedDate = document.getElementById('calendar').value;
        const dateRange = document.getElementById('dateRange').value;

        fetch(`fetch_water_data.php?date=${selectedDate}&range=${dateRange}`)
            .then((response) => response.json())
            .then((data) => {
                const labels = [];
                const ammoniaData = [];
                const nitrateData = [];
                const pHData = [];

                data.forEach((entry) => {
                    const date = entry.Date_and_Time;
                    const value = parseFloat(entry.Value);

                    // Add unique dates to labels
                    if (!labels.includes(date)) {
                        labels.push(date);
                    }

                    // Populate data arrays
                    if (entry.Name === 'Ammonia') {
                        ammoniaData.push(value);
                    } else if (entry.Name === 'Nitrate') {
                        nitrateData.push(value);
                    } else if (entry.Name === 'pH') {
                        pHData.push(value);
                    }
                });

                // Update chart with new data
                lineChart.data.labels = labels;
                lineChart.data.datasets[0].data = ammoniaData;
                lineChart.data.datasets[1].data = nitrateData;
                lineChart.data.datasets[2].data = pHData;
                lineChart.update(); // Refresh the chart
            })
            .catch((error) => console.error('Error fetching data:', error));
    }

    // Set default date and load data
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('calendar').value = today;
    updateChart();

    // Trigger chart update on date or range change
    document.getElementById('calendar').addEventListener('change', updateChart);
    document.getElementById('dateRange').addEventListener('change', updateChart);
});


        // Initialize with default values
        document.addEventListener("DOMContentLoaded", function() {
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('calendar').value = today;
            updateChart();
        });


        // Trigger data fetching on date change
        document.getElementById('calendar').addEventListener('change', function() {
            const selectedDate = this.value;
            fetchWaterData(selectedDate); // Update chart data based on the selected date
        });

        // Set default date and load initial data
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('calendar').value = today;
        fetchWaterData(today);


        // Function to handle the form submission using fetch
        function saveMotorTime(event, motor) {
            event.preventDefault(); // Prevent the default form submission

            // Get form data
            const form = document.getElementById("motorForm_" + motor);
            const formData = new FormData(form);

            // Send the data to the server using fetch
            fetch("watermotor_config.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    // Display response message in the modal
                    const responseMessage = document.getElementById("responseMessage");
                    responseMessage.innerText = data;
                    responseMessage.className = data.includes("Error") ? "error" : "response";
                })
                .catch(error => {
                    console.error("Error saving motor time:", error);
                    const responseMessage = document.getElementById("responseMessage");
                    responseMessage.innerText = "An error occurred.";
                    responseMessage.className = "error";
                });
        }



        // // Get the modal
        // var modal = document.getElementById("modalActivateButton3");

        // // Get the button that opens the modal
        // var btn = document.getElementById("activateButton3");

        // // Get the <span> element that closes the modal
        // var span = document.getElementsByClassName("closeButtonActivateButton3")[0];

        // // When the user clicks the button, open the modal
        // btn.onclick = function() {
        //     modal.style.display = "block";
        // };

        // // When the user clicks on <span> (x), close the modal
        // span.onclick = function() {
        //     modal.style.display = "none";
        // };

        // // When the user clicks anywhere outside of the modal, close it
        // window.onclick = function(event) {
        //     if (event.target == modal) {
        //         modal.style.display = "none";
        //     }
        // };
        // Load saved values from localStorage
        window.onload = function() {
            fetch('fetch_test_results.php')
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        document.getElementById("input1").value = data.ammonia || 0;
                        document.getElementById("input2").value = data.nitrate || 0;
                        document.getElementById("input3").value = data.ph || 0;
                    } else {
                        console.error("Failed to fetch test results:", data.message);
                    }
                })
                .catch(error => console.error("Error:", error));
        };

        // Save values to localStorage on input
        document.getElementById("input1").addEventListener("input", function() {
            localStorage.setItem("input1", this.value);
        });

        document.getElementById("input2").addEventListener("input", function() {
            localStorage.setItem("input2", this.value);
        });

        document.getElementById("input3").addEventListener("input", function() {
            localStorage.setItem("input3", this.value);
        });
    </script>
</body>

</html>
<?php ob_end_flush(); ?>