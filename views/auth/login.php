
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
body { font-family: Arial; }
.form-box {
    width: 300px;
    padding: 20px;
    margin: 100px auto;
    border: 1px solid #ccc;
    border-radius: 5px;
}
input {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
}
button {
    width: 100%;
    padding: 10px;
    background: blue;
    color: white;
}
p {
    cursor: pointer;
}
</style>
</head>
<body>

<div class="form-box">
    <h3>Login</h3>
    <form action="../views/auth/login_proses.php" method="POST">
        <input type="email" name="email" placeholder="Email anda" required>
        <input type="name" name="name" placeholder="Nama anda" required>
        <input type="password" name="password" placeholder="Password" required>
        <button>Login</button>
    </form>
    <p><a href="../views/auth/register.php"></a>Belum Punya Akun? Register</p>
</div>

</body>
</html>
