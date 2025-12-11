<?php 

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$baseURL = "http://localhost/Glad2Glow/public/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glad2Glow</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>

    <!-- ================= HEADER SECTION (NAVBAR + WALLPAPER) ================= -->
<!-- Kamu bisa ganti URL wallpaper di bagian style="background-image" -->

<header class="fixed inset-x-0 top-0 z-50 bg-white shadow">
  <!-- NAVBAR -->
  <nav class="flex items-center justify-between h-16 px-4 lg:px-10">

    <!-- ========== LOGO WEBSITE ========== -->
    <a href="#" class="flex items-center">
      <img src="https://glad2glow.com/cdn/shop/files/logo.png?v=1745724802&width=240" alt="Logo" class="h-8 w-auto">
    </a>

    <!-- ========== NAVBAR MENU (LARGE SCREEN) ========== -->
    <div class="hidden lg:flex lg:space-x-20">
      <a href="<?= $baseURL ?>index.php?page=home" class="text-gray-900 hover:text-pink-500 font-medium">Home</a>
      <a href="<?= $baseURL ?>index.php?page=about" class="text-gray-900 hover:text-pink-500 font-medium">About</a>
      <a href="<?= $baseURL ?>index.php?page=product" class="text-gray-900 hover:text-pink-500 font-medium">Product</a>
      <a href="<?= $baseURL ?>index.php?page=contact" class="text-gray-900 hover:text-pink-500 font-medium">Contact</a>
    </div>

    <!-- ========== ICON SEBELAH KANAN (LARGE SCREEN) ========== -->
    <div class="hidden lg:flex items-center space-x-4 -mr-4">
      <?php if (isset($_SESSION['user'])): ?>
        <img src="../public/images/cart.png" class="w-6" />
      <?php endif; ?>

      <a href="#"><img src="../public/images/search.png" id="searchToggle" class="w-6 h-6 cursor-pointer"></a>

      <a href="<?= $baseURL ?>index.php?page=login" class="text-sm font-semibold text-gray-900 hover:text-pink-500">Log in</a>
    </div>

    <!-- ========== BUTTON MOBILE (HAMBURGER) ========== -->
    <button id="mobileMenuOpen" class="lg:hidden p-2 text-gray-700">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6">
        <path d="M3 6h18M3 12h18M3 18h18" stroke-linecap="round" />
      </svg>
    </button>
  </nav>
</header>

<!-- ========== MOBILE MENU (MUNCUL DI LAYAR KECIL) ========== -->
<div id="mobileMenu" class="fixed inset-0 z-40 bg-white hidden p-6 space-y-6">
  <button id="mobileMenuClose" class="p-2 text-gray-700">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6">
      <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" />
    </svg>
  </button>

  <div class="space-y-4">
    <a href="<?= $baseURL ?>index.php?page=home" class="block text-lg font-medium">Home</a>
    <a href="<?= $baseURL ?>index.php?page=about" class="block text-lg font-medium">About</a>
    <a href="<?= $baseURL ?>index.php?page=product" class="block text-lg font-medium">Product</a>
    <a href="<?= $baseURL ?>index.php?page=contact" class="block text-lg font-medium">Contact</a>
  </div>

  <div class="pt-4 border-t">
    <a href="<?= $baseURL ?>index.php?page=login" class="block text-lg font-semibold">Log in</a>
  </div>
</div>

<!-- ========== HEADER WALLPAPER (GANTI GAMBAR DI BAGIAN URL) ========== -->
<div class="mt-10 h-[400px] md:h-[400px] lg:h-[500px] bg-cover bg-center flex items-center justify-center"
  style="background-image: url('../public/images/foto_header.jpg');">

  <!-- TEXT DALAM HEADER (BISA DI EDIT) -->
  <div class="text-center text-white drop-shadow-xl">
    <h1 class="text-3xl md:text-5xl font-bold">Glow Better with Glad2Glow</h1>
    <p class="mt-4 text-lg md:text-xl">Wujudkan Kulit Cerah Impianmu</p>

    <div class="mt-8">
      <a href="<?= $baseURL ?>index.php?page=product" class="px-6 py-3 bg-white text-gray-900 rounded-full font-semibold shadow">Temukan Sekarang →</a>
    </div>
  </div>
