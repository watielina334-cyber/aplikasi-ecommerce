<?php 
session_start();
require '../../config/database.php';

$email = trim($_POST['email']);
$name = trim($_POST['name']);
$password = trim($_POST['password']);

$query = $conn->prepare("SELECT * FROM users WHERE email = ?");
$query->bind_param("s", $email);
$query->execute();
$result = $query->get_result();

if ($result->num_rows === 1) {
    $users = $result->fetch_assoc();

   if (password_verify($password, $users['password'])) {

    $_SESSION['users'] = [
        'id'    => $users['id'],
        'email' => $users['email'],
        'role'  => $users['role']
    ];

    if ($users['role'] === 'admin') {
        header("Location: ../../index.php?page=dashboard");
    } else {
        header("Location: ../../index.php?page=home");
    }
    exit;

} else {
    echo "<script>alert('Password salah');history.back();</script>";
} 
} else {
    echo"akun anada tidak ditemukan";
}
?>