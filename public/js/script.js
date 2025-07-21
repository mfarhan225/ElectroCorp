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
