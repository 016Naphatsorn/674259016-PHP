<?php

$host = "db";
$user = "admin";
$password = "1234";
$database = "titanic";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

echo "<h1>PHP + Docker Compose</h1>";
echo "<p>PHP ทำงานแล้ว!</p>";
echo "<p>เชื่อมต่อ MariaDB สำเร็จ!</p>";

$conn->close();
