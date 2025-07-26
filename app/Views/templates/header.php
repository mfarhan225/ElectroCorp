<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Judul halaman dinamis dari controller -->
    <title><?= esc($title); ?></title>
    
    <!-- Aset dan Library Eksternal -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        :root {
            --lg-orange: #FF6B00;
            --lg-dark: #1a1a1a;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        .lg-text-orange {
            color: var(--lg-orange);
        }

        .lg-bg-orange {
            background-color: var(--lg-orange);
        }

        .lg-bg-dark {
            background-color: var(--lg-dark);
        }

        .lg-border-orange {
            border-color: var(--lg-orange);
        }

        .promo-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: var(--lg-orange);
            color: white;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .hero-bg {
            background-image: url('https://images.unsplash.com/photo-1550009158-9ebf69173e03?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
        }

        .fade-in-section {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-in-section.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <link rel="stylesheet" href="<?= base_url('css/styles.css'); ?>">
</head>
<body class="antialiased">

<nav class="bg-white shadow-md py-4 w-full">
  <div class="flex justify-between items-center w-full px-6 md:px-10">
    
    <div class="flex items-center">
      <a href="#" class="font-bold text-2xl text-orange-500 mr-10">
        Electro<span class="text-gray-800">Corp</span>
      </a>

      <div class="hidden md:flex space-x-4"> 
        <a href="<?= base_url('/') ?>" class="text-gray-700 hover:text-orange-500 font-medium">Beranda</a>
        <a href="<?= base_url('/about') ?>" class="text-gray-700 hover:text-orange-500 font-medium">Tentang Kami</a>
        <a href="<?= base_url('/product') ?>" class="text-gray-700 hover:text-orange-500 font-medium">Produk</a>
        <a href="<?= base_url('/contact') ?>" class="text-gray-700 hover:text-orange-500 font-medium">Kontak</a>
      </div>
    </div>

    <div class="flex items-center space-x-6">
      <i class="fas fa-search text-gray-600 hover:text-orange-500 cursor-pointer"></i>
      <i class="fas fa-shopping-cart text-gray-600 hover:text-orange-500 cursor-pointer"></i>
      <button class="bg-orange-500 text-white px-4 py-2 rounded-md text-sm font-bold hover:bg-orange-600 transition">
        MASUK
      </button>
    </div>

  </div>
</nav>
