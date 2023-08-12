<?php
include 'pages/config.php';

if (!isset($_SESSION['user'])) {
  header("Location: pages/login.html");
  exit();
}else{

  header("Location: ");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- css -->
  <link rel="stylesheet" href="assets/css/main.css?v=1.5">
  <link rel="stylesheet" href="assets/css/gauge.css?v=1.5">
  <!--JS -->
  <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="assets/js/GaugeMeter.js?v=1.0"></script>

  <script>
    $(document).ready(function () {
      $(".GaugeMeter").gaugeMeter();
    });

    $("#GaugeMeter_1").gaugeMeter({ percent: 15 });
  </script>


  <link rel="icon" href="assets/img/logo.png" type="image/x-icon">

  <title>Smart Farm</title>


</head>

<body>
  <h1>Sensor Measurement</h1>
  <div class="GaugeMeter" id="GaugeMeter_1"></div>
</body>

</html>