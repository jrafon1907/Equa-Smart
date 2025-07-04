<?php
ob_start();
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'mail/Exception.php';
require 'mail/PHPMailer.php';
require 'mail/SMTP.php';

include "logindbase.php";
include "configCredentials.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  ob_clean(); // Clean (erase) the output buffer
  $response = ['errors' => [], 'success' => false];
  $errors = [];

  // Debug form data
  error_log("Form data received: " . print_r($_POST, true));

  // Validate First Name
  if (isset($_POST['firstName'])) {
    $firstName = test_input($_POST['firstName']);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
      $errors['firstNameErr'] = "Only letters and white space allowed";
      error_log("First Name Error: " . $errors['firstNameErr']);
    }
  }

  // Validate Last Name
  if (isset($_POST['lastName'])) {
    $lastName = test_input($_POST['lastName']);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $lastName)) {
      $errors['lastNameErr'] = "Only letters and white space allowed";
      error_log("Last Name Error: " . $errors['lastNameErr']);
    }
  }

  // Validation for Username
  if (empty($_POST["username"])) {
    $errors['nameErr'] = "Username is required";
    error_log("Name Error: " . $errors['nameErr']);
  } else {
    $name = test_input($_POST["username"]);
  }

  // Validation for Contact
  if (isset($_POST['contactNumber'])) {
    $contact = test_input($_POST['contactNumber']);
    $contact = preg_replace('/\s+/', '', $contact);
    if (!preg_match("/^\d{11}$/", $contact)) {
      $errors['contactErr'] = "Mobile number should be exactly 11 digits long.";
      error_log("Contact Number Error: " . $errors['contactErr']);
    }
  }

  // Validation for Email
  if (empty($_POST["email"])) {
    $errors['emailErr'] = "Email is required";
    error_log("Email Error: " . $errors['emailErr']);
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors['emailErr'] = "Invalid email format";
      error_log("Email Validation Error: " . $errors['emailErr']);
    } else {
      $allowedDomains = ['yahoo.com', 'gmail.com'];
      $emailParts = explode('@', $email);
      $domain = end($emailParts);
      if (!in_array($domain, $allowedDomains)) {
        $errors['emailErr'] = "Only Yahoo and Gmail email addresses are allowed";
        error_log("Email Domain Error: " . $errors['emailErr']);
      }
    }
  }

  // Validation for Password
  if (empty($_POST["password"])) {
    $errors['passwordErr'] = "Password is required";
    error_log("Password Error: " . $errors['passwordErr']);
  } else {
    $password = test_input($_POST["password"]);
    $hashed_password = password_hash($password, PASSWORD_BCRYPT); // Password hashing
  }

  // Validation for Terms and Conditions Checkbox
  if (!isset($_POST["terms_and_conditions"])) {
    $errors['termsErr'] = "You must agree to the terms and conditions.";
    error_log("Terms Error: " . $errors['termsErr']);
  }

  // Proceed only if there are no initial validation errors
  if (empty($errors)) {
    try {
      // Check if the email is already used in either table
      $emailCheck = $conn->prepare("
        SELECT 1 FROM users WHERE EmailAddress = ?
        UNION
        SELECT 1 FROM account_request WHERE email = ?
        LIMIT 1
      ");
      if (!$emailCheck) {
        error_log("Prepare failed for email check: (" . $conn->errno . ") " . $conn->error);
        die("Database Error: " . $conn->error);
      }
      $emailCheck->bind_param("ss", $email, $email);
      $emailCheck->execute();
      $result = $emailCheck->get_result();

      if ($result->num_rows > 0) {
        $errors['emailErr'] = "Email address already registered.";
      }

      // Check if the username is already used in either table
      $usernameCheck = $conn->prepare("
        SELECT 1 FROM users WHERE Username = ?
        UNION
        SELECT 1 FROM account_request WHERE username = ?
        LIMIT 1
      ");
      if (!$usernameCheck) {
        error_log("Prepare failed for username check: (" . $conn->errno . ") " . $conn->error);
        die("Database Error: " . $conn->error);
      }
      $usernameCheck->bind_param("ss", $name, $name);
      $usernameCheck->execute();
      $result = $usernameCheck->get_result();

      if ($result->num_rows > 0) {
        $errors['nameErr'] = "Username already exists.";
      }
    } catch (Exception $e) {
      error_log("Error during duplicate checks: " . $e->getMessage());
    }
  }

  // After checking for duplicates, check errors again before inserting
  if (empty($errors)) {
    try {
      // Insert user into the database
      $stmt = $conn->prepare("INSERT INTO account_request (username, email, user_password, firstname, lastname, contact_number, request_datetime) VALUES (?, ?, ?, ?, ?, ?, NOW())");
      if (!$stmt) {
        error_log("Prepare failed for user insertion: (" . $conn->errno . ") " . $conn->error);
        die("Database Error: " . $conn->error);
      }

      $stmt->bind_param("ssssss", $name, $email, $hashed_password, $firstName, $lastName, $contact);

      if ($stmt->execute()) {
        $response['success'] = true;
        $response['message'] = "Account request submitted successfully.";

        // Send email confirmation to the user using PHPMailer
        $mail = new PHPMailer(true);

        try {
          // Server settings
          $mail->SMTPDebug = 0; // Set to 2 for detailed debugging
          $mail->isSMTP();
          $mail->Host = SMTP_HOST;
          $mail->SMTPAuth = true;
          $mail->Username = SMTP_USERNAME;
          $mail->Password = SMTP_PASSWORD;
          $mail->SMTPSecure = SMTP_SECURE; // Use 'tls' or 'ssl'
          $mail->Port = SMTP_PORT;

          // Recipients
          $mail->setFrom('equasmartsupport@portfoliomjp.com', 'eQuaSmart Company');
          $mail->addAddress($email, $name);

          // Content
          $mail->isHTML(true);
          $mail->Subject = 'Registration Confirmation';
          $mail->Body = "Thank you for registering with us, $name! Your registration is successful.";

          $mail->send();

          // Correct way to output JavaScript
          // echo "<script type='text/javascript'>
          //         alert('An account has been requested successfully! Check your email for confirmation.');
          //         window.location.href = 'index.php';
          //       </script>";
        } catch (Exception $e) {
          error_log("Mailer Error: " . $mail->ErrorInfo);
          echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
      } else {
        throw new Exception("Error inserting into the database: " . $stmt->error);
      }
    } catch (Exception $e) {
      // Handle duplicate entry error
      if ($conn->errno == 1062) { // Error code 1062 is for duplicate entry
        if (strpos($conn->error, 'username') !== false) {
          $errors['nameErr'] = "Username already exists.";
        }
        if (strpos($conn->error, 'email') !== false) {
          $errors['emailErr'] = "Email address already registered.";
        }
      } else {
        error_log("Database Error: " . $e->getMessage());
      }
    }
  }

  $response['errors'] = $errors;
  echo json_encode($response);
  exit;
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Form</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #f8f8f8;
    }

    .container {
      display: flex;
      width: 90%;
      max-width: 900px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.9);
      overflow: hidden;
      border-radius: 10px;
    }

    .left {
      flex: 1;
      /* background: url('/path/to/your/image.jpg') no-repeat center center/cover; */
      position: relative;
    }

    .left::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('images/signup.jpg') no-repeat center center/cover;

    }

    .right {
      flex: 1;
      background: white;
      padding: 30px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      overflow-y: auto;
    }

    .right h2 {
      margin-bottom: 15px;
      font-size: 24px;
      color: #333;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      font-size: 14px;
      margin-bottom: 5px;
      color: #666;
    }

    .form-group input {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
    }

    .form-group input::placeholder {
      color: #aaa;
    }

    .form-group input[type="checkbox"] {
      width: auto;
      margin-right: 8px;
    }

    .form-group a {
      color: #007bff;
      text-decoration: none;
      font-size: 14px;
    }

    .form-group a:hover {
      text-decoration: underline;
    }

    .form-action {
      text-align: center;
      margin-top: 15px;
    }

    .form-action button {
      padding: 10px 20px;
      background: #28a745;
      border: none;
      color: white;
      font-size: 14px;
      border-radius: 4px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .form-action button:hover {
      background: #218838;
    }

    .login-link {
      margin-top: 15px;
      text-align: center;
      font-size: 14px;
      color: #666;
    }

    .login-link a {
      color: #28a745;
      text-decoration: none;
    }

    .login-link a:hover {
      text-decoration: underline;
    }

    /* Modal Styles */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0, 0, 0);
      background-color: rgba(0, 0, 0, 0.1);
      padding-top: 30px;
    }

    .modal-content {
      background-color: #fefefe;
      margin: 5% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 100%;
      max-width: 600px;
      border-radius: 20px;
      max-height: 80%;
      overflow-y: auto;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    .error {
      color: red;
      font-size: 0.9em;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="left"></div>
    <div class="right">
      <h2>Sign Up</h2>
      <form id="signupForm" action="signup.php" method="post">
        <div class="form-group">
          <label for="firstName">First Name</label>
          <input type="text" name="firstName" placeholder="Enter your First Name" required>
          <div id="firstNameErr" class="error"></div>
        </div>
        <div class="form-group">
          <label for="lastName">Last Name</label>
          <input type="text" name="lastName" placeholder="Enter your Last Name" required>
          <div id="lastNameErr" class="error"></div>
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" placeholder="Enter your Username" required>
          <div id="nameErr" class="error"></div>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" placeholder="Enter your email" required>
          <div id="emailErr" class="error"></div>
        </div>
        <div class="form-group">
          <label for="contactNumber">Contact Number</label>
          <input type="tel" name="contactNumber" placeholder="Enter your contact number" required pattern="\d{11}">
          <div id="contactErr" class="error"></div>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <div id="passwordErr" class="error"></div>
        </div>
        <div class="form-group">
          <input type="checkbox" name="terms_and_conditions" id="terms_and_conditions" required>
          <label for="terms_and_conditions">I agree to the <a href="javascript:void(0);" id="showMoreLink">Terms and Conditions (show more)</a></label>
          <div id="termsErr" class="error"></div>
        </div>
        <div class="form-action">
          <button type="button" onclick="submitForm()">Submit</button>
        </div>
      </form>
      <div class="login-link">
        <p>Already have an account? <a href="login_page.php">Sign in</a></p>
      </div>
    </div>
  </div>

  <!-- The Modal -->
  <div id="termsModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h3>Terms and Conditions</h3>
      <p><strong>Introduction</strong></p>
      <p>Welcome to Equa Smart Company. These Terms and Conditions ("Terms") govern your use of our website, products, and services related to aquaponics (collectively referred to as "Services"). By accessing or using our Services, you agree to be bound by these Terms. If you do not agree with these Terms, please do not use our Services.</p>
      <p><strong>Definitions</strong></p>
      <p>Aquaponics: A system that combines aquaculture (raising fish) and hydroponics (growing plants without soil) in a symbiotic environment.
        User: Any person or entity using our Services.
        Products: Any items sold by the Company, including but not limited to aquaponics systems, components, and related materials.
        Website: Our online platform located at https://equasmart.portfoliomjp.com.
        Eligibility
        To use our Services, you must be at least 18 years old and have the legal capacity to enter into these Terms. By using our Services, you represent and warrant that you meet these requirements.</p>
      <p><strong>Use of Services</strong></p>
      <p>Account Registration: You may be required to create an account to access certain features of our Services. You are responsible for maintaining the confidentiality of your account information and for all activities that occur under your account.
        Prohibited Conduct: You agree not to use our Services for any unlawful purpose or in a manner that could damage, disable, or impair our Services. Prohibited conduct includes, but is not limited to:
        Compliance with Laws: You agree to comply with all applicable laws and regulations when using our Services.</p>
      <p><strong>Limitation of Liability</strong></p>
      <p>To the maximum extent permitted by law, the Company shall not be liable for any indirect, incidental, special, or consequential damages arising out of or in connection with your use of our Services. Our total liability to you for any damages shall not exceed the amount you paid, if any, for the use of our Services.</p>
      <p><strong>Indemnification</strong></p>
      <p>You agree to indemnify, defend, and hold harmless the Company, its affiliates, and their respective officers, directors, employees, and agents from and against any claims, liabilities, damages, losses, and expenses, including reasonable attorneys' fees, arising out of or in any way connected with your access to or use of our Services.</p>
      <p><strong>Changes to Terms</strong></p>
      <p>We reserve the right to modify these Terms at any time. Any changes will be effective immediately upon posting on our website. Your continued use of our Services after any changes constitute your acceptance of the new Terms.</p>
      <p><strong>Contact Us</strong></p>
      <p>If you have any questions about these Terms, please contact us at email/hotline.</p>
    </div>
  </div>

  <script>
    // Get the modal
    var modal = document.getElementById("termsModal");

    // Get the button that opens the modal
    var btn = document.getElementById("showMoreLink");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

    function submitForm() {
      var formData = new FormData(document.getElementById('signupForm'));

      fetch('signup.php', {
          method: 'POST',
          body: formData
        })
        .then(response => response.text()) // Use .text() to log raw response
        .then(text => {
          console.log('Raw Response:', text); // Inspect the raw response
          const data = JSON.parse(text); // Manually parse JSON

          // Handle your data as before
          document.querySelectorAll('.error').forEach(el => el.textContent = '');

          if (data.success) {
            // alert(data.message);
            alert('An account has been requested successfully! Check your email for confirmation. You will be redirected to the login page.');
            window.location.href = 'login_page.php';
          } else {
            for (const key in data.errors) {
              if (data.errors.hasOwnProperty(key)) {
                document.getElementById(key).textContent = data.errors[key];
              }
            }
          }
        })
        .catch(error => console.error('Error:', error));

    }
  </script>
</body>

</html>