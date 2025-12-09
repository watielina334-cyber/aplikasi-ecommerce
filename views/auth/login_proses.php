<?php 
session_start();
include '../config/database.php';

$email = $_POST;
$password = $_POST;

// contoh query cek user
$q = $conn->query("SELECT * FROM users WHERE email='$email");
$user= $q->fetch_assoc();

if ($users && password_verify($password, $users['password'])) {
    $_SESSION['users'] = $user;
    header('location: '. $baseURL . 'index.php');
    exit;
} else {
    echo "email dan password anda salah🙏";
}
?>