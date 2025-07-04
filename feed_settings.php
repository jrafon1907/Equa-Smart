<!-- j -->
<?php ob_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="shortcut icon" href="images/equasmartlogo_croppedlogo.png" type="image/svg+xml">
    <link rel="stylesheet" href="css/css/all.min.css">
    <link rel="stylesheet" href="css/css/fontawesome.min.css">

    <title>Feed Settings</title>
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

        html {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: grid;
            grid-template-columns: auto 1fr;
            margin: 0;
            height: 100vh;
            background-color: azure;
        }

        .container_menu {
            grid-area: 1 / 2 / -1 / -1;
            display: grid;
            grid-template-columns: 50% 50%;
            grid-template-rows: 30% 70%;
            background-color: azure;
            padding: 1%;
        }

        h2 {
            font-family: verdana;
            text-align: center;
            font-size: var(--step-1);
        }

        .date_container {
            /* grid-area: 2/1/2/2; */
            margin: auto;
            /* margin-left: 24%; */
            padding: 2%;
            background-color: lemonchiffon;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
            /* vertical-align: top; */
            width: 66%;
            font-size: var(--step-0);
        }

        .date_container input {
            /* width: 50%; */
            margin: 0 auto;
            padding: 5%;
            border-radius: 5px;
            border: 1px solid #ccc;
            display: block;
            font-size: var(--step--1);
            width: 70%;
        }

        .chart_container {
            display: grid;
            grid-template-columns: 40% 1fr;
            grid-area: 1/1/2/span 2;
            width: 100%;
            /* Increase width */
            height: 120%;
            /* Increase height */
            padding-block: 1%;
            padding-inline: 2%;
            background-color: lemonchiffon;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
            margin: auto;
        }

        #lineChart {
            width: 100%;
            /* Make canvas width 100% of container */
            height: 100%;
            /* Make canvas height 100% of container */
        }

        label {
            display: block;
            margin-bottom: 8px;
            text-align: center;
        }

        .view-buttons {
            display: flex;
            flex-direction: column;
            row-gap: 10px;
        }

        #feedLogs {
            /* view feed logs button */
            font-size: var(--step-0);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: lightsalmon;
            color: #000;
            height: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
            width: 65%;
            margin: 5px auto;
        }

        #feedLogs:hover {
            background-color: #ff8554;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
            display: flex;
            justify-content: flex-end;
            /* Align items to the right */
        }

        .button-container button {
            width: 20%;
            /* Adjust width if needed */
        }

        /* Added styles for new containers */
        .feedset_container {
            /* grid-area: 2 / 1 / 3 / 2; */
            width: 80%;
            height: 95%;
            margin: 0px auto;
            /* margin-left: 25%; */
            padding: 0px;
            /* background-color: lemonchiffon; */
            border-radius: 15px;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
            display: inline-block;
            vertical-align: top; */
        }

        .confmen_container {
            display: grid;
            margin: 3% auto;
            grid-area: 2 / 1 / 3 / span 2;
            width: 100%;
            /* height: 85%;
            margin-left: 10%; */
            margin-top: 5%;
            padding: 20px;
            background-color: lemonchiffon;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
            /* display: inline-block;
            vertical-align: top; */
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr;
            gap: 2%;
        }

        h4 {
            text-align: center;
        }

        .boxSettings {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: auto 1fr;
            width: 100%;
            margin: 3% auto;
            padding: var(--space-2xs);
            background-color: #fff;
            border-radius: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: honeydew;
            font-style: arial;
            gap: var(--space-2xs);
            /* Added gap */
        }

        .button {
            display: inline-block;
            padding-block: var(--space-xs);
            padding-inline: var(--space-2xl);
            font-size: var(--step-0);
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: mediumaquamarine;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px;
        }

        /* Hover effect */
        .button:hover {
            background-color: mediumseagreen;
        }

        #pageTitle {
            grid-area: 1 / 1 / 1 / span 3;
            height: 10px;
        }

        .gear-icon {
            min-width: 10%;
            display: inline-block;
            cursor: pointer;
            margin: 1%;
            font-size: var(--step-1);
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .overlay-content {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            width: 80%;
            max-width: 500px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .overlay-content h2 {
            text-align: center;
        }

        .overlay-content form {
            display: flex;
            flex-direction: column;
        }

        .overlay-content form input {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .overlay-content form button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: mediumaquamarine;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .overlay-content form button:hover {
            background-color: mediumseagreen;
        }

        #feedSettingsForm {
            font-size: 20px;
        }

        .boxSettings .icon {
            font-size: var(--step-1);
            margin: var(--space-3xs-2xs);
        }

        .boxSettings span {
            text-align: center;
            font-size: var(--step-2);
        }

        .boxSettings #amountbox {
            grid-area: 2 / 1;
            background-color: orange;
            padding: 20px;
            border-radius: 30px;
        }

        .boxSettings #sessionbox {
            grid-area: 2 / 2;
            background-color: moccasin;
            padding: 20px;
            border-radius: 30px;
        }

        .boxSettings #adjustbox {
            grid-area: 2 / 3;
            background-color: palegreen;
            padding: 20px;
            border-radius: 30px;
        }

        #changeSettings {
            grid-area: 1 / 1 / 1 / span 3;
            margin-block: 3%;
            margin-inline: 3%;
            font-size: var(--step-0);
        }

        .settingsdef {
            font-size: 16px;
        }

        .day-toggle {
            margin-bottom: 10px;
            display: flex;
            justify-content: center;
            column-gap: 15px;
        }

        .day-toggle button {
            padding: var(--space-2xs);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: var(--step-1);
        }

        .day-toggle button.active {
            background-color: mediumaquamarine;
            color: white;
        }

        #feedingTimesContainer {
            height: auto;
            /* Set the desired height */
            overflow-y: auto;
            /* Enable vertical scrolling */
            overflow-x: auto;
            /* Hide horizontal scrolling */

            /* border: 1px solid #ddd; */
            /* background-color: #f9f9f9; */
            display: grid;
        }

        .boxx {
            text-align: center;
        }

        .boxx label {
            font-size: var(--step-1);
        }

        .boxx input {
            font-size: var(--step-1);
        }

        /* Styles for the 'Activate Motor' button */
        #activateMotor {
            background-color: mediumaquamarine;
            /* Green background */
            border: none;
            /* Remove default border */
            color: white;
            /* White text */
            padding: 12px 24px;
            /* Some padding for size */
            text-align: center;
            /* Center the text */
            text-decoration: none;
            /* Remove underline from text */
            display: inline-block;
            /* Inline-block for proper layout */
            font-size: var(--step-2);
            /* Adjust font size */
            margin: var(--space-3xs);
            /* Small margin around the button */
            cursor: pointer;
            /* Pointer cursor on hover */
            border-radius: 8px;
            /* Rounded corners */
            transition-duration: 0.4s;
            /* Smooth transition effects */
        }

        /* Hover effect */
        #activateMotor:hover {
            background-color: #45a049;
            /* Darker green on hover */
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black background with opacity */
            overflow: auto;
            /* Enable scroll if needed */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            /* 5% from the top and centered */
            padding: var(--space-m-l);
            font-size: var(--step-1);
            border: 1px solid #888;
            width: 50%;
            /* Could be more or less, depending on screen size */
            border-radius: 15px;
            background-color: lemonchiffon;
            font-family: 'Poppins', 'Arial', sans-serif;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
        }

        .modal-content input {
            padding-block: var(--space-xs);
            padding-inline: var(--space-2xl);
            font-size: var(--step-1);
            width: 100%;
            margin: 3% auto;
            border-radius: 8px;
            border-style: none;
        }

        .modal-content button {
            display: inline-block;
            padding-block: var(--space-xs);
            padding-inline: var(--space-2xl);
            font-size: var(--step-0);
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: mediumaquamarine;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            margin: 2% auto;
        }

        .modal-content button:active {
            background-color: mediumseagreen;
        }

        .modal-content label {
            text-decoration: none;
            font-weight: bold;
            color: black;
            margin: 2% auto;
            text-align: left;
        }

        /* Close button */
        .close {
            color: #aaa;
            float: right;
            font-size: var(--step-3);
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        #debugMenu {
            grid-area: 1 / 1 / 1 / span 3;
        }

        #calibrateMotorBtn {
            grid-area: 3 / 1/ 4/ span 3;
            padding-block: var(--space-s);
        }

        .view-buttons {
            display: flex;
            justify-content: start;
            margin-bottom: 1%;
            margin-top: 1%;
        }

        .view-buttons button {
            margin: auto 0;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: lightsalmon;
            color: #000;
            height: 50%;
        }

        .view-buttons button:hover {
            background-color: peru;
        }

        /* Styling for the log table */
        #feedLogTable {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: var(--step-0);
            text-align: left;
        }

        #feedLogTable th,
        #feedLogTable td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #feedLogTable th {
            background-color: mediumaquamarine;
            font-weight: bold;
        }

        #feedLogTable tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        #feedLogTable tr:hover {
            background-color: #f1f1f1;
        }

        /* Search bar styling */
        #logSearch {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: var(--step-0);
        }

        /* Pagination container */
        .pagination {
            display: flex;
            justify-content: center;
            padding: 10px 0;
        }

        .pagination button {
            margin: 0 5px;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            background-color: lightsalmon;
            cursor: pointer;
        }

        .pagination button:hover {
            background-color: peru;
        }

        /* Scoped styles for the modal - specific to .chart_container */
        .chart_container .img-modal {
            position: fixed;
            z-index: 1000;
            /* High value to ensure it overlays other elements */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            /* Initially hidden */
            justify-content: center;
            align-items: center;
        }

        .chart_container .img-modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            position: relative;
            max-width: 100%;
            max-height: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .chart_container .img-modal-content img {
            max-width: 100%;
            max-height: 100%;
        }

        .chart_container .img-modal .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            cursor: pointer;
        }

        .chart_container .img-modal .close:hover {
            color: #ff0000;
        }

        /* Scoped button styles */
        .chart_container .img-modal-button {

            padding: 5px 10px;
            background-color: #ff8554;
            color: #fff;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
            width: 40%;
            height: 20%;
            max-width: 100%;
            margin: 0 auto;
        }

        .chart_container .img-modal-button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 1010px) {
            body {
                display: grid;
                grid-template-columns: auto 1fr;
                margin: 0;
                height: 100vh;
                background-color: azure;
            }

            #pageTitle,
            #debugMenu {
                grid-area: unset;
                margin: 2%;
            }

            .container_menu {
                display: grid;
                grid-template-rows: auto;
                grid-template-columns: auto;
                overflow-y: scroll;
            }

            .view-buttons {
                display: flex;
                flex-direction: column;
            }

            #feedLogs {
                width: 65%;
                align-self: center;
            }

            .date_container {
                grid-area: auto;
                margin: 2% auto;
            }

            .chart_container {
                grid-area: auto;
                display: grid;
                grid-template-rows: auto;
                grid-template-columns: 1fr;
                height: auto;
                width: 90%;
            }

            .confmen_container {
                grid-area: auto;
                width: 90%;
                grid-template-columns: auto;
                grid-template-rows: auto;
                padding: 0px;
                justify-items: center;
                gap: 0;
            }

            #feedingTimesContainer {
                width: 80%;
                /* Ensure it spans full width */
                /* Center it if necessary */
                /* Adjust padding for smaller screens */
                overflow-y: auto;
                /* Keep scrolling */
                display: flex;
                /* Use flexbox for better layout management */
                flex-direction: column;
                /* Stack children vertically */
                gap: 0;
                /* Add space between child elements */
                justify-content: center;
                box-sizing: border-box;
                height: 400px;
            }

            #feedingTimesContainer .boxx {
                width: 100%;
                /* Make input boxes and labels full-width */
                margin: 2px auto;
                height: auto;
            }

            #feedingTimesContainer input {
                width: 100%;
                /* Ensure input fields span the full container */
                padding: 2%;
                /* Add padding for better touch interaction */
                font-size: var(--step-0);
                /* Adjust font size for readability */
            }

            #feedingTimesContainer button {
                width: 100%;
                /* Buttons span the full width */
                margin: 2% auto;
                /* Add margin between buttons */
            }

            .day-toggle {
                flex-wrap: wrap;
                /* Allow wrapping on smaller screens */
                justify-content: center;
                /* Center the buttons */
            }

            .day-toggle button {
                flex: 1 1 5%;
                /* Ensure buttons adjust evenly */
            }

            .boxSettings {
                display: flex;
                /* Use flexbox to simplify vertical stacking */
                flex-direction: column;
                /* Stack children vertically */
                gap: 0;
                /* Add spacing between boxes */
                width: 100%;
                /* Ensure the boxSettings container takes full width */
            }

            .boxSettings>div {
                width: 100%;
                /* Ensure each child div takes the full width */
                margin: 0;
                /* Remove any default margin */
            }

            .modal-content input {
                font-size: var(--step-0);
            }

            /* Scoped button styles */
            .chart_container .img-modal-button {
                padding: 5px 10px;
                background-color: #ff8554;
                color: #fff;
                border: none;
                border-radius: 15px;
                cursor: pointer;
                font-size: 0.6em;
                transition: background-color 0.3s ease;
                width: 40%;
                height: 20%;
                max-width: 100%;
                margin: 0 auto;
            }

        }


    </style>
