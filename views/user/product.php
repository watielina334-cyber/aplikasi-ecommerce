<?php
$baseURL = "http://localhost/Glad2Glow/public/";
include '../views/layout/header.php';
require '../config/database.php';
$kategori_id = $_GET['kategori_id'] ?? '';

if ($kategori_id) {
    $stmt = $conn->prepare("SELECT * FROM products WHERE kategori_id = ? ");
    $stmt->bind_param("i", $kategori_id);
} else {
    $stmt = $conn->prepare(
        "SELECT * FROM products"
    );
}

$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Product</title>
</head>

<body class="bg-gray-100 p-6">

    <!-- CATEGORY BAR -->
    <div class="w-full bg-pink-50 border-t border-b">
        <div class="max-w-6xl mx-auto px-4">
            <ul class="flex gap-8 py-3 text-xl font-medium text-gray-700 overflow-x-autom justify-center">
                <li>
                    <a href="index.php?page=products&kategori_id=4"
                        class="hover:text-pink-500">
                        Facial Wash
                    </a>
                </li>
                <li>
                    <a href="index.php?page=products&kategori_id=2"
                        class="hover:text-pink-500">
                        Toner
                    </a>
                </li>
                <li>
                    <a href="index.php?page=products&kategori_id=1"
                        class="hover:text-pink-500">
                        Serum
                    </a>
                </li>
                <li>
                    <a href="index.php?page=products&kategori_id=3"
                        class="hover:text-pink-500">
                        Moisturizer
                    </a>
                </li>
                <li>
                    <a href="index.php?page=products&kategori_id=5"
                        class="hover:text-pink-500">
                        Sunscreen
                    </a>
                </li>
                <li>
                    <a href="index.php?page=products&kategori_id=6"
                        class="hover:text-pink-500">
                        Mask 
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <?php while ($p = $result -> fetch_assoc()): ?>

            <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition">

                <!-- Gambar Produk -->
                <img
                    src="../public/images/<?= $p['image'] ?>"
                    class="w-48 h-48 object-cover rounded-lg mx-auto">

                <!-- Nama Produk -->
                <h3 class="mt-3 font-semibold text-gray-800 text-sm line-clamp-2">
                    <?= $p['name'] ?>
                </h3>

                <!-- Harga -->
                <p class="text-pink-600 font-bold mt-1 text-sm">
                    Rp <?= number_format($p['price'], 0, ',', '.') ?>
                </p>

                <!-- Tombol -->
                <a href="index.php?page=detail&id=<?= $p['id'] ?>"
                    class="mt-3 inline-block w-full text-center px-4 py-2 bg-pink-500 text-white rounded-lg hover:bg-pink-600 text-sm">
                    Lihat Detail
                </a>

            </div>

        <?php endwhile; ?>
    </div>

</body>
</html>