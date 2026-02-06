<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "accounting_it";
$port       = 3307; // ⭐ สำคัญมาก

$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("เชื่อมต่อฐานข้อมูลไม่สำเร็จ: " . $conn->connect_error);
}
?>
