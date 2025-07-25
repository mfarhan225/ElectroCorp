<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElectroCorp - Inovasi Teknologi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
<!-- Top Bar - Extreme Edge-to-Edge -->
<div class="lg-bg-dark text-white py-2 w-full">
    <div class="flex justify-between items-center px-4 w-full">
        <!-- Left-aligned text -->
        <div class="flex items-center space-x-2">
            <i class="fas fa-crown text-yellow-400"></i>
            <span class="text-sm">ElectroCorp Member: Daftar sekarang untuk diskon eksklusif!</span>
            <button class="lg-bg-orange text-white px-3 py-1 rounded-md text-xs font-bold hover:bg-orange-700 transition">DAFTAR</button>
        </div>
    </div>
</div>

<!-- Hero Section - Improved Readability -->
<section class="hero-bg text-white py-20 md:py-32 relative">
    <!-- Overlay untuk meningkatkan keterbacaan teks -->
    <div class="absolute inset-0 bg-black/50"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-2xl">
            <!-- Subjudul dengan kontras lebih tinggi -->
            <p class="text-lg lg-text-orange font-medium mb-4 tracking-wider bg-black/30 inline-block px-3 py-1 rounded">
                SELAMAT DATANG DI ELECTROCORP
            </p>
            
            <!-- Judul utama dengan bayangan teks -->
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight drop-shadow-lg">
                Inovasi Teknologi <br> 
                <span class="text-orange-300">Masa Depan Cerah</span>
            </h1>
            
            <!-- Deskripsi dengan latar belakang semi-transparan -->
            <div class="bg-black/30 p-4 rounded-lg mb-8 max-w-lg">
                <p class="text-lg md:text-xl leading-relaxed">
                    Kami merancang dan membangun perangkat elektronik canggih yang mengintegrasikan keindahan desain dengan performa tak tertandingi untuk kehidupan Anda.
                </p>
            </div>
            
            <!-- Tombol CTA dengan efek hover lebih jelas -->
            <div class="flex flex-col sm:flex-row gap-4">
                <button class="lg-bg-orange text-white px-8 py-4 rounded-md font-bold hover:bg-orange-700 transition transform hover:scale-105 shadow-lg">
                    JELAJAHI PRODUK
                </button>
                <button class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-md font-bold hover:bg-white/10 transition transform hover:scale-105">
                    LIHAT DEMO
                </button>
            </div>
        </div>

    </div>
