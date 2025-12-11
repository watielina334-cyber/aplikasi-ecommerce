<?php
session_start();
if(!isset($_SESSION['name']) || $_SESSION['role'] !== 'admin'){
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Panel</title>
</head>
<body>
<h2>Selamat datang Admin, <?php echo $_SESSION['name']; ?>!</h2>
<p>Hanya admin yang bisa melihat halaman ini.</p>
<p><a href="logout.php">Logout</a></p>
</body>
</html>
