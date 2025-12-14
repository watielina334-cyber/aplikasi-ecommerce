<?php 
require '../config/database.php';

$id = $_GET['id'] ?? 0;

$stmt = $conn->prepare("SELECT * FROM products WHERE id= ?");
$stmt ->bind_param("i", $id);
$stmt->execute();

$products = $stmt-> get_result() -> fetch_assoc();

if(!$products) {
    echo "produk tidak ditemukan";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $products['name'] ?></title>
    <style>
        body {
           font-family: Arial, Helvetica, sans-serif;
           background: #f8f8f8;
           margin: 0;
           padding: 0; 
        }
        .container {
            max-width: 1100px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            display: flex;
            gap: 45px;
        }
        .product-image img{
            width: 430px;
            border-radius: 12px;
            object-fit: cover;
        }
        .product-info h1 {
            margin: 0;
            font-size: 25px;
        }
        .price {
            margin: 15px 0;
            font-size: 21px;
            color: 3ff4b8a;
            font-weight: bold;
        }
        .desc {
            line-height: 1.7;
            color: #444;
        }
        .btn {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 21px;
            background: #ff4b8a;
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
        }
        .btn:hover{
            background: #e63a73;
        }
        .btn-buy {
            flex: 1;
            padding: 14px;
            background: white;
            color: #ff5722;
            border: 2px solid #ff5722;
            border-radius: 5px;
            cursor: pointer;
            font-size: 15px;
        }
        .btn-buy:hover {
            background: #fff0eb;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- kiri : gambar -->
         <div class="product-image">
            <img src="../public/images/<?= $products['image'] ?>" alt="">
         </div>
        
         <!-- kanan : info -->
          <div class="product-info">
            <h1><?= $products['name'] ?></h1>
            <div class="price">
                Rp <?= number_format($products['price']) ?>
            </div>
            <div class="desc">
                <?= nl2br($products['description']) ?>
            </div>
            <div class="stok">
                Stok tersedia: <strong><?= $products['stock'] ?></strong>
            </div>

            <a href="index.php?page=products" class="btn">
                🔙Kembali ke Produk
            </a>
          </div>
    </div>

    <!-- form pembelian -->
    <form method= "POST" action="index.php?page=cart">
        <input type="hidden" name="id" value="<?= $producst['id'] ?>">
        <label>Jumlah:</label>
        <input type="number" name="qty" value="1" min="1" max="<?= $products['stock'] ?>" class="border p-2 w-20">
        <button type="submit" name="add_to_cart" style="display: block; margin-top: 15px; padding:12px; background:#ff4b8a; color:white; border-radius: 8px;">
            🛒Tambah ke Keranjang
        </button> 
        <button type="submit" name="buy_now" class="btn-buy">
            Beli Sekarang
        </button> 
    </form>
</body>
</html>