</section>
    <!-- About Us Section -->
    <section id="about" class="py-12 md:py-20 fade-in-section bg-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">
                        Tentang <span class="lg-text-orange">ElectroCorp</span>
                    </h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Sejak didirikan pada tahun 2010, ElectroCorp telah menjadi pionir dalam industri elektronik. Misi kami adalah untuk mendorong batas-batas inovasi dan menciptakan teknologi yang tidak hanya fungsional tetapi juga menginspirasi.
                    </p>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Tim kami terdiri dari para insinyur, desainer, dan visioner yang bersemangat untuk mengubah dunia melalui teknologi. Kami percaya pada kualitas, keberlanjutan, dan kepuasan pelanggan.
                    </p>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-center"><i class="fas fa-microchip lg-text-orange mr-3"></i> Inovasi Berkelanjutan</li>
                        <li class="flex items-center"><i class="fas fa-shield-alt lg-text-orange mr-3"></i> Kualitas Terjamin</li>
                        <li class="flex items-center"><i class="fas fa-users lg-text-orange mr-3"></i> Dukungan Pelanggan 24/7</li>
                    </ul>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=600&h=400&auto=format&fit=crop" alt="Tim ElectroCorp" class="rounded-lg shadow-2xl z-10 relative w-full h-full object-cover">
                    <div class="absolute -top-4 -left-4 w-full h-full border-2 border-orange-500 rounded-lg z-0"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-12 md:py-20 fade-in-section bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800">
                    Produk <span class="lg-text-orange">Unggulan</span> Kami
                </h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                    Temukan koleksi perangkat elektronik kami yang dirancang dengan presisi untuk kebutuhan modern Anda.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Product 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden product-card transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1546054454-aa26e2b734c7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Smartphone Quantum X" class="w-full h-48 object-cover">
                        <div class="promo-badge">TERBARU</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold mb-1">Smartphone Quantum X</h3>
                        <p class="text-sm text-gray-600 mb-2">Smartphone flagship dengan prosesor quantum dan kamera 108MP.</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-xs text-gray-500 ml-1">(128)</span>
                        </div>
                        <div class="mb-2">
                            <span class="text-sm line-through text-gray-500">Rp 12.999.000</span>
                            <span class="text-lg font-bold lg-text-orange ml-2">Rp 11.699.100</span>
                        </div>
                        <button class="w-full lg-bg-orange text-white py-2 rounded-md font-bold hover:bg-orange-700 transition">Beli Sekarang</button>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden product-card transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Laptop Nebula Pro" class="w-full h-48 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold mb-1">Laptop Nebula Pro</h3>
                        <p class="text-sm text-gray-600 mb-2">Laptop ultra-ringkas dengan layar OLED 4K dan baterai tahan 20 jam.</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-xs text-gray-500 ml-1">(64)</span>
                        </div>
                        <div class="mb-2">
                            <span class="text-sm line-through text-gray-500">Rp 24.999.000</span>
                            <span class="text-lg font-bold lg-text-orange ml-2">Rp 22.499.100</span>
                        </div>
                        <button class="w-full lg-bg-orange text-white py-2 rounded-md font-bold hover:bg-orange-700 transition">Beli Sekarang</button>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden product-card transition duration-300">
                    <div class="relative">
                        <img src="https://asset.kompas.com/crops/r6peUnEDr8xP5BMCrOWVp6EjOkc=/382x299:2178x1497/1200x800/data/photo/2023/11/10/654df05547f08.jpg" alt="Smart Watch Pulse" class="w-full h-48 object-cover">
                        <div class="promo-badge">PROMO</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold mb-1">Smart Watch Pulse</h3>
                        <p class="text-sm text-gray-600 mb-2">Smartwatch dengan pemantauan kesehatan lengkap dan desain premium.</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-xs text-gray-500 ml-1">(256)</span>
                        </div>
                        <div class="mb-2">
                            <span class="text-sm line-through text-gray-500">Rp 5.999.000</span>
                            <span class="text-lg font-bold lg-text-orange ml-2">Rp 4.799.200</span>
                        </div>
                        <button class="w-full lg-bg-orange text-white py-2 rounded-md font-bold hover:bg-orange-700 transition">Beli Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Membership Section -->
    <section class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">Bergabung dengan ElectroCorp Membership</h2>
                    <p class="text-gray-600 mb-6">Dapatkan keuntungan eksklusif sebagai member, termasuk diskon spesial, prioritas pelayanan, dan penawaran terbatas.</p>
                    
                    <div class="flex items-start mb-4">
                        <i class="fas fa-gift text-2xl lg-text-orange mr-4 mt-1"></i>
                        <div>
                            <h3 class="font-bold">Welcome Voucher</h3>
                            <p class="text-gray-600 text-sm">Dapatkan potongan 10% pada pembelian pertama sebagai member</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start mb-4">
                        <i class="fas fa-truck text-2xl lg-text-orange mr-4 mt-1"></i>
                        <div>
                            <h3 class="font-bold">Gratis Pengiriman</h3>
                            <p class="text-gray-600 text-sm">Nikmati gratis pengiriman untuk semua produk</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <i class="fas fa-headset text-2xl lg-text-orange mr-4 mt-1"></i>
                        <div>
                            <h3 class="font-bold">Prioritas Support</h3>
                            <p class="text-gray-600 text-sm">Akses langsung ke tim support khusus member</p>
                        </div>
                    </div>
                </div>
                
                <div class="md:w-1/2 bg-gray-100 p-8 rounded-lg">
                    <h3 class="text-xl font-bold mb-4">Daftar Sekarang</h3>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Nama Lengkap</label>
                            <input class="w-full px-3 py-2 border rounded-md" id="name" type="text" placeholder="Nama Anda">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                            <input class="w-full px-3 py-2 border rounded-md" id="email" type="email" placeholder="email@contoh.com">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Nomor Telepon</label>
                            <input class="w-full px-3 py-2 border rounded-md" id="phone" type="tel" placeholder="08123456789">
                        </div>
                        <button class="w-full lg-bg-orange text-white py-3 rounded-md font-bold hover:bg-orange-700 transition">DAFTAR MEMBER</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-12 md:py-20 fade-in-section bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800">
                    Hubungi <span class="lg-text-orange">Kami</span>
                </h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                    Punya pertanyaan? Kami siap membantu.
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-lg font-bold mb-4">Informasi Kontak</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-map-marker-alt lg-text-orange mt-1 mr-3"></i>
                                <span>Jl. Teknologi No. 42, Jakarta Selatan, Indonesia</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-phone-alt lg-text-orange mt-1 mr-3"></i>
                                <span>+62 21 1234 5678</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-envelope lg-text-orange mt-1 mr-3"></i>
                                <span>info@electrocorp.com</span>
                            </li>
                        </ul>
                        
                        <div class="mt-6">
                            <h3 class="text-lg font-bold mb-4">Jam Operasional</h3>
                            <p class="text-gray-600">Senin - Jumat: 08:00 - 17:00<br>Sabtu: 09:00 - 15:00</p>
                        </div>
                    </div>
                    
                    <div>
                        <form class="space-y-4">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="contact-name">Nama</label>
                                <input class="w-full px-3 py-2 border rounded-md" id="contact-name" type="text" placeholder="Nama Anda">
                            </div>
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="contact-email">Email</label>
                                <input class="w-full px-3 py-2 border rounded-md" id="contact-email" type="email" placeholder="email@contoh.com">
                            </div>
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="contact-message">Pesan</label>
                                <textarea class="w-full px-3 py-2 border rounded-md" id="contact-message" rows="4" placeholder="Tulis pesan Anda"></textarea>
                            </div>
                            <button type="submit" class="w-full lg-bg-orange text-white py-3 rounded-md font-bold hover:bg-orange-700 transition">KIRIM PESAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="lg-bg-dark text-white pt-12 pb-6">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="font-bold text-lg mb-4">ElectroCorp</h3>
                    <p class="text-gray-400">Inovasi teknologi untuk masa depan yang lebih cerah.</p>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-4">Produk</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">Smartphone</a></li>
                        <li><a href="#" class="hover:text-white">Laptop</a></li>
                        <li><a href="#" class="hover:text-white">Wearables</a></li>
                        <li><a href="#" class="hover:text-white">Aksesoris</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-4">Dukungan</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">Pusat Bantuan</a></li>
                        <li><a href="#" class="hover:text-white">Garansi</a></li>
                        <li><a href="#" class="hover:text-white">Pengiriman</a></li>
                        <li><a href="#" class="hover:text-white">Pembayaran</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-4">Perusahaan</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#about" class="hover:text-white">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-white">Karir</a></li>
                        <li><a href="#" class="hover:text-white">Blog</a></li>
                        <li><a href="#contact" class="hover:text-white">Kontak</a></li>
                    </ul>
                </div>
            </div>
 
    <script>
        // Intersection Observer for fade-in animations
        const fadeInSections = document.querySelectorAll('.fade-in-section');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                }
            });
        }, { threshold: 0.1 });
        
        fadeInSections.forEach(section => {
            observer.observe(section);
        });
        
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>