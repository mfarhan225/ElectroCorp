<main class="pt-24 pb-20">
    <section id="product-detail">
        <div class="container mx-auto px-6">
            <?php if (!empty($product)): ?>
                <div class="grid md:grid-cols-2 gap-12 items-start">
                    <!-- Gambar Produk -->
                    <div class="glass-card rounded-lg p-4">
                        <img src="<?= esc($product['image']); ?>" alt="[Gambar <?= esc($product['name']); ?>]" class="rounded-lg w-full h-auto object-cover">
                    </div>

                    <!-- Detail Produk -->
                    <div>
                        <h1 class="text-4xl md:text-5xl font-bold text-slate-100 mb-2"><?= esc($product['name']); ?></h1>
                        <p class="text-2xl accent-color font-semibold mb-6"><?= esc($product['price']); ?></p>
                        
                        <p class="text-slate-300 leading-relaxed mb-6"><?= esc($product['full_desc']); ?></p>

                        <h3 class="text-xl font-bold text-slate-100 mb-3">Fitur Utama:</h3>
                        <ul class="space-y-2 text-slate-300 mb-8">
                            <?php foreach ($product['features'] as $feature): ?>
                                <li class="flex items-center"><i data-feather="check-circle" class="w-5 h-5 accent-color mr-3"></i> <?= esc($feature); ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <div class="flex items-center space-x-4">
                             <a href="#" class="px-8 py-4 accent-bg text-slate-900 font-bold rounded-md hover:bg-cyan-300 transition-all duration-300 inline-block">
                                Beli Sekarang
                            </a>
                            <a href="<?= base_url('products'); ?>" class="px-8 py-4 border accent-border rounded-md font-medium accent-color hover:bg-cyan-400/10 transition-colors duration-300">
                                Kembali ke Produk
                            </a>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="text-center">
                    <h1 class="text-4xl font-bold text-slate-100">Produk Tidak Ditemukan</h1>
                    <p class="text-slate-400 mt-4">Maaf, produk yang Anda cari tidak ada.</p>
                    <a href="<?= base_url('products'); ?>" class="mt-8 inline-block px-6 py-3 accent-bg text-slate-900 font-bold rounded-md hover:bg-cyan-300 transition-all">
                        Lihat Produk Lainnya
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>
