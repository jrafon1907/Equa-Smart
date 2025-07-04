<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/equasmartlogo_croppedlogo.png" type="image/svg+xml">
    <title>Add Machine</title>
    <style>
        /* Every separate page must contain this as user_menu does not have a body */
        body {
            display: grid;
            grid-template-columns: 60px 1fr;
            margin: 0;
            height: 100vh;
        }

        .container_menu {
            /* Places the container beside the menu */
            grid-area: 1 / 2 / -1 / -1;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 12% 1fr 1fr;
            background-color: azure;
            margin-top: 10px;
        }

        h2 {
            font-family: verdana;
            text-align: center;
        }

        .container {
            grid-area: 1 / 1 / -1 / -1;
            width: 76%;
            margin-left: 15%;
            margin-top: 3%;
            padding: 30px;
            background-color: lemonchiffon;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
        }

        label {
            display: block;
            margin-bottom: 8px;
            text-align: center;
        }

        input {
            width: 25%;
            padding: 8px;
            margin: 0 auto;
            /* Center the input horizontally */
            margin-bottom: 16px;
            box-sizing: border-box;
            display: block;
            /* Ensure the input takes full width */
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
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: gray;
        }

        .boxx {
            text-align: center;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            /* Align items with space between them */
        }

        .button-container button {
            width: 20%;
            /* Adjust width to accommodate both buttons */
        }

        #pageTitle {
            grid-area: 1 / 1 / 1 / span 3;
            height: 50px;
            margin: 0px;
        }

        @media (max-width: 1010px) {
            *, body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            }

            .container_menu {
                display: block; /* Stack items vertically */
                padding: 10px;
            }

            .container {
                width: 90%;
                margin-left: 5%;
            }

            input {
                width: 100%;
            }

            button {
                width: 100%;
            }

            .box {
                width: 90%;
            }

            .button-container {
                display: flex;
                flex-direction: column;
                margin-bottom: 20px;
            }

            .button-container button {
                width: 100%;
                margin-bottom: 10px;
                
            }

        }
    </style>
</head>

<body>
    <?php include "user_menu.php"; ?>

    <div class="container_menu">
    <h2 id="pageTitle">ADD A MACHINE</h2>
        <div class="container">
            <form action="#" method="post" enctype="multipart/form-data">
                <label for="full_name">Enter Machine ID</label>
                <input>
                <button type="submit">Submit</button>

                <div class="box">
                    <div style="text-align: center;">System Available:</div>
                    <br>

                    <div class="boxx">Feeder 1</div>
                    <div class="boxx">Feeder 2</div>
                    <div class="boxx">Water Tester 1</div>
                    <div class="boxx">Water Tester 2</div>
                </div>
            </form>

            <div class="button-container">
                <button onclick="resetWifi()">Reset WiFi Credentials</button>
                <button id="renameBtn">Rename Machine</button>
                <button id="removeBtn">Remove Machine</button>
            </div>
        </div>
    </div>
</body>

<script>
    function resetWifi() {
        const esp32Ip = "http://esp32feeder.local"; // Replace with your ESP32-CAM's IP address or hostname

        fetch(`${esp32Ip}/reset_wifi`)
            .then(response => response.text())
            .then(data => {
                console.log(data);
                alert(data); // Show the response from the ESP32-CAM module
            })
            .catch(error => console.error('Error:', error));
    }
</script>

</html>
