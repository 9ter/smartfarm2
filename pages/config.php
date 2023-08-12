<?php

// กำหนดอายุเซสชันให้เป็น 1 ชั่วโมง
ini_set('session.gc_maxlifetime', 3600);

// เรียกใช้ฟังก์ชัน session_start() และเริ่มต้นเซสชัน
session_start();

$servername = "localhost";
$username = "thanankornm";
$password = "BrqHAmTC3w_ZRCut";
$dbname = "smartfarm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>