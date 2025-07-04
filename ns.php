<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notification Settings</title>
  <style>
    .notification-settings {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f9f9f9;
    }

    .notification-settings h2 {
      margin-bottom: 20px;
      text-align: center;
      font-size: 50px;
    }

    .notification-settings label {
      display: block;
      margin-bottom: 10px;
    }

    .notification-settings select {
      margin-bottom: 15px;
    }

    .notification-settings button {
      display: block;
      width: 100%;
      padding: 10px 20px;
      margin-bottom: 10px;
      background-color: #fdd673;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .notification-settings button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="notification-settings">
    <h2>Notification Settings</h2>
    <button id="toggle-send-notification">Send Notification</button>
    <button id="toggle-auto-send">Auto Send</button>
    <button id="save-settings">Notification Frequency</button>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const toggleSendNotificationButton = document.getElementById("toggle-send-notification");
      const toggleAutoSendButton = document.getElementById("toggle-auto-send");
      const saveSettingsButton = document.getElementById("save-settings");

      let sendNotification = false;
      let autoSend = false;

      toggleSendNotificationButton.addEventListener("click", function() {
        sendNotification = !sendNotification;
        console.log("Send Notifications:", sendNotification);
      });

      toggleAutoSendButton.addEventListener("click", function() {
        autoSend = !autoSend;
        console.log("Auto Send:", autoSend);
      });

      saveSettingsButton.addEventListener("click", function() {
        const notificationFrequency = document.getElementById("notification-frequency").value;
        console.log("Notification Frequency:", notificationFrequency);
        // Here you can perform actions like saving settings to the server or any other logic based on the selected settings
      });
    });
  </script>
</body>
</html>
