<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/equasmartlogo_croppedlogo.png" type="image/svg+xml">
    <title>Notification Settings</title>
    <style>
        /* Every separate page must contain this as user_menu does not have a body */
        body {
            display: grid;
            grid-template-columns: 60px 1fr;
            margin: 0;
            height: 100vh;
        }

        /*  Important */
        /* Every element must be inside of this container menu */
        .container_menu {
            /* Places the container beside the menu */
            grid-area: 1 / 2 / -1 / -1;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 12% 1fr 1fr;
            background-color: azure;
            margin-top: 10px;
            margin-left: 10px;
        }

        h2 {
            font-family: verdana;
            text-align: center;
        }

        .container {
            grid-area: 1 / 1 / -1 / -1;
            width: 83%;
            height: 82%;
            margin: 50px auto;
            margin-left: 12%;
            padding: 20px;
            background-color: lemonchiffon;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
        }

        label {
            display: block;
            margin-bottom: 8px;
            text-align: center;
        }

        input[type="radio"] {
            margin-right: 10px;
            transform: translateY(4px);
            /* Adjust vertical alignment */
        }

        .checkbox-container {
            text-align: center;
        }

        .checkbox-container label {
            display: block;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            margin: 0 auto;
            display: block;
            width: 25%;

        }

        button:hover {
            background-color: #45a049;
        }

        .box {
            width: 70%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
            background-color: gray;
        }

        .boxx {
            text-align: center;
            margin-bottom: 10px;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button-container button {
            width: 20%;
            /* Adjust width to accommodate both buttons */
        }

        h4 {
            text-align: center;
        }

        /* Added CSS */
        .boxx div {
            display: flex;
            align-items: center;
        }

        #pageTitle {
            grid-area: 1 / 1 / 1 / span 3;
            height: 10px;
            margin: 0px;
        }
    </style>
</head>

<body>
    <?php include "user_menu.php"; ?>
    <div class="container_menu">
        <h2 id="pageTitle">NOTIFICATION SETTINGS</h2>

        <div class="container">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="checkbox-container">
                    <label>Notification Settings<input type="checkbox" name="notification_settings_checkbox"></label>
                    <label>Auto Send<input type="checkbox" name="auto_send_checkbox"></label>
                </div>

                <h4>Notification Interval</h4>
                <div class="box">
                    <div class="boxx">
                        <div>
                            <input type="radio" name="notification" value="Feeder 1">
                            <label for="notification">15 Minutes</label>
                        </div>
                        <div>
                            <input type="radio" name="notification" value="Feeder 2">
                            <label for="notification">30 Minutes</label>
                        </div>
                        <div>
                            <input type="radio" name="notification" value="Water Tester 1">
                            <label for="notification">1 Hour</label>
                        </div>
                        <div>
                            <input type="radio" name="notification" value="Water Tester 2">
                            <label for="notification">6 Hours</label>
                        </div>
                        <div>
                            <input type="radio" name="notification" value="Water Tester 3">
                            <label for="notification">12 Hours</label>
                        </div>
                        <div>
                            <input type="radio" name="notification" value="Water Tester 4">
                            <label for="notification">24 Hours</label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>