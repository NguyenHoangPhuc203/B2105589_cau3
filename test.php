<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbname";
$conn = new PDO("sqlite:$dbname");
if (!$conn) {
    die("Connection failed: " . $conn->lastErrorMsg());
}
?>