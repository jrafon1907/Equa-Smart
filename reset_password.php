<?php ob_start(); ?>
<?php include 'logindbase.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            display:flex;
            justify-content:center;
            align-items:center;
            height:80%;
            margin: auto;
            margin-top: 10%;
            background-color: azure;
            flex-direction: column;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 20vw;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        button[type="submit"]:hover {
            background-color: forestgreen;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            background-color: darkseagreen;
            color: white;
            cursor: pointer;
        }

        .form-icon {
            margin-right: 8px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        #backButton {
            margin-top: 10px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: darkslategray;
            color: white;
            cursor: pointer;
        }

        #invalidToken {
            color: red;
            font-size: 1.2em;
            padding: 50px;
            background-color: whitesmoke;
            border-radius:10px;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET['token'])) {
        $token = $_GET['token'];

        // Check if the token exists in the database
        $sql = "SELECT * FROM users WHERE reset_token=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $token);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows == 1) {
            // Token is valid, show the reset password form
            echo '<form action="reset_password.php" method="post">
                  <input type="hidden" name="token" value="' . $token . '">
                  <label for="newPassword"><i class="fas fa-lock form-icon"></i>New Password</label>
                  <input type="password" name="newPassword" required>
                  <label for="confirmPassword"><i class="fas fa-lock form-icon"></i>Confirm Password</label>
                  <input type="password" name="confirmPassword" required>
                  <button id="submitPassword" type="submit" name="submitNewPassword"><i class="fas fa-paper-plane form-icon"></i>Reset Password</button>
              </form>';
        } else {
            echo '<div id="invalidToken">Invalid token!</div>';
        }
        $stmt->close();
    }

    if (isset($_POST['submitNewPassword']) && !empty($_POST['newPassword']) && $_POST['newPassword'] == $_POST['confirmPassword']) {
        $newPassword = $_POST['newPassword'];
        $token = $_POST['token'];

        // Hash the new password
        $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);

        // Update the user's password and clear the token
        $sql = "UPDATE users SET PasswordHash=?, reset_token=NULL WHERE reset_token=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $hashedPassword, $token);
        $stmt->execute();

        if ($stmt->affected_rows === 1) {
            echo '<script>
            if (confirm("Password reset successful. Click OK to return to login.")) {
                window.location.href = "login_page.php";
            } else {
                // User clicked Cancel
            }
            </script>';
        } else {
            echo '<script>alert("Error resetting your password.");</script>';
            $stmt->close();
            $conn->close();
        }
    }
    ?>
    <button onclick="window.history.back();" type="button" id="backButton">Go Back</button>

</body>

</html>
<?php ob_end_flush(); ?>