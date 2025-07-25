    <!-- Footer -->  
            <div class="border-t border-gray-800 pt-6">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-4 md:mb-0">
                        <p class="text-gray-400 text-sm">© 2023 ElectroCorp. Hak cipta dilindungi undang-undang.</p>
                    </div>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white text-sm">Ketentuan Layanan</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm">Kebijakan Privasi</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm">Peta Situs</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Link ke file JavaScript di direktori public -->
    <script>
feather.replace();

// Logika untuk Mobile Menu
const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');
mobileMenuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});

// Menutup menu mobile saat link di-klik
document.querySelectorAll('#mobile-menu a').forEach(link => {
    link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
    });
});

// Efek shadow pada header saat scroll
const header = document.getElementById('header');
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        header.classList.add('shadow-lg');
    } else {
        header.classList.remove('shadow-lg');
    }
});

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
 
    </script>
</body>
</html>
