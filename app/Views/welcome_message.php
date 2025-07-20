<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elektronik Jaya - Inovasi Teknologi Masa Depan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/heroicons@2.1.3/24/outline/index.js"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0c111f; /* Warna latar belakang biru tua */
        }
        .hero-bg {
            background: linear-gradient(rgba(12, 17, 31, 0.7), rgba(12, 17, 31, 1)), url('https://placehold.co/1920x1080/0c111f/e0e0e0?text=Sirkuit+Modern');
            background-size: cover;
            background-position: center;
        }
        .glass-effect {
            background: rgba(17, 24, 39, 0.6);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .product-card:hover .product-image {
            transform: scale(1.05);
        }
        .glow-on-hover {
            transition: box-shadow 0.3s ease-in-out;
        }
        .glow-on-hover:hover {
            box-shadow: 0 0 15px 2px rgba(34, 211, 238, 0.4); /* Efek glow sian */
        }
        .fade-in-up {
            animation: fadeInUp 1s ease-out forwards;
            opacity: 0;
            transform: translateY(20px);
        }
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="text-gray-200">

    <!-- Header / Navbar -->
    <header class="glass-effect sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-extrabold text-white">
                <span class="text-cyan-400">Elektronik</span>Jaya
            </a>
            <div class="hidden md:flex items-center space-x-8">
                <a href="#beranda" class="hover:text-cyan-400 transition-colors duration-300">Beranda</a>
                <a href="#produk" class="hover:text-cyan-400 transition-colors duration-300">Produk</a>
                <a href="#tentang" class="hover:text-cyan-400 transition-colors duration-300">Tentang Kami</a>
                <a href="#kontak" class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-5 rounded-lg transition-all duration-300 transform hover:scale-105">Hubungi Kami</a>
            </div>
            <button id="mobile-menu-button" class="md:hidden focus:outline-none text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </nav>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden px-6 pb-4 space-y-2">
            <a href="#beranda" class="block hover:text-cyan-400 transition-colors duration-300">Beranda</a>
            <a href="#produk" class="block hover:text-cyan-400 transition-colors duration-300">Produk</a>
            <a href="#tentang" class="block hover:text-cyan-400 transition-colors duration-300">Tentang Kami</a>
            <a href="#kontak" class="block bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-4 rounded-lg transition-colors text-center">Hubungi Kami</a>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section id="beranda" class="hero-bg min-h-screen flex items-center">
            <div class="container mx-auto px-6 text-center">
                <div class="fade-in-up">
                    <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-4 text-white">Inovasi Teknologi untuk Masa Depan</h1>
                    <p class="text-lg md:text-xl text-gray-300 mb-8 max-w-3xl mx-auto">Menghadirkan solusi elektronik terdepan yang andal, efisien, dan dirancang untuk kebutuhan Anda.</p>
                    <a href="#produk" class="bg-cyan-500 hover:bg-cyan-400 text-black font-bold py-3 px-8 rounded-lg text-lg transition-all duration-300 transform hover:scale-105 shadow-lg shadow-cyan-500/20">Jelajahi Produk</a>
                </div>
            </div>
        </section>

        <!-- Product Section -->
        <section id="produk" class="py-24 bg-[#0c111f]">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16 fade-in-up" style="animation-delay: 0.2s;">
                    <h2 class="text-3xl md:text-4xl font-bold text-white">Produk Unggulan Kami</h2>
                    <p class="text-gray-400 mt-2">Teknologi terbaik yang kami tawarkan untuk Anda.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <!-- Product Card 1 -->
                    <div class="product-card glass-effect rounded-xl overflow-hidden glow-on-hover fade-in-up" style="animation-delay: 0.4s;">
                        <div class="overflow-hidden"><img src="https://placehold.co/600x400/1e293b/94a3b8?text=Smart+Hub" alt="Smart Home Hub" class="product-image w-full h-56 object-cover transition-transform duration-500 ease-in-out"></div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 text-cyan-400">Smart Home Hub</h3>
                            <p class="text-gray-400 mb-4 h-20">Kontrol semua perangkat pintar di rumah Anda dari satu pusat kendali yang intuitif dan aman.</p>
                            <span class="text-lg font-semibold text-white">Rp 1.250.000</span>
                        </div>
                    </div>
                    <!-- Product Card 2 -->
                    <div class="product-card glass-effect rounded-xl overflow-hidden glow-on-hover fade-in-up" style="animation-delay: 0.6s;">
                        <div class="overflow-hidden"><img src="https://placehold.co/600x400/1e293b/94a3b8?text=Audio+Pro" alt="Audio System Pro" class="product-image w-full h-56 object-cover transition-transform duration-500 ease-in-out"></div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 text-cyan-400">Audio System Pro</h3>
                            <p class="text-gray-400 mb-4 h-20">Nikmati kualitas suara sejernih kristal dengan sistem audio profesional kami yang imersif.</p>
                             <span class="text-lg font-semibold text-white">Rp 3.500.000</span>
                        </div>
                    </div>
                    <!-- Product Card 3 -->
                    <div class="product-card glass-effect rounded-xl overflow-hidden glow-on-hover fade-in-up" style="animation-delay: 0.8s;">
                        <div class="overflow-hidden"><img src="https://placehold.co/600x400/1e293b/94a3b8?text=IoT+Kit" alt="IoT Sensor Kit" class="product-image w-full h-56 object-cover transition-transform duration-500 ease-in-out"></div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 text-cyan-400">IoT Sensor Kit</h3>
                            <p class="text-gray-400 mb-4 h-20">Kembangkan proyek Internet of Things Anda dengan kit sensor yang lengkap dan mudah diintegrasikan.</p>
                             <span class="text-lg font-semibold text-white">Rp 850.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Us Section -->
        <section id="tentang" class="py-24">
            <div class="container mx-auto px-6">
                <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
                    <div class="lg:w-1/2 fade-in-up" style="animation-delay: 0.2s;">
                        <div class="relative">
                            <div class="absolute -top-4 -left-4 w-full h-full bg-cyan-500/20 rounded-lg transform -rotate-3"></div>
                            <img src="https://placehold.co/600x450/1f2937/9ca3af?text=Tim+Inovator" alt="Tim Elektronik Jaya" class="relative rounded-lg shadow-2xl z-10">
                        </div>
                    </div>
                    <div class="lg:w-1/2 fade-in-up" style="animation-delay: 0.4s;">
                        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-white">Tentang Elektronik Jaya</h2>
                        <p class="text-gray-300 mb-4 leading-relaxed">
                            Didirikan pada tahun 2010, Elektronik Jaya berkomitmen untuk mendorong batas-batas inovasi di dunia teknologi. Visi kami adalah menciptakan produk elektronik yang tidak hanya canggih, tetapi juga dapat diandalkan dan memperkaya kehidupan sehari-hari.
                        </p>
                        <p class="text-gray-300 leading-relaxed">
                            Dengan tim insinyur dan desainer berbakat, kami fokus pada riset dan pengembangan untuk menghasilkan solusi yang relevan dengan tantangan masa kini dan masa depan.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact & Customer Form Section -->
        <section id="kontak" class="py-24 bg-gradient-to-b from-[#0c111f] to-[#111827]">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12 fade-in-up">
                    <h2 class="text-3xl md:text-4xl font-bold text-white">Hubungi Kami</h2>
                    <p class="text-gray-400 mt-2">Ada pertanyaan atau ingin bekerja sama? Kami siap membantu.</p>
                </div>
                <div class="glass-effect p-8 rounded-xl shadow-lg max-w-4xl mx-auto fade-in-up" style="animation-delay: 0.2s;">
                    <div id="form-notification" class="hidden text-center p-4 mb-4 rounded-lg"></div>
                    <form id="customer-form" novalidate>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="nama" class="block mb-2 text-sm font-medium text-gray-300">Nama Lengkap</label>
                                <input type="text" id="nama" name="nama" class="bg-gray-800 border border-gray-600 text-white text-sm rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 block w-full p-3 transition" placeholder="John Doe" required>
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-300">Alamat Email</label>
                                <input type="email" id="email" name="email" class="bg-gray-800 border border-gray-600 text-white text-sm rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 block w-full p-3 transition" placeholder="nama@email.com" required>
                            </div>
                            <div class="md:col-span-2">
                                <label for="telepon" class="block mb-2 text-sm font-medium text-gray-300">Nomor Telepon</label>
                                <input type="tel" id="telepon" name="telepon" class="bg-gray-800 border border-gray-600 text-white text-sm rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 block w-full p-3 transition" placeholder="081234567890">
                            </div>
                            <div class="md:col-span-2">
                                <label for="pesan" class="block mb-2 text-sm font-medium text-gray-300">Pesan Anda</glabel>
                                <textarea id="pesan" name="pesan" rows="4" class="bg-gray-800 border border-gray-600 text-white text-sm rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 block w-full p-3 transition" placeholder="Tuliskan pesan Anda di sini..." required></textarea>
                            </div>
                        </div>
                        <div class="text-center mt-8">
                            <button type="submit" class="bg-cyan-500 hover:bg-cyan-400 text-black font-bold py-3 px-8 rounded-lg text-lg transition-all duration-300 transform hover:scale-105 shadow-lg shadow-cyan-500/20">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-[#111827] border-t border-gray-800 py-8">
        <div class="container mx-auto px-6 text-center text-gray-500">
            <p>&copy; 2024 Elektronik Jaya. Semua Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Form submission feedback (for demonstration)
        const form = document.getElementById('customer-form');
        const notification = document.getElementById('form-notification');
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const name = document.getElementById('nama').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('pesan').value;
            if (!name || !email || !message) {
                notification.textContent = 'Harap isi semua field yang wajib diisi (Nama, Email, Pesan).';
                notification.className = 'bg-red-600 text-white text-center p-4 mb-4 rounded-lg';
                notification.classList.remove('hidden');
                return;
            }
            notification.textContent = 'Terima kasih! Pesan Anda telah terkirim.';
            notification.className = 'bg-green-500 text-white text-center p-4 mb-4 rounded-lg';
            notification.classList.remove('hidden');
            form.reset();
            setTimeout(() => {
                notification.classList.add('hidden');
            }, 5000);
        });

        // Intersection Observer for animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.fade-in-up').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>
