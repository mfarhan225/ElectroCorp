<!-- Footer -->
<footer>
    <div class="border-t border-gray-800 pt-6">
        <div class="flex flex-col md:flex-row justify-between items-center py-4">
            <div class="mb-4 md:mb-0">
                <p class="text-gray-400 text-sm">© <span id="year">2023</span> ElectroCorp. Hak cipta dilindungi undang-undang.</p>
            </div>
            <div class="flex space-x-4">
                <a href="#" class="text-gray-400 hover:text-white text-sm" aria-label="Ketentuan Layanan">Ketentuan Layanan</a>
                <a href="#" class="text-gray-400 hover:text-white text-sm" aria-label="Kebijakan Privasi">Kebijakan Privasi</a>
                <a href="#" class="text-gray-400 hover:text-white text-sm" aria-label="Peta Situs">Peta Situs</a>
            </div>
        </div>
    </div>
</footer>

<!-- Link ke file JavaScript di direktori public -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Hapus jika tidak ada ikon Feather yang digunakan
    feather.replace();  

    // Logika untuk Mobile Menu
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Menutup menu mobile saat link di-klik
        document.querySelector('#mobile-menu').addEventListener('click', (e) => {
            if (e.target.tagName === 'A') {
                mobileMenu.classList.add('hidden');
            }
        });

        // Menutup menu mobile jika klik di luar menu
        document.addEventListener('click', function (e) {
            if (!mobileMenu.contains(e.target) && !mobileMenuButton.contains(e.target)) {
                mobileMenu.classList.add('hidden');
            }
        });
    }

    // Efek shadow pada header saat scroll
    const header = document.getElementById('header');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('shadow-lg');
            } else {
                header.classList.remove('shadow-lg');
            }
        });
    }

    // Animasi fade-in saat elemen masuk viewport
    const sections = document.querySelectorAll('.fade-in-section');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    }, {
        threshold: 0.1
    });

    sections.forEach(section => {
        observer.observe(section);
    });

    // Set tahun di footer secara dinamis
    document.getElementById('year').textContent = new Date().getFullYear();
});
</script>
</body>
</html>
