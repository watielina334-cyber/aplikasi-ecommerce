<?php
session_start();
include '../../middleware/auth_admin.php';
include '../../data/product_data.php';

$id = $_GET['id'];

// cari produk berdasarkan id
$produk = $products[$id - 1];
?>
