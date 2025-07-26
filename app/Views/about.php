<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Tentang Kami' ?></title>
    
    <!-- Memuat Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- PENTING: Memuat Font Awesome untuk menampilkan ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" xintegrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* Anda bisa menambahkan custom style di sini jika perlu */
    </style>
</head>
<body>

<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="relative" style="background-color: #ff6600ff;">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <img src="https://images.unsplash.com/photo-1550009158-9ebf69173e03?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
             alt="Produk Elektronik" 
             class="w-full h-64 object-cover opacity-90">
        <div class="relative container mx-auto px-4 py-16 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4"><?= $heading ?></h1>
            <p class="text-xl" style="color: #FFD8C2;"><?= $tagline ?></p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Vision Section -->
            <div class="bg-white rounded-lg shadow-sm p-6" style="border-top: 4px solid #ff6600ff;">
                <div class="flex items-start">
                    <div class="flex-shrink-0 p-3 rounded-full mr-4" style="background-color: #FFE4D8;">
                        <!-- Ikon mata untuk visi -->
                        <i class="fa-solid fa-eye text-2xl w-6 text-center" style="color: #ff6600ff;"></i>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800 mb-3">Visi Kami</h2>
                        <p class="text-gray-700 leading-relaxed"><?= $vision ?></p>
                    </div>
                </div>
            </div>
            
            <!-- Mission Section -->
            <div class="bg-white rounded-lg shadow-sm p-6" style="border-top: 4px solid #ff6600ff;">
                <div class="flex items-start">
                    <div class="flex-shrink-0 p-3 rounded-full mr-4" style="background-color: #FFE4D8;">
                        <!-- Ikon roket untuk misi -->
                        <i class="fa-solid fa-rocket text-2xl w-6 text-center" style="color: #ff6600ff;"></i>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800 mb-3">Misi Kami</h2>
                        <ul class="space-y-2">
                            <?php foreach($mission as $item): ?>
                                <li class="flex items-start">
                                    <i class="fa-solid fa-check-circle mt-1 mr-2" style="color: #ff6600ff;"></i>
                                    <span class="text-gray-700 leading-relaxed"><?= $item ?></span>
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
                Kami berkomitmen pada prinsip-prinsip yang membentuk budaya dan operasi perusahaan kami.
            </p>
        </div>
        
        <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-6">
            <?php foreach($values as $value): ?>
                <div class="bg-white rounded-lg shadow-sm p-6 text-center hover:shadow-lg hover:-translate-y-1 transition-all duration-300" style="border-bottom: 4px solid #F15A22;">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto" style="background-color: #FFE4D8;">
                        <!-- Ikon untuk setiap nilai perusahaan -->
                        <i class="fa-solid fa-<?= $value['icon'] ?> text-3xl" style="color: #F15A22;"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2"><?= $value['title'] ?></h3>
                    <p class="text-gray-600"><?= $value['desc'] ?></p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

</body>
</html>
