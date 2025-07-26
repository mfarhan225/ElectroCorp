<main class="bg-gray-50 py-12 md:py-16">
    <div class="container mx-auto px-4 md:px-6">

        <!-- Header Halaman dan Breadcrumb -->
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800">
                Hubungi <span class="lg-text-orange">Kami</span>
            </h1>
            <p class="text-gray-600 mt-2 max-w-2xl mx-auto">
                Punya pertanyaan atau butuh bantuan? Kami siap melayani Anda.
            </p>
            <nav class="text-sm font-medium text-gray-500 mt-4 inline-block" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex">
                    <li class="flex items-center">
                        <a href="<?= base_url('/') ?>" class="hover:text-orange-500">Beranda</a>
                        <i data-feather="chevron-right" class="w-4 h-4 mx-2"></i>
                    </li>
                    <li class="flex items-center">
                        <span class="text-gray-700">Kontak</span>
                    </li>
                </ol>
            </nav>
        </div>

        <!-- Konten Kontak: Info dan Form -->
        <div class="max-w-5xl mx-auto bg-white p-8 rounded-lg shadow-lg">
            <div class="grid md:grid-cols-2 gap-10">

                <!-- Kolom Informasi Kontak -->
                <div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Informasi Kontak</h3>
                    <ul class="space-y-4 text-gray-700">
                        <li class="flex items-start">
                            <i data-feather="map-pin" class="lg-text-orange mt-1 mr-4 flex-shrink-0"></i>
                            <div>
                                <h4 class="font-semibold">Alamat Kantor</h4>
                                <span>Jl. Teknologi No. 42, Jakarta Selatan, Indonesia</span>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i data-feather="phone" class="lg-text-orange mt-1 mr-4 flex-shrink-0"></i>
                            <div>
                                <h4 class="font-semibold">Telepon</h4>
                                <span>+62 21 1234 5678</span>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i data-feather="mail" class="lg-text-orange mt-1 mr-4 flex-shrink-0"></i>
                            <div>
                                <h4 class="font-semibold">Email</h4>
                                <span>info@electrocorp.com</span>
                            </div>
                        </li>
                    </ul>
                    
                    <div class="mt-8 pt-6 border-t">
                        <h3 class="text-lg font-bold text-gray-800 mb-3">Jam Operasional</h3>
                        <p class="text-gray-700"><strong>Senin - Jumat:</strong> 08:00 - 17:00</p>
                        <p class="text-gray-700"><strong>Sabtu:</strong> 09:00 - 15:00</p>
                    </div>
                </div>

                <!-- Kolom Form Kontak -->
                <div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Kirim Pesan</h3>
                    <form action="#" method="POST" class="space-y-4">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="contact-name">Nama Lengkap</label>
                            <input class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500" id="contact-name" type="text" placeholder="Nama Anda">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="contact-email">Alamat Email</label>
                            <input class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500" id="contact-email" type="email" placeholder="email@contoh.com">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="contact-message">Pesan Anda</label>
                            <textarea class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500" id="contact-message" rows="5" placeholder="Tulis pesan Anda di sini..."></textarea>
                        </div>
                        <button type="submit" class="w-full lg-bg-orange text-white py-3 px-4 rounded-md font-bold hover:bg-orange-700 transition transform hover:scale-105">
                            KIRIM PESAN
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Social Media Section -->
        <div class="text-center mt-16">
            <h3 class="text-2xl font-bold lg-text-orange mb-4">Ikuti Kami</h3>
            <div class="flex justify-center">
                <!-- Pastikan Anda sudah memuat Font Awesome agar ikon muncul -->
                <a href="#" class="text-gray-500 hover:text-blue-600 transition duration-300 mx-6">
                    <i class="fab fa-facebook-f fa-2x"></i>
                </a>
                <a href="#" class="text-gray-500 hover:text-pink-500 transition duration-300 mx-6">
                    <i class="fab fa-instagram fa-2x"></i>
                </a>
                <a href="#" class="text-gray-500 hover:text-sky-500 transition duration-300 mx-6">
                    <i class="fab fa-twitter fa-2x"></i>
                </a>
                <a href="#" class="text-gray-500 hover:text-indigo-600 transition duration-300 mx-6">
                    <i class="fab fa-discord fa-2x"></i>
                </a>
            </div>
        </div>

    </div>
</main>
