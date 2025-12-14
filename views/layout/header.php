<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$baseURL= "/delina_beauty/aplikasi-ecommerce/public/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="w-full bg-white shadow-md py-4">
        <div class="max-w-6xl mx-auto flex items-center justify-between px-4">

            <!-- logo -->
            <a href="<?= $baseURL ?>index.php?page=home" class="text-pink-600 font-bold text-xl">Glad2Glow</a>

            <!-- menu navigasi -->
            <nav class="hidden md:flex items-center gap-6 text-gray-700">
                <a href="<?= $baseURL ?>index.php?page=home" class="hover:text-pink-500"> Home </a>
                <a href="<?= $baseURL ?>index.php?page=about" class="hover:text-pink-500"> About </a>
                <a href="<?= $baseURL ?>index.php?page=products" class="hover:text-pink-500"> Product </a>
                <a href="<?= $baseURL ?>index.php?page=contact" class="hover:text-pink-500"> Contact </a>


                <?php if(isset($_SESSION['user_id'])):?>
                    <!-- jika sudah login -->
                    <a href="../views/user/cart.php">🛒</a>
                    <a href="#">Logout</a>
                <?php else: ?>
                    <a href="../views/auth/login.php">Login</a>
                    <a href="../views/auth/register.php">Register</a>
                <?php endif ;?>
            </nav>
            

            <!-- icon kanan -->
            <div class="flex items-center gap-4"> 

                <!-- icon keranjang (muncul setelah login) -->
                <?php if (isset($_SESSION['user'])): ?>
                    <a href="<?= $baseURL ?>index.php?page=cart" class="text-gray-700 hover:text-pink-500">
                    <a href="<?= $baseURL ?>index.php?page=cart"><img src="../public/images/cart.png" alt="keranjang" class="w-8 h-8"></a>
                    </a> 
                <?php endif; ?>

                <!-- icon search -->
                <button id="searchIcon" class="text-gray-700 hover:text-pink-500">
                    <a href="<?= $baseURL ?>index.php?page=cart"><img src="../public/images/search.png" alt="search" class="w-8 h-8"></a>
                </button>
            </div>
        </div> 
    </header>
</body>
</html>