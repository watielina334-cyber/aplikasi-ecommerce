<?php 
session_start();
require_once '../../config/database.php';

// Ambil input
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($email == '' || $password == '') {
    echo "<script>alert('Email & Password harus diisi'); window.history.back();</script>";
    exit;
}

// Query ambil user berdasarkan email
$q = $koneksi->query("SELECT * FROM users WHERE email='$email'");
$user = $q->fetch_assoc();

// kalau user ketemu
if ($user) {

    // cek password hash
    if (password_verify($password, $user['password'])) {
        $_SESSION['users'] = $user;
        header("Location: ../../index.php");
        exit;
    } else {
        echo "<script>alert('Password SALAH!'); window.history.back();</script>";
        exit;
    }

} else {
    echo "<script>alert('Email TIDAK ditemukan!'); window.history.back();</script>";
    exit;
}
