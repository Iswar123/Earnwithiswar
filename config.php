<?php
    $conn = mysqli_connect("192.168.1.100:3306", "root", "root", "Users");

    if (!$conn) {
        echo "<script>alert('Connection failed.');</script>";
    }
?>