<?php
require "../config/database.php";

$query = $koneksi -> query ("SELECT * FROM testimoni ORDER BY created_at DESC");

$footerTestimoni = $query ->fetch_all(MYSQLI_ASSOC);
?>

<div class="max-w-5xl mx-auto px-4 py-16">
    <h1 class="text-4xl font-semibold text-center text-pink-600 mb-10">
        Customer Testimonials
    </h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($footerTestimoni as $t): ?> -->
            <div class="bg-white p-5 shadow-lg rounded-xl">
                
                <div class="flex items-center gap-3 mb-4">
                    <img src="<?= $baseURL ?>public/images/<?= $t['user_photo'] ?>" 
                         class="w-12 h-12 rounded-full object-cover">
                    <div>
                        <p class="font-semibold"><?= $t['user_name'] ?></p>
                        <p class="text-yellow-500 text-sm">⭐ <?= $t['rating'] ?>/5</p>
                    </div>
                </div>

                <p class="text-gray-700"><?= $t['review'] ?></p>

                <p class="text-xs text-gray-400 mt-3">
                    <?= date("d M Y", strtotime($t['created_at'])) ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</div> 


