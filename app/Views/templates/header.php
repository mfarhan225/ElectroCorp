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
body {
font-family: 'Inter', sans-serif;
background-color: #0a192f; /* Warna dasar dark blue navy */
color: #cbd5e1; /* slate-300 */
}

/* Warna aksen kustom */
.accent-color {
    color: #64ffda; /* Warna cyan cerah untuk aksen */
}
.accent-bg {
    background-color: #64ffda;
}
.accent-border {
    border-color: #64ffda;
}

/* Efek glassmorphism untuk beberapa elemen */
.glass-card {
    background: rgba(15, 32, 58, 0.6);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(45, 212, 191, 0.2);
}

/* Animasi fade-in saat scroll */
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
