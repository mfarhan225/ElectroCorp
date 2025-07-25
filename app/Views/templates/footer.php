    <!-- Footer -->
    <footer class="bg-[#0f172a] border-t border-slate-800">
        <div class="container mx-auto px-6 py-8">
            <div class="flex flex-col md:flex-row justify-between items-center text-center md:text-left">
                <p class="text-slate-400 text-sm">
                    &copy; <span id="year"></span> ElectroCorp. Semua Hak Cipta Dilindungi.
                </p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="text-slate-400 hover:accent-color transition"><i data-feather="twitter"></i></a>
                    <a href="#" class="text-slate-400 hover:accent-color transition"><i data-feather="instagram"></i></a>
                    <a href="#" class="text-slate-400 hover:accent-color transition"><i data-feather="linkedin"></i></a>
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
