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
    
    <!-- Link ke file CSS di direktori public -->
    <link rel="stylesheet" href="<?= base_url('css/styles.css'); ?>">
</head>
<body class="antialiased">
