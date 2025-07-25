<div class="min-h-screen bg-white">
    <!-- Hero Section -->
    <div class="relative" style="background-color: #ff6600ff;">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <img src="https://images.unsplash.com/photo-1550009158-9ebf69173e03?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
             alt="Produk Elektronik" 
             class="w-full h-64 object-cover opacity-90">
        <div class="relative container mx-auto px-4 py-16 text-center">
            <h1 class="text-4xl font-bold text-white mb-4"><?= $heading ?></h1>
            <p class="text-xl" style="color: #FFD8C2;"><?= $tagline ?></p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Vision Section -->
            <div class="bg-white rounded-lg shadow-sm p-6" style="border-top: 4px solid #ff6600ff;">
                <div class="flex items-start">
                    <div class="p-3 rounded-full mr-4" style="background-color: #FFE4D8;">
                        <i class="fas fa-eye text-xl" style="color: #ff6600ff;"></i> <!-- Ikon mata untuk visi -->
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800 mb-3">Visi Kami</h2>
                        <p class="text-gray-700"><?= $vision ?></p>
                    </div>
                </div>
            </div>
            
            <!-- Mission Section -->
            <div class="bg-white rounded-lg shadow-sm p-6" style="border-top: 4px solid #ff6600ff;">
                <div class="flex items-start">
                    <div class="p-3 rounded-full mr-4" style="background-color: #FFE4D8;">
                        <i class="fas fa-rocket text-xl" style="color: #ff6600ff;"></i> <!-- Ikon roket untuk misi -->
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800 mb-3">Misi Kami</h2>
                        <ul class="space-y-2">
                            <?php foreach($mission as $item): ?>
                                <li class="flex items-start">
                                    <i class="fas fa-check mt-1 mr-2" style="color: #ff6600ff;"></i>
                                    <span class="text-gray-700"><?= $item ?></span>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Company Values -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Nilai Perusahaan</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Kami berkomitmen pada prinsip-prinsip yang membentuk budaya dan operasi perusahaan kami
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-6">
            <?php foreach($values as $value): ?>
                <div class="bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition" style="border-bottom: 4px solid #F15A22;">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center mb-4 mx-auto" style="background-color: #FFE4D8;">
                        <i class="fas fa-<?= $value['icon'] ?> text-xl" style="color: #F15A22;"></i>
                    </div>
                    <h3 class="text-xl font-bold text-center text-gray-800 mb-2"><?= $value['title'] ?></h3>
                    <p class="text-gray-600 text-center"><?= $value['desc'] ?></p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>