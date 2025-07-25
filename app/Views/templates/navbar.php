<!-- Header / Navbar -->
<header id="header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-opacity-90 backdrop-blur-sm bg-[#0a192f]/80">
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="<?= base_url(); ?>" class="text-2xl font-bold text-white">
                Electro<span class="accent-color">Corp</span>
            </a>
            
            <!-- Navigasi Desktop -->
            <nav class="hidden md:flex items-center space-x-8 text-slate-300">
                <a href="<?= base_url(); ?>" class="hover:accent-color transition-colors duration-300">Beranda</a>
                <a href="<?= base_url(); ?>#about" class="hover:accent-color transition-colors duration-300">Tentang Kami</a>
                <a href="<?= base_url('products'); ?>" class="hover:accent-color transition-colors duration-300">Produk</a>
                <a href="<?= base_url(); ?>#contact" class="hover:accent-color transition-colors duration-300">Kontak</a>
            </nav>

            <!-- Tombol CTA Desktop -->
            <a href="#contact" class="hidden md:block px-5 py-2 border accent-border rounded-md text-sm font-medium accent-color hover:bg-cyan-400/10 transition-colors duration-300">
                Hubungi Kami
            </a>

            <!-- Tombol Hamburger (Mobile) -->
            <button id="mobile-menu-button" class="md:hidden focus:outline-none">
                <i data-feather="menu" class="text-white"></i>
            </button>
        </div>
    </div>
    <!-- Navigasi Mobile -->
    <div id="mobile-menu" class="hidden md:hidden">
        <nav class="px-6 pt-2 pb-4 flex flex-col space-y-3 text-slate-300">
            <a href="<?= base_url(); ?>" class="block hover:accent-color transition-colors duration-300">Beranda</a>
            <a href="<?= base_url(); ?>#about" class="block hover:accent-color transition-colors duration-300">Tentang Kami</a>
            <!-- Tautan ini diubah -->
            <a href="<?= base_url('products'); ?>" class="block hover:accent-color transition-colors duration-300">Produk</a>
            <a href="<?= base_url(); ?>#contact" class="block hover:accent-color transition-colors duration-300">Kontak</a>
            <a href="#contact" class="mt-2 block w-full text-center px-5 py-2 border accent-border rounded-md text-sm font-medium accent-color hover:bg-cyan-400/10 transition-colors duration-300">
                Hubungi Kami
            </a>
        </nav>
    </div>
</header>
