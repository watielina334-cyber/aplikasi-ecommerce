<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <div class="register-container">
        <h2>Buat Akun Baru</h2>

        <?php if (isset($_SESSION['error'])): ?>
            <p style="color: red;"><?= $_SESSION['error']; ?></p>
            <?php unset ($_SESSION['error']); ?>
        <?php endif; ?>

        <?php if(isset($_SESSION['success'])): ?>
            <p style="color: green;"><?= $_SESSION['success']; ?></p>
            <?php unset($_SESSION['success']); ?>
        <?php endif; ?>
        
        <form action="<?= $baseURL ?>actions/register.php" method="POST">
            <input type="text" name="name" placeholder="Nama Lengkap" required>
            <input type="email" name="Email" placeholder="Email Anda" required>
            <input type="password" name="password" placeholder="Kata Sandi Anda" required>
            <input type="password" name="password2" placeholder="Ulangi Kata Sandi" required>
            <button type="submit"> Daftar Sekarang</button>
        </form>

        <p>Sudah Punya Akun
            <a href="<?= $baseURL ?>page=login"> Masuk di sini</a>
        </p>
    </div>

    <style>
        body {
            font-family: 'Poppins',sans-serif;
            background-color: #FADADD;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .register-container{
            background: white;
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 2px 10px rgb(0 0 0 /10);
            text-align: center;
            width: 320px;
        }
        .register-container h2{
            margin-bottom: 20px;
            color: #FADADD;
        }
        .register-container input{
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 1rem;
        }
        .register-container button{
            width: 100%;
            background-color: #E758B8;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 25px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }
        .register-container button:hover{
            background-color: #E758B8;
        }
        .register-container p{
            font-size: 0.9rem;
            color: #666;
            margin-top: 15px;
        }
        .register-container a{
            color: #E758B8;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</body>
</html>
