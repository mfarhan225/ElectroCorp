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