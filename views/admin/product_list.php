<?php
session_start();

// Cek apakah admin
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
    header('Location: ../../index.php?page=login');
    exit;
}

// load data produk
include '../../data/product_data.php';
?>

<?php include '../layout/header.php'; ?>

<h2>List Produk</h2>

<div style="display:flex; flex-wrap: wrap; gap: 20px;">
    <?php foreach ($products as $p): ?>
        <div style="border:1px solid #eee; padding:10px; width:200px; border-radius:10px;">
            <img src="/Glad2Glow/<?= $p['img'] ?>" width="100%" style="border-radius:10px;">
            <h4><?= $p['nama'] ?></h4>
            <p>Rp <?= number_format($p['harga'], 0, ',', '.') ?></p>
        </div>
    <?php endforeach; ?>
</div>