</head>

<body>
    <?php include "user_menu.php"; ?>
    <div class="container_menu">
        <h2 id="pageTitle">FEED SETTINGS</h2>
        <!-- Debug Menu Icon -->
        <div id="debugMenu">
            <i id="openDebug" class="fa-solid fa-gear gear-icon" onclick="openDebugMenu()">debug</i>
        </div>

        <div id="logModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeLogModal()">&times;</span>
                <h3 style="text-align: center;">Feed History Logs</h3>

                <div id="logControls" style="margin: 20px 0;">
                    <input type="text" id="logSearch" placeholder="Search logs...">
                    <div class="pagination" id="paginationControls">
                        <!-- Pagination buttons will be dynamically added here -->
                    </div>
                </div>
                <table id="feedLogTable">
                    <thead>
                        <tr>
                            <th><i class="fa-regular fa-clock"></i> Time</th>
                            <th><i class="fa-regular fa-weight-scale"></i> Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Logs will be inserted here by JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Debug Menu Popup Modal -->
        <div id="debugModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeDebugMenu()">&times;</span>
                <h3>Debug Menu</h3>
                <p style=color:red;>For presentation purposes only!</p>
                <button id="activateMotor">Activate Motor</button>
                <button onclick="controlMotor('on')">Turn Motor ON</button>
                <button onclick="controlMotor('off')">Turn Motor OFF</button>
                <button id="cronToggleButton" onclick="toggleCronJob()">Toggle Cron Job</button>
                <button onclick="captureImage()">Capture and Upload Image</button>
                <p id="statusMessage"></p>
            </div>
        </div>

        <!-- Calibration Modal -->
        <div id="calibrateMotorModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeCalibrateModal()">&times;</span>
                <h3>Calibrate Machine</h3>
                <label>Activate machine until feed starts to exit auger:</label>
                <br>
                <button onclick="controlMotor('on')">Turn Auger ON</button>
                <button onclick="controlMotor('off')">Turn Auger OFF</button>
                <button id="requestButton">Get Distance</button>
                <p id="response"></p>
                <br><br>
                <label for="gramsPerSecond">Input Grams per Second:</label>
                <input type="number" id="gramsPerSecond" placeholder="Enter grams per second">
                <button class="overly_button" onclick="saveCalibrationData()">Save Calibration</button>
                <p id="statusMessage"></p>
            </div>
        </div>


        <!-- Left Container -->
        <div class="chart_container">
            <div class="view-buttons">
                <button id="feedLogs"><i class="fas fa-history"></i> View Logs</button>

                <!-- Button to Open Modal for Image -->
                <button id="openImageModal" class="img-modal-button"><i class="fas fa-image"></i>Feeding Information</button>

                <div class="date_container">
                    <h2>Select Date</h2>
                    <input id="date" type="date" value="2021-07-22">
                </div>
            </div>

            <canvas id="lineChart" style="justify-self:center;"></canvas>

            <!-- Modal Structure -->
            <div id="imageModal" class="img-modal">
                <div class="img-modal-content">
                    <span class="close">&times;</span>
                    <img id="modalImage" src="images/feeding.png" alt="Captured Image">
                </div>
            </div>
        </div>

        <!-- Link to the external CSS file -->
        <link rel="stylesheet" href="styles.css">




        <!-- Additional containers -->


        <div class="confmen_container">
            <div class="box1" id="feedingTimesContainer">
                <h4>Configuration Menu for Feeding Times</h4>
                <!-- Feeding times will be dynamically inserted here -->
                <button class="button" id="saveFeedingTimes">Save Feeding Times</button>
                <!-- <button class="button" id="resetFeedingTimes">Reset to Default</button>  -->
            </div>


            <div class="boxSettings">
                <i id="changeSettings" class="fa-solid fa-gear gear-icon"> Change settings</i>
                <br></br>
                <div id="amountbox">
                    <center><i class="fa-solid fa-utensils icon"></i> <span id="amountPerFeeding"></span></center>
                    <center><span class="settingsdef"> Amount per Feeding (grams)</span></center>
                </div>
                <br>
                <div id="sessionbox">
                    <center><i class="fa-solid fa-sync icon"></i> <span id="feedingTimes"></span></center>
                    <center><span class="settingsdef"> Feed session per day</span></center>
                </div>
                <br>
                <div id="adjustbox">
                    <center><i class="fa-solid fa-sliders-h icon"></i> <span id="adjustAmountBy"></span></center>
                    <center><span class="settingsdef"> Adjust Amount by<br> (grams)</span></center>
                </div>
                <button class="button" id="calibrateMotorBtn">Calibrate Motor</button>

            </div>
        </div>
    </div>
    <div class="overlay" id="overlay">
        <div class="overlay-content">
            <h2>Edit Feed Settings</h2>
            <form id="feedSettingsForm">
                <label for="amount">Amount per Feeding</label>
                <input type="number" id="amount" name="amount">
                <label for="times">Feeding Times</label>
                <input type="number" id="times" name="times">
                <label for="adjust">Adjust Amount by</label>
                <input type="number" id="adjust" name="adjust">
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    document.getElementById("requestButton").addEventListener("click", function() {
        fetch("send_distancerequest.php")
            .then(response => response.text())
            .then(data => {
                document.getElementById("response").textContent = data;
            })
            .catch(error => console.error("Error:", error));
    });

    // Fetch feed settings on page load
    $(document).ready(function() {
        fetchFeedSettings();
        fetchFeedHistory();
    });

    // Function to open the log modal
    function openLogModal() {
        document.getElementById('logModal').style.display = 'block';
        fetchFeedLogs(); // Fetch logs when opening the modal
    }

    // Function to close the log modal
    function closeLogModal() {
        document.getElementById('logModal').style.display = 'none';
    }

    // Function to fetch feed logs and display them in the table
    function fetchFeedLogs() {
        $.ajax({
            url: './feed_settings_ajax/get_feed_logs.php', // Server endpoint for fetching logs
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                const tableBody = document.getElementById('feedLogTable').querySelector('tbody');
                tableBody.innerHTML = ''; // Clear any existing rows

                // Populate the table with logs
                response.forEach(log => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                    <td>${formatTimeTo12Hour(log.feed_time)}</td>
                    <td>${log.amount}</td>
                `;
                    tableBody.appendChild(row);
                });
            },
            error: function(error) {
                console.error('Error fetching feed logs:', error);
            }
        });
    }

    // Event listener to open feed logs modal
    document.getElementById('feedLogs').addEventListener('click', openLogModal);

    // Close modal if the user clicks outside the modal content
    window.onclick = function(event) {
        var modal = document.getElementById('logModal');
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };


    // Function to open the calibration modal
    function openCalibrateModal() {
        document.getElementById('calibrateMotorModal').style.display = 'block';
    }

    // Function to close the calibration modal
    function closeCalibrateModal() {
        document.getElementById('calibrateMotorModal').style.display = 'none';
    }

    // Function to save calibration data (grams per second)
    function saveCalibrationData() {
        var gramsPerSecond = document.getElementById('gramsPerSecond').value;

        if (gramsPerSecond === "") {
            alert("Please enter grams per second.");
            return;
        }

        // Make an AJAX request to save the data to the database
        $.ajax({
            url: '../feed_settings_ajax/save_calibration_data.php', // PHP file to handle saving
            type: 'POST',
            data: {
                grams_per_second: gramsPerSecond
            },
            success: function(response) {
                document.getElementById('statusMessage').innerText = "Calibration data saved successfully!";
                document.getElementById('gramsPerSecond').value = ''; // Clear the input field
            },
            error: function(error) {
                console.error('Error saving calibration data:', error);
                document.getElementById('statusMessage').innerText = "Failed to save calibration data.";
            }
        });
    }

    // Event listener to open modal on button click
    document.getElementById('calibrateMotorBtn').addEventListener('click', openCalibrateModal);

    // Close modal if the user clicks outside the modal content
    window.onclick = function(event) {
        var modal = document.getElementById('calibrateMotorModal');
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };

    // Function to format time to 12-hour format with hours, minutes, and seconds
    function formatTimeTo12Hour(feedTime) {
        var date = new Date(feedTime); // Convert the feedTime string into a Date object
        var hours = date.getHours();
        var minutes = date.getMinutes().toString().padStart(2, '0');
        var seconds = date.getSeconds().toString().padStart(2, '0');
        var ampm = hours >= 12 ? 'PM' : 'AM';
        hours = hours % 12;
        hours = hours ? hours : 12; // If hour is 0, display as 12

        return `${hours}:${minutes}:${seconds} ${ampm}`;
    }

    // Function to set the current date in the input field
    function setCurrentDate() {
        var today = new Date();
        var year = today.getFullYear();
        var month = (today.getMonth() + 1).toString().padStart(2, '0'); // Get month and pad single digits
        var day = today.getDate().toString().padStart(2, '0'); // Get day and pad single digits

        // Set the value of the date input to the current date in 'YYYY-MM-DD' format
        var formattedDate = `${year}-${month}-${day}`;
        document.getElementById('date').value = formattedDate;
    }

    // Call the function to set the current date when the page loads
    document.addEventListener('DOMContentLoaded', setCurrentDate);

    // Function to update the chart with new feed history data
    function updateChart(feedData) {
        // Check if feedData is empty or undefined
        if (!feedData || feedData.length === 0) {
            console.warn("No data available to update the chart.");
            lineChart.data.labels = []; // Clear labels
            lineChart.data.datasets[0].data = []; // Clear dataset
            lineChart.update();
            return;
        }

        // Proceed with populating the chart if data is available
        var labels = feedData.map(entry => formatTimeTo12Hour(entry.feed_time));
        var data = feedData.map(entry => entry.amount);

        lineChart.data.labels = labels;
        lineChart.data.datasets[0].data = data;

        // Re-render the chart
        lineChart.update();
    }


    // Event listener for date input
    document.getElementById('date').addEventListener('change', fetchFeedHistory);

    // Initialize the chart
    var ctx = document.getElementById('lineChart').getContext('2d');
    var lineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [], // Initially empty
            datasets: [{
                label: 'Total Daily Feed History',
                data: [], // Initially empty
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                        var label = data.datasets[tooltipItem.datasetIndex].label || '';
                        if (label) {
                            label += ': ';
                        }
                        label += tooltipItem.yLabel;
                        return label;
                    },
                    title: function(tooltipItems, data) {
                        // Format the title (feed_time) in 12-hour format in tooltips
                        var dateLabel = data.labels[tooltipItems[0].index];
                        return `Time: ${dateLabel}`;
                    }
                }
            }
        }
    });


    // Fetch feed history for the selected date
    function fetchFeedHistory() {
        var selectedDate = document.getElementById('date').value;
        console.log('Fetching feed history for date:', selectedDate);

        $.ajax({
            url: '/feed_settings_ajax/get_feed_history.php',
            type: 'POST',
            dataType: 'json',
            data: {
                selectedDate: selectedDate
            }, // Send selected date to the server
            success: function(response) {
                console.log('Server response:', response);

                if (response.message) {
                    console.warn(response.message);
                    alert(response.message);
                    lineChart.data.labels = [];
                    lineChart.data.datasets[0].data = [];
                    lineChart.update();
                    return;
                }

                if (response && Array.isArray(response)) {
                    updateChart(response);
                } else {
                    console.error("Invalid data format received from the server:", response);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching feed history:', xhr);
                console.error('Status:', status);
                console.error('Error:', error);
            }
        });
    }




    function captureImage() {
        console.log("Attempting to capture image..."); // Log the start of the function

        fetch('http://esp32feeder.local/capture')
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
                alert(data); // Alert the user with the response data
            })
            .catch(error => {
                console.error("Error occurred:", error); // Log the error to the console
                alert("Error: " + error.message); // Alert the user with the error message
            });
    }


    function toggleCronJob() {
        fetch('./cronfiles/toggle_feed_cron.php', {
                method: 'POST'
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById('statusMessage').innerText = data.message;
            });
    }

    function controlMotor(action) {
        const esp32Ip = "https://equasmart.local"; // Replace with the actual IP address of your ESP32-CAM

        fetch(`${esp32Ip}/feeder/${action}`)
            .then(response => response.text())
            .then(data => console.log(data))
            .catch(error => console.error('Error:', error));
    }


    var currentSettings = {};
    var currentSchedule = {};

    // // Sample data for the line chart
    // var data = {
    //     labels: ['Feed 1', 'Feed 2', 'Feed 3', 'Feed 4', 'Feed 5'],
    //     datasets: [{
    //         label: 'Total Daily Feed History',
    //         data: [0, 10, 20, 30, 40, 40],
    //         backgroundColor: 'rgba(255, 99, 132, 0.2)',
    //         borderColor: 'rgba(255, 99, 132, 1)',
    //         borderWidth: 1
    //     }]
    // };

    // // Configuration for the line chart
    // var options = {
    //     scales: {
    //         y: {
    //             beginAtZero: true
    //         }
    //     }
    // };

    // // Create the line chart
    // var ctx = document.getElementById('lineChart').getContext('2d');
    // var lineChart = new Chart(ctx, {
    //     type: 'line',
    //     data: data,
    //     options: options
    // });

    // Function to fetch feed settings from the server
    function fetchFeedSettings() {
        $.ajax({
            url: './feed_settings_ajax/get_feed_settings.php',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                currentSettings = response;
                $('#amountPerFeeding').text(response.amount_per_feeding);
                $('#feedingTimes').text(response.feeding_session_frequency);
                $('#adjustAmountBy').text(response.adjust_amount_by);
                createFeedingTimeInputs(response.feeding_session_frequency);
                fetchFeedingSchedule();
            },
            error: function(error) {
                console.error('Error fetching feed settings:', error);
            }
        });
    }

    // Function to fetch feeding schedule from the server
    function fetchFeedingSchedule() {
        $.ajax({
            url: './feed_settings_ajax/get_feeding_schedule.php',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                currentSchedule = response;
                populateFeedingTimeInputs(response);
            },
            error: function(error) {
                console.error('Error fetching feeding schedule:', error);
            }
        });
    }

    // JavaScript to handle the overlay opening and preloading values
    $('#changeSettings').on('click', function() {
        document.getElementById('overlay').style.display = 'flex';
        // Populate the form with the current values
        $.ajax({
            url: './feed_settings_ajax/get_feed_settings.php',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                currentSettings = response;
                $('#amount').val(response.amount_per_feeding);
                $('#times').val(response.feeding_session_frequency);
                $('#adjust').val(response.adjust_amount_by);
            },
            error: function(error) {
                console.error('Error fetching feed settings:', error);
            }
        });
    });

    // Function to create time input fields based on feeding_session_frequency
    function createFeedingTimeInputs(frequency) {
        var container = $('#feedingTimesContainer');
        container.empty();

        var dayToggle = `<div class="boxx">
            <label>Select Days of the Week:</label>
            <div class="day-toggle">
                <button type="button" class="day" data-day="Sunday">Sun</button>
                <button type="button" class="day" data-day="Monday">Mon</button>
                <button type="button" class="day" data-day="Tuesday">Tue</button>
                <button type="button" class="day" data-day="Wednesday">Wed</button>
                <button type="button" class="day" data-day="Thursday">Thu</button>
                <button type="button" class="day" data-day="Friday">Fri</button>
                <button type="button" class="day" data-day="Saturday">Sat</button>
            </div>
        </div>`;
        container.append(dayToggle);

        for (var i = 0; i < frequency; i++) {
            var timeInput = `<div class="boxx">
                <label for="time${i + 1}">Feeding Time ${i + 1}:</label>
                <input type="time" id="time${i + 1}" name="time${i + 1}">
            </div>`;
            container.append(timeInput);
        }

        container.append('<button class="button" id="saveFeedingTimes">Save Feeding Times</button>');
        // container.append('<button class="button" id="resetFeedingTimes">Reset to Default</button>'); // New Reset Button

        // Add event listener for day buttons
        $('.day').on('click', function() {
            $(this).toggleClass('active');
        });
    }

    // Function to populate time inputs and day toggles with current schedule
    function populateFeedingTimeInputs(schedule) {
        schedule.forEach((entry, index) => {
            $(`#time${index + 1}`).val(entry.time);
            entry.days.forEach(day => {
                $(`.day[data-day="${day}"]`).addClass('active');
            });
        });
    }

    // Handle form submission
    document.getElementById('feedSettingsForm').addEventListener('submit', function(event) {
        event.preventDefault();

        var amount = $('#amount').val() || currentSettings.amount_per_feeding;
        var times = $('#times').val() || currentSettings.feeding_session_frequency;
        var adjust = $('#adjust').val() || currentSettings.adjust_amount_by;

        $.ajax({
            url: './feed_settings_ajax/update_feed_settings.php',
            type: 'POST',
            data: {
                amount: amount,
                times: times,
                adjust: adjust
            },
            success: function(response) {
                // Update the displayed settings
                fetchFeedSettings();
                // Close the overlay
                document.getElementById('overlay').style.display = 'none';
            },
            error: function(error) {
                console.error('Error updating feed settings:', error);
            }
        });
    });

    // Handle saving feeding times
    $(document).on('click', '#saveFeedingTimes', function(event) {
        event.preventDefault();
        var feedingTimes = [];
        var daysOfWeek = [];

        $('#feedingTimesContainer .boxx').each(function() {
            var time = $(this).find('input[type="time"]').val();
            if (time) {
                feedingTimes.push(time);
            }
        });

        $('.day.active').each(function() {
            daysOfWeek.push($(this).data('day'));
        });

        $.ajax({
            url: './feed_settings_ajax/save_feeding_schedule.php',
            type: 'POST',
            data: JSON.stringify({
                feedingTimes: feedingTimes,
                daysOfWeek: daysOfWeek
            }),
            contentType: 'application/json',
            success: function(response) {
                console.log('Feeding times saved:', response);
                fetchFeedingSchedule();
            },
            error: function(error) {
                console.error('Error saving feeding times:', error);
            }
        });
    });

    // Handle resetting feeding times to default
    $(document).on('click', '#resetFeedingTimes', function(event) {
        event.preventDefault();

        // Call the server to reset to default settings
        $.ajax({
            url: './feed_settings_ajax/reset_feed_settings.php', // Make sure this endpoint handles resetting
            type: 'POST',
            success: function(response) {
                // Update the displayed settings and schedule
                fetchFeedSettings();
                alert('Feeding settings have been reset to default.');
            },
            error: function(error) {
                console.error('Error resetting feed settings:', error);
            }
        });
    });


    // Close the overlay when clicking outside the form
    document.getElementById('overlay').addEventListener('click', function(event) {
        if (event.target === event.currentTarget) {
            document.getElementById('overlay').style.display = 'none';
        }
    });

    // $('#activateMotor').on('click', function() {
    //     $.ajax({
    //         url: './feed_settings_ajax/control_arduino.php',
    //         type: 'GET',
    //         success: function(response) {
    //             alert('Stepper motor activated');
    //         },
    //         error: function(error) {
    //             console.error('Error activating motor:', error);
    //         }
    //     });
    // });

    // Function to open the debug menu
    function openDebugMenu() {
        document.getElementById('debugModal').style.display = 'block';
    }

    // Function to close the debug menu
    function closeDebugMenu() {
        document.getElementById('debugModal').style.display = 'none';
    }

    // Close the modal if the user clicks outside of the modal content
    window.onclick = function(event) {
        var modal = document.getElementById('debugModal');
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        const modal = document.getElementById("imageModal");
        const openModalButton = document.getElementById("openImageModal");
        const closeModalButton = modal.querySelector(".close");

        // Open the modal
        openModalButton.addEventListener("click", function() {
            modal.style.display = "flex";
        });

        // Close the modal
        closeModalButton.addEventListener("click", function() {
            modal.style.display = "none";
        });

        // Close the modal when clicking outside the modal content
        window.addEventListener("click", function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    });
</script>


</html>
<?php ob_end_flush(); ?>