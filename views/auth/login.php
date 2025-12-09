<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="<?= $baseURL ?>page="" method="POST">
            <input type="text" name="email" placeholder="Username atau Email" required>
            <input type="password" name="password" placeholder="Kata Sandi" required>
            <button type="submit">Login</button>
        </form>

        <p>Belum Punya Akun?
            <a href="<?= $baseURL ?>views/auth/register_proses.php">Daftar Sekarang</a>
        </p>
    </div>
    <style>
        body{
            font-family: 'poppins', sans-serif;
            background-color: #FADADD;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: white;
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
            width: 320px;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #E75480;
        }
        .login-container input{
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 1rem;
        }
        .login-container button{
            width: 100%;
            background-color: #F7A8B8;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 25px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }
        .login-container button:hover{
            background-color: #E75480;
        }
        .login-container p{
            font-size: 0.9rem;
            color: #666;
            margin-top: 15px;
        }
        .login-container a{
            color: #E75480;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</body>
</html>