<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Glad2Glow</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50">

    <!-- HEADER -->
    <?php include '../views/layout/header.php'; ?>

    <!-- CONTAINER -->
    <div class="max-w-6xl mx-auto px-6 py-16">

        <!-- TITLE -->
        <h1 class="text-4xl font-bold text-pink-600 mb-3">Contact Us</h1>
        <p class="text-gray-600 mb-12">Kami siap membantu setiap pertanyaan atau kebutuhan Anda 💕</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            <!-- CONTACT FORM -->
            <div class="bg-white p-8 rounded-2xl shadow-lg">
                <h2 class="text-2xl font-bold text-pink-500 mb-6">Kirim Pesan</h2>

                <form action="#" method="POST" class="space-y-4">

                    <div>
                        <label class="block mb-1 text-gray-700">Nama Lengkap</label>
                        <input type="text" class="w-full p-3 border border-pink-200 rounded-lg focus:ring-2 focus:ring-pink-400">
                    </div>

                    <div>
                        <label class="block mb-1 text-gray-700">Email</label>
                        <input type="email" class="w-full p-3 border border-pink-200 rounded-lg focus:ring-2 focus:ring-pink-400">
                    </div>

                    <div>
                        <label class="block mb-1 text-gray-700">Pesan</label>
                        <textarea class="w-full p-3 border border-pink-200 rounded-lg h-32 focus:ring-2 focus:ring-pink-400"></textarea>
                    </div>

                    <button class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-lg font-semibold shadow">
                        Kirim Pesan
                    </button>

                </form>
            </div>

            <!-- CONTACT INFO + WHATSAPP -->
            <div class="space-y-6">

                <!-- CARD INFO -->
                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <h2 class="text-2xl font-bold text-pink-500 mb-4">Informasi Kontak</h2>

                    <p class="text-gray-700 mb-3"><strong>Email:</strong> support@glad2glow.com</p>
                    <p class="text-gray-700 mb-3"><strong>Instagram:</strong> @glad2glow</p>
                    <p class="text-gray-700 mb-3"><strong>Jam Operasional:</strong> 08.00 – 21.00 WIB</p>
                </div>

                <!-- WHATSAPP BUTTON -->
                <a href="https://wa.me/6281234567890" target="_blank" class="block">
                    <div class="bg-pink-500 hover:bg-pink-600 text-white p-6 rounded-2xl shadow-lg text-center font-semibold text-lg">
                        Chat via WhatsApp 📢
                    </div>
                </a>

                <!-- MAP / LOCATION -->
                <div class="bg-white p-4 rounded-2xl shadow-lg">
                    <div class="w-full h-52 bg-pink-200 flex items-center justify-center rounded-lg text-gray-600">
                        Map Location (Optional)
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>
</html>