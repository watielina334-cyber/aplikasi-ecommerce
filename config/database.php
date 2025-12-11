<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "skincare_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    echo("Koneksi gagal: " . $conn->connect_error);
}