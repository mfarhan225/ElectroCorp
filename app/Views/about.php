<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .value-card {
            border-left: 4px solid #0056b3;
            transition: transform 0.3s;
        }
        .value-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <?= $this->include('templates/header') ?>

    <!-- Konten Utama -->
    <div class="container py-5">
        <h1 class="text-primary mb-3"><?= $heading ?></h1>
        <p class="lead"><?= $tagline ?></p>

        <div class="card shadow-sm my-4">
            <div class="card-body">
                <!-- Visi & Misi -->
                <div class="mb-4">
                    <h3 class="text-primary">Visi & Misi</h3>
                    <p><strong>Visi:</strong> <?= $vision ?></p>
                    <strong>Misi:</strong>
                    <ul>
                        <?php foreach($mission as $item): ?>
                            <li><?= $item ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>

                <!-- Nilai Perusahaan -->
                <div class="mt-4">
                    <h3 class="text-primary">Nilai Perusahaan</h3>
                    <div class="row">
                        <?php foreach($values as $value): ?>
                            <div class="col-md-6 mb-3">
                                <div class="p-3 value-card bg-light rounded h-100">
                                    <h5><i class="fas fa-<?= $value['icon'] ?> me-2"></i><?= $value['title'] ?></h5>
                                    <p><?= $value['desc'] ?></p>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?= $this->include('templates/footer') ?>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>