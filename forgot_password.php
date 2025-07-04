<?php ob_start(); ?>
<?php
include 'logindbase.php';
include 'configCredentials.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'mail/Exception.php';
require 'mail/PHPMailer.php';
require 'mail/SMTP.php';

if (isset($_POST['resetSubmit'])) {
    $email = $_POST['email'];
    // Check if the email exists in the database
    $sql = "SELECT EmailAddress FROM users WHERE EmailAddress = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Email exists, proceed with token generation
        $token = bin2hex(random_bytes(32));  // Generate a secure random token
        $sql = "UPDATE users SET reset_token= ? WHERE EmailAddress = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $token, $email);
        $stmt->execute();
        $stmt->close();

        // Setup and send the email
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = 0; // Disable verbose debug output
            $mail->isSMTP(); // Send using SMTP
            $mail->Host       = SMTP_HOST; // Set the SMTP server to send through
            $mail->SMTPAuth   = true; // Enable SMTP authentication
            $mail->Username   = SMTP_USERNAME;
            $mail->Password   = SMTP_PASSWORD;
            $mail->SMTPSecure = SMTP_SECURE; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port       = SMTP_PORT; // TCP port to connect to

            $mail->setFrom('equasmartsupport@portfoliomjp.com', 'eQuaSmart Company');
            $mail->addAddress($email);

            $mail->isHTML(true);  // Set email format to HTML
            $mail->Subject = 'Reset Password';
            $resetLink = "equasmart.local/reset_password.php?token=" . $token;
            $mail->Body = 'Please click on the following link to reset your password: <a href="' . $resetLink . '">Reset Password</a>';

            $mail->send();
            echo '<script>
            if (confirm("Password reset instructions have been sent to your email. Click OK to continue.")) {
                window.location.href = "login_page.php";
            } else {
                // User clicked Cancel
            }
            </script>';
        } catch (Exception $e) {
            echo '<script>alert("Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '");</script>';
        }
    } else {
        echo '<script>alert("No account found with that email address.");</script>';
    }
    $conn->close();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
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

        h2 {
            color: burlywood;
        }

        label {
            margin-bottom: 5px;
        }

        .form-icon {
            margin-right: 8px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button:hover {
            background-color: forestgreen;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            background-color: darkseagreen;
            color: white;
            cursor: pointer;
        }

        #backButton {
            margin-top: 10px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: darkslategray;
            color: white;
            cursor: pointer;
            width: 10%;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 50vw;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #backButton {
            margin-top: 10px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: darkslategray;
            color: white;
            cursor: pointer;
            width: 40%;
        }

        @media (max-width: 1010px) {
            form {
                display: flex;
                flex-direction: column;
                width: 50vw;
                padding: 20px;
                background-color: #f4f4f4;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            #backButton {
                margin-top: 10px;
                padding: 10px;
                border: none;
                border-radius: 5px;
                background-color: darkslategray;
                color: white;
                cursor: pointer;
                width: 40%;
            }
        }
    </style>
</head>

<body>
    <h2>Forgot Password</h2>
    <form action="forgot_password.php" method="post">
        <label for="email"><i class="fas fa-envelope form-icon"></i>Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit" value="Reset Password" name="resetSubmit">Reset Password</button>
    </form>
</body>
<button onclick="window.history.back();" type="button" id="backButton">Go Back</button>

</html>
<?php ob_end_flush(); ?>