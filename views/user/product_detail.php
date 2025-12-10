<?php 
include 'data/product_data.php';
$id = $_GET['id'] ?? 0;

$product = null;

foreach ($product_data as $p) {
    if ($p['id'] == $id) {
        $product = $p;
        break;
    }
};

if ($product == null) {
    echo "<h2 style='text-alien: center; margin-top: 50px;'>produk tidak ditemukan </h2>";
    exit;
}
?>

<div class="max-w-4xl mx-auto p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        <!-- GAMBAR PRODUK -->
        <img src="<?= $product['img'] ?>" class="rounded-xl shadow-md">

        <!-- DETAIL PRODUK -->
        <div>
            <h2 class="text-3xl font-bold text-pink-600"><?= $product['nama'] ?></h2>

            <p class="text-xl mt-2 font-semibold">
                Rp <?= number_format($product['harga'], 0, ',', '.') ?>
            </p>

            <p class="mt-3 text-gray-600">
                Produk skincare Glad2Glow yang diformulasikan untuk memberikan kulit sehat, glowing, dan lembap.
            </p>

            <!-- VARIAN -->
            <label class="block mt-4 mb-1 text-gray-700 font-medium">Pilih Varian</label>
            <select class="w-full p-3 border rounded-lg">
                <?php foreach ($product['varian'] as $v): ?>
                    <option><?= $v ?></option>
                <?php endforeach; ?>
            </select>

            <!-- TOMBOL BELI -->
            <button class="mt-6 w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-lg shadow-lg">
                Tambah ke Keranjang
            </button>
        </div>

    </div>
</div>