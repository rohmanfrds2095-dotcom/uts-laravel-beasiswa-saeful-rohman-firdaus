<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF‑8">
    <meta name="viewport" content="width=device‑width, initial‑scale=1.0">
    <title>UTS Laravel ‑ Sistem Seleksi Beasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand‑lg navbar‑dark bg‑primary">
        <div class="container">
            <a class="navbar‑brand" href="<?php echo e(route('home')); ?>">Sistem Seleksi Beasiswa</a>
            <div class="collapse navbar‑collapse">
                <ul class="navbar‑nav me‑auto">
                    <li class="nav‑item"><a class="nav‑link" href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li class="nav‑item"><a class="nav‑link" href="<?php echo e(route('mahasiswa.index')); ?>">Data Mahasiswa</a></li>
                    <li class="nav‑item"><a class="nav‑link" href="<?php echo e(route('beasiswa.kriteria')); ?>">Kriteria Beasiswa</a></li>
                    <li class="nav‑item"><a class="nav‑link" href="<?php echo e(route('beasiswa.hitung')); ?>">Hitung Skor</a></li>
                    <li class="nav‑item"><a class="nav‑link" href="<?php echo e(route('beasiswa.ranking')); ?>">Ranking</a></li>
                    <li class="nav‑item"><a class="nav‑link" href="<?php echo e(route('beasiswa.filter')); ?>">Layak Beasiswa</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt‑4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\UTS-LARAVEL\uts-beasiswa\resources\views/layouts/app.blade.php ENDPATH**/ ?>