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
