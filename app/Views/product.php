<main class="bg-gray-50 py-12">
    <div class="container mx-auto px-4 md:px-6">

        <!-- Header Halaman dan Breadcrumb -->
        <div class="mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800">
                Katalog <span class="lg-text-orange">Produk</span>
            </h1>
            <nav class="text-sm font-medium text-gray-500 mt-2" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex">
                    <li class="flex items-center">
                        <a href="<?= base_url('/') ?>" class="hover:text-orange-500">Beranda</a>
                        <i data-feather="chevron-right" class="w-4 h-4 mx-2"></i>
                    </li>
                    <li class="flex items-center">
                        <span class="text-gray-700">Produk</span>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">

            <!-- Sidebar untuk Filter -->
            <aside class="w-full lg:w-1/4">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold mb-4 border-b pb-2">Filter Produk</h3>
                    
                    <!-- Filter Kategori -->
                    <div class="mb-6">
                        <h4 class="font-semibold mb-2">Kategori</h4>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li><a href="#" class="hover:text-orange-500">Semua</a></li>
                            <li><a href="#" class="hover:text-orange-500">Smartphone</a></li>
                            <li><a href="#" class="hover:text-orange-500">Laptop</a></li>
                            <li><a href="#" class="hover:text-orange-500">Wearables</a></li>
                            <li><a href="#" class="hover:text-orange-500">Aksesoris</a></li>
                        </ul>
                    </div>

                    <!-- Filter Harga -->
                    <div>
                        <h4 class="font-semibold mb-3">Rentang Harga</h4>
                        <input type="range" min="0" max="30000000" value="15000000" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-orange-500">
                        <div class="flex justify-between text-xs text-gray-500 mt-2">
                            <span>Rp 0</span>
                            <span>Rp 30jt</span>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Grid Produk -->
            <div class="w-full lg:w-3/4">
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                    
                    <?php foreach ($products as $product): ?>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden product-card transition duration-300">
                        <div class="relative">
                            <img src="<?= esc($product['image']) ?>" alt="<?= esc($product['name']) ?>" class="w-full h-48 object-cover">
                            <?php if (!empty($product['badge'])): ?>
                                <div class="promo-badge"><?= esc($product['badge']) ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold mb-1 text-gray-800"><?= esc($product['name']) ?></h3>
                            <p class="text-sm text-gray-600 mb-2 h-10"><?= esc($product['description']) ?></p>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <!-- Logika untuk menampilkan bintang rating -->
                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                        <?php if ($i <= $product['rating']): ?>
                                            <i class="fas fa-star"></i>
                                        <?php elseif ($i - 0.5 <= $product['rating']): ?>
                                            <i class="fas fa-star-half-alt"></i>
                                        <?php else: ?>
                                            <i class="far fa-star"></i>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </div>
                                <span class="text-xs text-gray-500 ml-1">(<?= esc($product['reviews']) ?>)</span>
                            </div>
                            <div class="mb-3">
                                <?php if (!empty($product['price_before'])): ?>
                                <span class="text-sm line-through text-gray-500">Rp <?= esc($product['price_before']) ?></span>
                                <?php endif; ?>
                                <span class="text-lg font-bold lg-text-orange ml-2">Rp <?= esc($product['price_after']) ?></span>
                            </div>
                            <button class="w-full lg-bg-orange text-white py-2 rounded-md font-bold hover:bg-orange-700 transition">
                                <i class="fas fa-shopping-cart mr-2"></i>Tambah ke Keranjang
                            </button>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
                 <!-- Pagination -->
                <div class="mt-8 flex justify-center">
                    <nav aria-label="Page navigation">
                      <ul class="inline-flex items-center -space-x-px">
                        <li>
                          <a href="#" class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
                        </li>
                        <li>
                          <a href="#" aria-current="page" class="z-10 px-3 py-2 leading-tight text-white border border-orange-500 bg-orange-500 hover:bg-orange-600">1</a>
                        </li>
                        <li>
                          <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                        </li>
                        <li>
                          <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">3</a>
                        </li>
                        <li>
                          <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
                        </li>
                      </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</main>
