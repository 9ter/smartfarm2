<?php
include 'pages/config.php';

if (!isset($_SESSION['user'])) {
  header("Location: pages/login.html");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/main.css?v=1.5">

  <link rel="icon" href="assets/img/logo.png" type="image/x-icon">

  <title>Smart Farm</title>
</head>

<body>
  <h1>Sensor Measurement</h1>
  <p>Current Temperature: <span id="temperatureValue">--</span> °C</p>
  <button id="measureButton">Measure Temperature</button>

  <script>
    const measureButton = document.getElementById('measureButton');
    const temperatureValue = document.getElementById('temperatureValue');

    measureButton.addEventListener('click', () => {
      const measuredTemperature = measureTemperature(); // Replace with actual measurement function
      temperatureValue.textContent = measuredTemperature.toFixed(2); // Display the measurement
    });

    function measureTemperature() {
      // Replace this with your actual measurement logic
      // For now, let's simulate a random temperature between 20 and 30 degrees Celsius
      const randomTemperature = Math.random() * 10 + 20;
      return randomTemperature;
    }
  </script>
</body>

</html>