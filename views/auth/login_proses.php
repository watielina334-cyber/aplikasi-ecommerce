<?php
session_start();
include 'config/database.php'; // koneksi database

$username = $_POST['username'];
$password = $_POST['password'];

$query = $conn->prepare("SELECT * FROM users WHERE username = ?");
$query->bind_param("s", $username);
$query->execute();
$result = $query->get_result();

if ($result->num_rows === 1) {
    $users = $result->fetch_assoc();

    // Cocokkan password
    if (password_verify($password, $users['password'])) {

        // Simpan data ke session
        $_SESSION['users'] = [
            'id'       => $users['id'],
            'username' => $users['username'],
            'role'     => $users['role']
        ];

        // Redirect berdasarkan role
        if ($users['role'] === 'admin') {
            header("Location: ../views/user/home.php");
            exit;
        } else {
            header("Location: user/user_dashboard.php");
            exit;
        }

    } else {
        echo "<script>alert('Password salah!'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Username tidak ditemukan!'); window.history.back();</script>";
}
?>
