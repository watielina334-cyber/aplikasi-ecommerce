<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

        <?php foreach ($product as $p): ?>

        <div class="bg-white p-4 rounded-lg shadow">
            <img src="<?= $baseURL ?>public/images/<?= $p['gambar'] ?>" class="w-full h-48 object-cover rounded">

            <h3 class="mt-3 font-semibold text-gray-800"><?= $p['nama'] ?></h3>
            <p class="text-pink-600 font-bold">Rp <?= number_format($p['harga'],0,',','.') ?></p>

            <a href="<?= $baseURL ?>index.php?page=detail&id=<?= $p['id'] ?>" 
            class="mt-2 inline-block px-4 py-2 bg-pink-500 text-white rounded hover:bg-pink-600">
                Lihat Detail
            </a>
        </div>

        <?php endforeach; ?>

    </div>
</body>
</html>

