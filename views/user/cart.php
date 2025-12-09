<?php 

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// jika cart belum ada, buat array kosong
if (!isset ($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// jika user klik apus item
if (isset($_GET['remove'])) {
    $id = $_GET['remove'];
    unset($_SESSION['cart'][$id]);
    header("location: index.php?page=cart");
    exit;
}
$cart = $_SESSION['cart'];
?>

<div class="max-w-4xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Keranjang Belanja</h1>

    <?php if (empty($cart)): ?>
        <p class="text-gray-600">Keranjang kamu masih kosong.</p>
    <?php else: ?>
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-3 text-left">Produk</th>
                    <th class="p-3 text-left">Harga</th>
                    <th class="p-3 text-left">Jumlah</th>
                    <th class="p-3 text-left">Subtotal</th>
                    <th class="p-3 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $total = 0;
                foreach ($cart as $key => $item): 
                    $subtotal = $item['harga'] * $item['qty'];
                    $total += $subtotal;
                ?>
                    <tr class="border-b">
                        <td class="p-3"><?= $item['nama']; ?></td>
                        <td class="p-3">Rp <?= number_format($item['harga'], 0, ',', '.'); ?></td>
                        <td class="p-3"><?= $item['qty']; ?></td>
                        <td class="p-3">Rp <?= number_format($subtotal, 0, ',', '.'); ?></td>
                        <td class="p-3">
                            <a href="index.php?page=cart&remove=<?= $key ?>" 
                            class="text-red-500 hover:underline">
                                Hapus
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="text-right mt-6 text-xl font-bold">
            Total: Rp <?= number_format($total, 0, ',', '.'); ?>
        </div>
    <?php endif; ?>
</div>