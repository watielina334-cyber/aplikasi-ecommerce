<?php
$baseURL = "http://localhost/Glad2Glow/public/";
require_once '../data/product_data.php';
include '../views/layout/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Product</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <?php foreach ($products as $p): ?>

        <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition">
            
            <!-- Gambar Produk -->
            <img 
                src="../public/images/<?= $p['image'] ?>" 
                class="w-48 h-48 object-cover rounded-lg mx-auto"
            >

            <!-- Nama Produk -->
            <h3 class="mt-3 font-semibold text-gray-800 text-sm line-clamp-2">
                <?= $p['name'] ?>
            </h3>

            <!-- Harga -->
            <p class="text-pink-600 font-bold mt-1 text-sm">
                Rp <?= number_format($p['price'], 0, ',', '.') ?>
            </p>

            <!-- Tombol -->
            <a href="<?= $baseURL ?>index.php?page=detail&slug=<?= $p['slug'] ?>" 
               class="mt-3 inline-block w-full text-center px-4 py-2 bg-pink-500 text-white rounded-lg hover:bg-pink-600 text-sm">
                Lihat Detail
            </a>
        
        </div>

        <?php endforeach; ?>
    </div>

</body>
</html>
