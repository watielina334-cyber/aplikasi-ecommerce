<!DOCTYPE html>
<html>
<head>
    <title><?= $products['name'] ?></title>
</head>
<body>

    <div style="max-width: 800px; margin: auto; padding: 20px;">

        <h1><?= $products['name'] ?></h1>

        <img src="public/images/<?= $products['image'] ?>"
             style="width: 100%; max-height: 350px; object-fit: cover; border-radius: 10px;">

        <h3 style="margin-top: 20px; color: #ff4b8a">
            Rp <?= number_format($products['price'], 0, ',', '.') ?>
        </h3>

        <p style="margin-top: 15px; line-height: 1.6; font-size: 16px;">
            <?= nl2br($products['description']) ?>
        </p>

        <a href="index.php?page=products" 
           style="display: inline-block; margin-top: 20px; padding: 10px 20px; background: #ff4b8a; color:white; border-radius: 6px;">
            Kembali
        </a>

    </div>

</body>
</html>
