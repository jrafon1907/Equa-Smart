    <?php ob_start(); ?>
    <?php include "session_handler.php"; 
    
    if (!isLoggedIn()) {
        header("Location: ../login_page.php");
        exit();
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <title>Custom Menu Bar</title>
        <style>
            *, body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            }
            
        .custom-menu {
            width: 200px; /* Set the width to 200px by default */
            height: auto;
            overflow: hidden;
            background-color: mediumaquamarine;
            margin: 0;
            z-index: 1;
            display: flex;
            flex-direction: column;
            grid-area: 1 / 1 / -1 / 2;
        }

        /* Remove the hover effect */
        .custom-menu:hover {
            /* This rule is now removed */
        }

        .custom-menu ul {
            list-style-type: none;
            padding: 0;
            margin: 7px 0;
        }

        .custom-menu ul.logout {
            margin-bottom: 30%;
        }

        .custom-menu li {
            width: 100%;
            color: white;
        }

        .custom-menu li a {
            display: flex;
            align-items: center;
            color: whitesmoke;
            text-decoration: none;
            padding: 15px;
            background-color: mediumaquamarine;
        }

        .custom-menu li:hover a {
            background-color: mediumseagreen;
            color: white;
        }

        .icon {
            min-width: 10%;
            text-align: center;
            font-size: 1.5em;
        }

        .custom-menu .nav-text {
            display: flex; /* Always show the nav-text */
            margin-left: 15px;
            font-size: 1em;
        }

        #menuLogo {
            margin-top: 15px;
            align-self: center;
            width: 50%;
        }

        .logout button {
            background: none;
            border: none;
            color: white;
            font-size: 1.2em;
            cursor: pointer;
        }


            @media (max-width: 1010px) {
    
        .custom-menu {
            width: 60px;
            height: auto;
            overflow: hidden;
            background-color: mediumaquamarine;
            margin: 0;
            transition: width .05s linear;
            z-index: 1;
            display: flex;
            flex-direction: column;
            grid-area: 1 / 1 / -1 / 2;
        }

        .custom-menu:hover {
            display: flex;
            width: 200px;
            background: mediumaquamarine;
            overflow: visible;
            grid-area: 1 / 1 / -1 / 2;
        }

        .custom-menu ul {
            list-style-type: none;
            padding: 0;
            margin: 7px 0;
        }

        .custom-menu ul.logout {
            margin-bottom: 30%;
        }

        .custom-menu li {
            width: 100%;
            color: white;
        }

        .custom-menu li a {
            display: flex;
            align-items: center;
            color: whitesmoke;
            text-decoration: none;
            padding: 15px;
            background-color: mediumaquamarine;
        }

        .custom-menu li:hover a {
            background-color: mediumseagreen;
            color: white;
        }

        .icon {
            min-width: 10%;
            text-align: center;
            font-size: 1.5em;
        }

        .custom-menu .nav-text {
            display: none;
            font-size: 1.2em;
        }

        .custom-menu:hover .nav-text {
            display: flex;
            margin-left: 15px;
            font-size: 1em;
        }

        #menuLogo {
            margin-top: 15px;
            align-self: center;
            width: 50%;
        }

        .logout button {
            background: none;
            border: none;
            color: white;
            font-size: 1.2em;
            cursor: pointer;
        }

    }

        </style>
    </head>
    <div class="custom-menu">
        <img src="./images/equasmartlogo_croppedlogo.png" alt="EquaSmart Logo" id="menuLogo">
        <ul>
            <li>
                <a href="user_dashboard.php">
                    <span class="icon fa fa-home"></span>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <!-- <li>
                <a href="add_system.php">
                    <span class="icon fa fa-plus-circle"></span>
                    <span class="nav-text">Add a Machine</span>
                </a>
            </li> -->
            <li>
                <a href="feed_settings.php">
                    <span class="icon fa fa-fish"></span>
                    <span class="nav-text">Feed Settings</span>
                </a>
            </li>
            <li>
                <a href="water_settings.php">
                    <span class="icon fa fa-water"></span>
                    <span class="nav-text">Water Settings</span>
                </a>
            </li>
            <!-- <li>
                <a href="notification_settings.php">
                    <span class="icon fa fa-bell"></span>
                    <span class="nav-text">Notification Settings</span>
                </a>
            </li> -->
            <li>
                <a href="print_logs.php">
                    <span class="icon fa fa-scroll"></span>
                    <span class="nav-text">Print Logs</span>
                </a>
            </li>
            <li>
                <a href="machine_gallery.php">
                    <span class="icon fa fa-image"></span>
                    <span class="nav-text">Machine Gallery</span>
                </a>
            </li>
        </ul>
        <form action="user_menu.php" method="post">
            <ul class="logout">
                <li>
                    <a href="#">
                        <form action="user_menu.php" method="post">
                            <span class="icon fa fa-power-off"></span>
                            <button class="nav-text" name="logout">Logout</button>
                            <?php if (isset($_POST['logout'])) {
                                logoutUser();
                                header("Location: login_page.php");
                            } ?>
                    </a>
                </li>
            </ul>
        </form>
    </div>

    </html>
    <?php ob_end_flush(); ?>