</div>

<!-- ========== SCRIPT UNTUK MOBILE MENU ========== -->
<script>
  const mobileOpen = document.getElementById('mobileMenuOpen');
  const mobileClose = document.getElementById('mobileMenuClose');
  const mobileMenu = document.getElementById('mobileMenu');

  mobileOpen.addEventListener('click', () => mobileMenu.classList.remove('hidden'));
  mobileClose.addEventListener('click', () => mobileMenu.classList.add('hidden'));
</script>

        <!-- LIST BEST PRODUCT -->
        <div class="mt-20">
            <h1 class="text-5xl font-light text-pink-400 tracking-wide drop-shadow-sm">🌸 Best Product 🌸</h1>
            <div class="bg-white">
            <div class="mx-auto max-w-2xl px-4 py-10 sm:px-6 sm:py-20 lg:max-w-7xl lg:px-8">
            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                <a href="#" class="group">
                    <img src= "../public/images/produk5.jfif" class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8" />
                    <h3 class="mt-4 text-sm text-gray-700">Glad2Glow Pomegranate 5% Niacinamide Brightening Moisturizer </h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">Rp 32.000</p>
                </a>
                <a href="#" class="group">
                    <img src="../public/images/produk7.jfif" alt=" " class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8" />
                    <h3 class="mt-4 text-sm text-gray-700">Glad2Glow Blueberry Ceramide Low pH Gel Cleanser</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">Rp 39.000</p>
                </a>
                <a href="#" class="group">
                    <img src="../public/images/amino-acids.jpg" alt=" " class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8" />
                    <h3 class="mt-4 text-sm text-gray-700">Glad2Glow Milk Amino Acids Gentle Cleanser 80g</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">Rp 40.120</p>
                </a>
                <a href="#" class="group">
                    <img src="../public/images/produk6.jfif" alt=" " class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8" />
                    <h3 class="mt-4 text-sm text-gray-700">Glad2Glow Double Briht Day Cream Moisturizer Cream Pemutih Wajah</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">Rp 60.560</p>
                </a>
                </a>
            </div>
            </div>
            </div>
        </div>
    <hr>

    <!-- komponen daily routine skincare -->
    <style>
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
        <!-- komponen utamanya -->
    <section class="max-w-4xl mx-auto px-4 py-8">
    
        <h2 class="text-center text-3xl font-bold text-pink-600 mb-8">
            Glad2Glow Daily Routine
        </h2>

        <div class="grid md:grid-cols-2 gap-6">

            <!-- Morning Routine -->
            <div class="bg-pink-50 p-6 rounded-2xl shadow-md border border-pink-200 animate-fadeIn">
                <h3 class="text-xl font-semibold text-pink-700 mb-4 flex items-center gap-2">
                    🌅 Morning Routine
                </h3>

                <ul class="space-y-3 text-gray-700 text-sm">
                    <li>✨ <b>Gentle Cleanser</b> — membersihkan minyak setelah tidur</li>
                    <li>🌸 <b>Hydrating Toner</b> — melembapkan kulit</li>
                    <li>💗 <b>Glow Serum</b> — mencerahkan wajah</li>
                    <li>🧴 <b>Moisturizer</b> — menjaga hidrasi</li>
                    <li>☀️ <b>Sunscreen</b> — wajib untuk proteksi UV</li>
                </ul>
            </div>
            <!-- Night Routine -->
            <div class="bg-pink-50 p-6 rounded-2xl shadow-md border border-pink-200 animate-fadeIn animation-delay-200">
                <h3 class="text-xl font-semibold text-pink-700 mb-4 flex items-center gap-2">
                    🌙 Night Routine
                </h3>
                <ul class="space-y-3 text-gray-700 text-sm">
                    <li>🧼 <b>Cleansing Oil</b> — hapus makeup & sunscreen</li>
                    <li>✨ <b>Facial Cleanser</b> — cuci muka sampai bersih</li>
                    <li>🍃 <b>Exfoliating Toner</b> (2–3x/minggu)</li>
                    <li>💗 <b>Repair Serum</b> — memperbaiki skin barrier</li>
                    <li>🧴 <b>Night Moisturizer</b> — mengunci kelembapan</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- FOOTER DELINA BEAUTY -->
    <footer class="bg-pink-100 text-gray-700 mt-12 py-10 px-6 border-t border-pink-200">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Brand -->
        <div>
            <h2 class="text-2xl font-bold text-pink-600">Delina Beauty</h2>
            <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                Temukan skincare terbaik untuk kulit sehat, glowing, dan percaya diri ✨
            </p>
        </div>

        <!-- Quick Links -->
        <div>
            <h3 class="text-lg font-semibold mb-3 text-gray-800">Menu</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="#" class="hover:text-pink-500">Home</a></li>
                <li><a href="#" class="hover:text-pink-500">Produk</a></li>
                <li><a href="#" class="hover:text-pink-500">Tentang Kami</a></li>
                <li><a href="#" class="hover:text-pink-500">Kontak</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div>
            <h3 class="text-lg font-semibold mb-3 text-gray-800">Kontak</h3>
            <ul class="text-sm space-y-2">
                <li>Email: <a href="mailto:delinabeauty@gmail.com" class="hover:text-pink-500">delinabeauty@gmail.com</a></li>
                <li>WhatsApp: <a href="#" class="hover:text-pink-500">0812-3456-7890</a></li>
                <li>Instagram: <a href="#" class="hover:text-pink-500">@delinabeauty.id</a></li>
            </ul>
        </div>

    </div>

    <!-- Bottom -->
    <div class="border-t border-pink-200 mt-10 pt-5 text-center text-sm text-gray-600">
        © 2025 Delina Beauty — Glow with Confidence ✨
    </div>
