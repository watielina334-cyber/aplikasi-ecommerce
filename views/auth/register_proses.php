<?php
session_start();
require_once "../../config/database.php";

// ambil data dari form
$name =trim($_POST['name']);
$email =trim($_POST['email']);
$password =trim($_POST['password']);
$password2 =trim($_POST['password2']);
$role = 'admin';

// validasi input kosong
if (empty($name) || empty($email) || empty($password) || empty($password2)){
    $_SESSION['ERROR'] = "password tidak sama!";
    header("location: " . $baseURL . "index.php?page=home.php");
    exit;
}
// VALIDASI PASSWORD SAMA
if ($password !== $password2) {
    $_SESSION['error'] = "Password tidak sama!";
    exit;
}
// cek apakah email sudah terdaftar
$stmt = $conn ->prepare("select id from users where email = ?");
$stmt -> bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($id, $name, $email);

if ($result -> num_rows > 0){
    $_SESSION['error'] = "Email sudah digunakan!";
    header("location: ../index.php?page=register");
    exit;
}
// hash password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// insert user baru
$stmt = $conn->prepare(
    "INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $password_hash, $role);

if ($stmt->execute()) {
    $_SESSION['success'] = "registrasi berhasil, silahkan login";
    header("location: ../../index.php?page=login");
    exit;
} else {
    $_SESSION['error'] = "registrasi gagal";
    header("location: ../../index.php?page=register");
    exit;
}
?>