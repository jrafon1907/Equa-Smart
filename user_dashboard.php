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
    <title>User Dashboard</title>
</head>
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
    *, body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
    }
    body {
        display: grid;
        grid-template-columns: auto 1fr;
        grid-template-rows: auto;
        height: 100vh;
    }

    .container_menu {
        grid-area: 1 / 2 / -1 / -1;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: auto 1fr 1fr;
        background-color: azure;
        /* margin-top: var(--space-s); */
    }

    .chart_header {
        grid-area: 1 / 1 / 2 / span 3;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        margin-block: 2%;
    }

    #feedQuick:hover,
    #waterQuick:hover,
    #tempQuick:hover {
        font-size: var(--step-2);
    }

    #feedQuick,
    #waterQuick,
    #tempQuick {
        background-color: khaki;
        height: 100%;
        width: 100%;
        color: goldenrod;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
        margin: var(--space-2xs);
        font-size: var(--step-0);
        padding: var(--space-s);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
    }
    #feedQuick{
        margin-left: var(--space-9xl);
    }

    #waterQuick {
        background-color: cornflowerblue;
        color: whitesmoke;
    }
    #waterQuick a{
        text-decoration: none;
    }
    #tempQuick {
        background-color: lightcoral;
        color: whitesmoke;
        margin-right: var(--space-9xl);
    }

    #feedQuick .icon,
    #waterQuick .icon,
    #tempQuick .icon {
        font-size: var(--step-5);
        margin-right: var(--space-xs);
    }

    .liveImage {
        grid-row: 2 / span 2;
        grid-column: 1 / span 3;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        width: 100%;
        height: 100%;
        position: relative;
    }
    .videoWrapper {
        display: flex;
        justify-content: center;
        width: 100%;
        height: 100%;
    }
    .liveImage #video1{
        width:40%;
        transform: rotate(90deg);
        border: 5px solid #333;          /* Creates a solid border around the image */
        border-radius: 15px;               /* Adds rounded corners for a frame effect */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); /* Adds a shadow for depth */
        padding: .5%;                      /* Space between image and frame */
        background-color: #f8f8f8;         /* Background color for the frame effect */
    }
    #liveClock {
        font-size: var(--step-0);
        color: darkslategray;
        text-align: center;
    }
    #liveClock:hover{
        font-size: var(--step-2);
    }
    @media (max-width: 1010px){/* added by mark romualdo */
    .container_menu{
        grid-template-columns: 1fr; /* Make the columns stack vertically */
        grid-template-rows: auto; /* Adjust rows to fit the content */
        padding: 0px; /* Add padding to the container */
    }

    .chart_header {
        flex-direction: column; /* Stack the elements vertically */
        align-items: flex-start; /* Align items to the start of the container */
        padding: 20px;
    }
    #feedQuick,
    #waterQuick,
    #tempQuick{
        margin: 5px; /* Adjust margin for the quick stats */
    }
    .liveImage {
        display: flex;
        flex-direction: column; /* Stack videos vertically */
        align-items: center; /* Center align the videos */
        justify-content: center;
        width: 100%; /* Ensure full width */
        height: auto; /* Allow height to adjust */
    }

    .videoWrapper {
        overflow:hidden;
        margin-bottom: 5%;
        padding-inline: 5%;
    }
    .liveImage #video1 {
        max-width: 800px; /* Adjust video width */
        height: auto; /* Maintain aspect ratio */
        transform: rotate(90deg);
        align-self: center;
        margin-block: 2%;
        width: 100%;
    }
    @media (max-width: 370px){
        .liveImage #video1{
            height: 200px;
        }
    }

}


</style>
<?php
include "logindbase.php";


// Get the current date
$current_date = date('Y-m-d');

// Modify the SQL query to filter for the current day
$sql = "SELECT distance
        FROM measurements 
        WHERE DATE(timestamp) = '$current_date'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $calculated_value = 100 - round(($row['distance'] / 25) * 100); // Round to the nearest integer

    if ($calculated_value < 0) {
        $calculated_value = 0;
    }

} else {
    json_encode(['calculated_value' => 0]);
}

$conn->close();
?>

<body>
    <?php include "user_menu.php"; ?>
    <div class="container_menu">

        <!-- Header Section -->
        <div class="chart_header">
            <div id="feedQuick">
                <span class="icon fa fa-fish"></span><span class="feedAmount">0 grams fed</span>
            </div>
            <div id="waterQuick">
            <div id="calculated_value">Feed Remaining: <?php echo isset($calculated_value) ? round($calculated_value) : 0; ?> <i class="fa-solid fa-percent"></i></div>



            </div>
            <div id="tempQuick">
                <!-- <span class="icon fa fa-thermometer-half"></span> -->
                <span>    <span class="icon fa fa-clock"></span><span id="liveClock"></span></span>
            </div>
        </div>

        <!-- Video Section with Live Clock -->
        <div class="liveImage">
            <!-- <div class="clockContainer">
                <span class="icon fa fa-clock"></span><span id="liveClock"></span>
            </div> -->
            <div class="videoWrapper">
                <!-- <video id="video1" autoplay controls> -->
                    <!-- <source src="./video/fish_swimming.mp4" type="video/mp4"> -->
                    <!-- <img id="video1" src="http://esp32feeder.local:81/stream" alt="ESP32 Cam Stream" style="transform: rotate(90deg);margin-top:10%; margin-right:2%;"> -->
                    <img id="video1" src="https://equasmart.local/esp32-feederstream" alt="ESP32 Cam Stream">

                <!-- </video> -->
                <!-- <video id="video2" autoplay controls>
                <source src="./video/fish_swimming.mp4" type="video/mp4">
                </video>
                <video id="video3" autoplay controls>
                <source src="./video/fish_swimming.mp4" type="video/mp4">
                </video> -->
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function updateClock() {
        const now = new Date();
        const clock = document.getElementById('liveClock');
        clock.textContent = now.toLocaleTimeString();
    }
    setInterval(updateClock, 1000);
    updateClock();

    function fetchFeedAmount() {
        $.ajax({
            url: './user_dashboard_ajax/fetch_feed_amount.php',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                const feedAmountSpan = document.querySelector('#feedQuick .feedAmount');
                feedAmountSpan.textContent = `${data.total_feed} grams fed`;
            },
            error: function(xhr, status, error) {
                console.error('Error fetching feed amount:', error);
            }
        });
    }

    setInterval(fetchFeedAmount, 60000);
    fetchFeedAmount();

//     function fetchCalculatedDistance() {
//     $.ajax({
//         url: './user_dashboard_ajax/fetch_total_distance.php', // Path to your PHP script
//         method: 'GET',
//         dataType: 'json',
//         success: function(data) {
//             const distanceDisplay = document.querySelector('#distanceDisplay');
//             distanceDisplay.textContent = `Calculated Distance: ${data.calculated_value.toFixed(2)}`;
//         },
//         error: function(xhr, status, error) {
//             console.error('Error fetching calculated distance:', error);
//         }
//     });
// }

// // Fetch and update the calculated distance on page load and periodically
// setInterval(fetchCalculatedDistance, 60000); // Fetch every 60 seconds
// fetchCalculatedDistance();

</script>

</html>
<?php ob_end_flush(); ?>
