<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Glad2Glow</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body>
    
    <?php include '../views/layout/header.php'; ?>

  <style>
    /* Custom utilities for pastel palette and small tweaks */
    :root{
      --pink: #FFC8DD;
      --mint: #CDECE5;
      --beige: #FFF6EE;
      --soft-gray: #F6F7FB;
    }
  </style>
</head>
<body class="antialiased text-gray-800 bg-[color:var(--soft-gray)]">
  <!-- Container -->
  <main class="min-h-screen flex flex-col items-center">

    <!-- HERO -->
    <section class="w-full bg-white shadow-sm">
      <div class="max-w-6xl mx-auto px-6 md:px-8 lg:px-12 py-12 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- Left: Heading -->
        <div class="space-y-6">
          <p class="inline-block px-3 py-1 rounded-full text-sm font-medium" style="background:linear-gradient(90deg, var(--mint), #E7FFF9)">New • Clean & Fun</p>
          <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold leading-tight">Glad2Glow — Simple skincare, joyful results</h1>
          <p class="text-gray-600 max-w-xl">Perawatan kulit yang minimalis namun playful. Formulasi lembut, efektif, dan mudah dimasukkan ke dalam rutinitas harian — agar kamu tetap glowing tanpa ribet.</p>

          <div class="flex items-center gap-4">
            <a href="../views/user/product.php" class="inline-flex items-center gap-2 px-5 py-3 rounded-2xl font-semibold shadow-sm" style="background:linear-gradient(90deg,var(--pink),#FFDCE6);">Shop Now</a>
            <a href="#community" class="text-sm font-medium text-gray-600 hover:underline">Join #Glad2GlowFam</a>
          </div>

          <!-- small badges -->
          <div class="flex gap-3 mt-4">
            <span class="px-3 py-1 rounded-full text-xs bg-white shadow">Dermatology-friendly</span>
            <span class="px-3 py-1 rounded-full text-xs bg-white shadow">Non-comedogenic</span>
            <span class="px-3 py-1 rounded-full text-xs bg-white shadow">No Parabens</span>
          </div>
        </div>

        <!-- Right: Visual -->
        <div class="flex justify-center md:justify-end">
          <div class="relative w-80 h-80 sm:w-96 sm:h-96 rounded-3xl overflow-hidden shadow-lg bg-[color:var(--beige)] flex items-center justify-center">
            <!-- Decorative glowing bubbles -->
            <div class="absolute -top-6 -left-6 w-32 h-32 rounded-full opacity-30" style="background:radial-gradient(circle at 30% 30%, rgba(255,200,221,0.9), transparent 40%); filter: blur(10px);"></div>
            <div class="absolute bottom-4 right-6 w-20 h-20 rounded-full opacity-20" style="background:radial-gradient(circle at 30% 30%, rgba(205,236,229,0.9), transparent 40%); filter: blur(8px);"></div>

            <!-- Product mockup (placeholder) -->
            <div class="relative z-10 flex flex-col items-center gap-3">
              <div class="w-36 h-36 rounded-2xl bg-white flex items-center justify-center shadow-md">
                <img src="../public/images/serum_best_seller.webp" alt="Glad2Glow" class="w-28 h-28 object-contain" />
              </div>
              <p class="text-sm font-medium">Glow Serum — Bestseller</p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- WHO WE ARE -->
    <section id="who" class="w-full max-w-6xl mx-auto px-6 md:px-8 lg:px-12 py-12">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
        <div class="lg:col-span-2 space-y-6">
          <h2 class="text-2xl font-bold">Who We Are</h2>
          <p class="text-gray-600">Glad2Glow hadir dari ide sederhana: merawat kulit tidak harus kompleks. Kami menyatukan filosofi <span class="font-medium">clean beauty</span> yang minimalis dengan sentuhan <span class="font-medium">fun</span> — sehingga rutinitas perawatan kulit terasa menyenangkan dan sustainable.</p>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
            <div class="p-4 bg-white rounded-xl shadow-sm">
              <h3 class="font-semibold">Mudah & Efektif</h3>
              <p class="text-sm text-gray-600 mt-2">Produk kami dirancang untuk masuk ke rutinitas siapa saja — dari pemula sampai yang sudah expert.</p>
            </div>
            <div class="p-4 bg-white rounded-xl shadow-sm">
              <h3 class="font-semibold">Aesthetic & Playful</h3>
              <p class="text-sm text-gray-600 mt-2">Desain pastel yang clean dan elemen playful agar perawatan kulit terasa menyenangkan.</p>
            </div>
          </div>
        </div>

        <!-- Quick facts card -->
        <aside class="p-6 bg-white rounded-2xl shadow-md">
          <h4 class="font-semibold">Quick Facts</h4>
          <ul class="mt-4 space-y-3 text-sm text-gray-600">
            <li>✨ Berdiri: 2022</li>
            <li>🌿 Fokus: Clean & gentle formulas</li>
            <li>💬 Komunitas: #Glad2GlowFam</li>
            <li>♻️ Kemasan ramah lingkungan</li>
          </ul>
        </aside>
      </div>
    </section>

    <!-- MISSION & PHILOSOPHY -->
    <section id="mission" class="w-full bg-white border-t">
      <div class="max-w-6xl mx-auto px-6 md:px-8 lg:px-12 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
          <div class="md:col-span-2">
            <h2 class="text-2xl font-bold">Our Mission</h2>
            <p class="text-gray-600 mt-3">Kami ingin membuat skincare yang mudah dipakai, lembut, dan memberikan hasil nyata — tanpa membuat perawatan jadi rumit. Selain itu, kami percaya produk cantik juga bisa bertanggung jawab terhadap lingkungan.</p>

            <div class="mt-6 grid grid-cols-1 sm:grid-cols-3 gap-4">
              <div class="p-4 bg-[color:var(--mint)] rounded-xl">
                <h3 class="font-semibold">Easy</h3>
                <p class="text-sm mt-2">No complicated steps — hanya yang diperlukan.</p>
              </div>
              <div class="p-4 bg-[color:var(--pink)] rounded-xl">
                <h3 class="font-semibold">Gentle</h3>
                <p class="text-sm mt-2">Formulasi buat semua jenis kulit, termasuk sensitif.</p>
              </div>
              <div class="p-4 bg-[color:var(--beige)] rounded-xl">
                <h3 class="font-semibold">Affordable</h3>
                <p class="text-sm mt-2">Harga bersahabat tanpa mengorbankan kualitas.</p>
              </div>
            </div>
          </div>

          <div class="p-6 bg-white rounded-2xl shadow-sm">
            <h4 class="font-semibold">Glow Philosophy</h4>
            <p class="text-sm text-gray-600 mt-3">Glow yang sehat adalah kombinasi antara formula yang tepat dan kebiasaan perawatan yang konsisten. Kami percaya kebiasaan kecil akan menghasilkan perubahan besar.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- INGREDIENTS STANDARDS -->
    <section id="ingredients" class="w-full max-w-6xl mx-auto px-6 md:px-8 lg:px-12 py-12">
      <h2 class="text-2xl font-bold">Our Ingredient Standards</h2>
      <p class="text-gray-600 mt-3 max-w-2xl">Kami memilih bahan berdasarkan efektivitas dan keamanan. Semua formula melalui pengujian dan disusun supaya ramah untuk penggunaan harian.</p>

      <div class="mt-6 grid grid-cols-1 sm:grid-cols-3 gap-6">
        <!-- Card list -->
        <div class="p-6 bg-white rounded-xl shadow-sm">
          <h3 class="font-semibold">No Parabens</h3>
          <p class="text-sm text-gray-600 mt-2">Menghindari pengawet yang sering dipertanyakan.</p>
        </div>
        <div class="p-6 bg-white rounded-xl shadow-sm">
          <h3 class="font-semibold">Non-comedogenic</h3>
          <p class="text-sm text-gray-600 mt-2">Tidak menyumbat pori sehingga aman untuk kulit berminyak.</p>
        </div>
        <div class="p-6 bg-white rounded-xl shadow-sm">
          <h3 class="font-semibold">No harsh fragrances</h3>
          <p class="tex
</body>
</html>