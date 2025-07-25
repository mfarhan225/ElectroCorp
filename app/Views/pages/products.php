<main class="pt-24 pb-20">
    <section id="products-list">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold text-slate-100">
                    Semua <span class="accent-color">Produk</span>
                </h1>
                <p class="text-slate-400 mt-4 max-w-2xl mx-auto">
                    Temukan koleksi lengkap perangkat elektronik kami yang dirancang dengan presisi untuk kebutuhan modern Anda.
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php if (!empty($products) && is_array($products)): ?>
                    <?php foreach ($products as $product): ?>
                        <!-- Product Card -->
                        <div class="glass-card rounded-lg overflow-hidden group transform hover:-translate-y-2 transition-transform duration-300 flex flex-col">
                            <img src="<?= esc($product['image']); ?>" alt="[Gambar <?= esc($product['name']); ?>]" class="w-full h-56 object-cover">
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-xl font-bold text-slate-100 mb-2"><?= esc($product['name']); ?></h3>
                                <p class="text-slate-400 text-sm mb-4 flex-grow"><?= esc($product['short_desc']); ?></p>
                                <a href="<?= base_url('products/' . esc($product['slug'])); ?>" class="text-sm font-semibold accent-color group-hover:underline self-start">
                                    Lihat Detail <i data-feather="arrow-right" class="inline w-4 h-4"></i>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-slate-400 col-span-full text-center">Tidak ada produk untuk ditampilkan.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>
