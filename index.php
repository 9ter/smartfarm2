<?php

session_start();

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
  <title>Smart Farm</title>
</head>
<body>

<iframe src="https://snapshots.raintank.io/dashboard/snapshot/KhNtomPEu02bbGyKDsEM67hUfE7oWYWO?orgId=2" frameborder="0"></iframe>
  
</body>
</html>