<?php

include 'config.php';

if (isset($_POST['user']) && isset($_POST['password']) && isset($_POST['email'])) {
    // รับข้อมูลจากฟอร์มล็อกอิน
    $username = $_POST['user'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // ค้นหาผู้ใช้ในฐานข้อมูล
    $sql = "INSERT INTO `users`(`username`, `pass`, `email`) VALUES ('$username',' $password','$email')";


    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
        header("Location: login.html");
    } else {
        header("Location: register.html");
    }

}



?>