</footer>



                <!-- Grid Links -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-10 w-full">

                    <!-- Solutions -->
                    <div>
                        <h3 class="text-black font-semibold mb-2">Product Categories</h3>
                        <ul class="space-y-2 text-black">
                            <li><a href="#" class="hover:text-indigo-600">Face Wash</a></li>
                            <li><a href="#" class="hover:text-indigo-600">Toner</a></li>
                            <li><a href="#" class="hover:text-indigo-600">Serum</a></li>
                            <li><a href="#" class="hover:text-indigo-600">Moisturizer</a></li>
                            <li><a href="#" class="hover:text-indigo-600">Sunscreen</a></li>
                        </ul>
                    </div>

                    <!-- Support -->
                    <div>
                        <h3 class="text-black font-semibold mb-4">Support</h3>
                        <ul class="space-y-2 text-black">
                            <li><a href="#" class="hover:text-indigo-600">FAQ</a></li>
                            <li><a href="#" class="hover:text-indigo-600">Check Order</a></li>
                            <li><a href="<?= $baseURL ?>index.php?page=testimoni" class="hover:text-indigo-600">Testimoni</a></li>
                        </ul>
                    </div>

                    <!-- Company -->
                    <div>
                        <h3 class="text-black font-semibold mb-4">Company</h3>
                        <ul class="space-y-2 text-black">
                            <li><a href="<?= $baseURL ?>index.php?page=about" class="hover:text-indigo-600">About</a></li>
                            <li><a href="#" class="hover:text-indigo-600">Carrier</a></li>
                        </ul>
                    </div>

                    <!-- Legal -->
                    <div>
                        <h3 class="text-black font-semibold mb-4">Legal</h3>
                        <ul class="space-y-2 text-black">
                            <li><a href="#" class="hover:text-indigo-600">Terms of service</a></li>
                            <li><a href="#" class="hover:text-indigo-600">Privacy policy</a></li>
                            <li><a href="#" class="hover:text-indigo-600">License</a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="mt-10 pt-12 text-center text-black text-sm">
                © 2025 Your Company. All rights reserved.
            </div>
        </div>
    </footer>


    <!-- SCRIPT DARI JAVASCRIPT -->

    <script>
        const toggle = document.getElementById('searchToggle');
        const box = document.getElementById('searchBox');

        toggle.addEventListener('click', () => {
            box.classlist.toggle('hidden');
        });
    </script>
</body>
</html>