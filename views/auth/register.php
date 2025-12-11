<?php
session_start();
require '../config/database.php';

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // hash password

    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);

    if($stmt->execute()){
        echo "<p>Register berhasil! <a href='views/auth/login.php'>Login disini</a></p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register</title>
<style>
body { font-family: Arial; background: #f2f2f2; }
form { background: #fff; padding: 20px; max-width: 400px; margin: 50px auto; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);}
input { width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #ccc; }
button { padding: 10px; width: 100%; background: #4CAF50; color: #fff; border: none; border-radius: 5px; cursor: pointer; }
button:hover { background: #45a049; }
</style>
</head>
<body>
<h2 style="text-align:center;">Register</h2>
<form method="POST" action="">
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="register">Register</button>
</form>
</body>
</html>
