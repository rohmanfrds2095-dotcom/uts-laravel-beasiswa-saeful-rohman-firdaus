
<?php $__env->startSection('content'); ?>
<h2>✅ Filter Mahasiswa Layak Beasiswa (Skor ≥ 70)</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>Nama Mahasiswa</th>
        <th>Skor Total</th>
    </tr>

    <?php if($mahasiswa->isEmpty()): ?>
    <tr>
        <td colspan="2">Tidak ada mahasiswa yang memenuhi syarat beasiswa</td>
    </tr>
    <?php else: ?>
    <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($mhs['nama']); ?></td>
        <td><?php echo e(number_format($mhs['skor_total'], 2)); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</table>
<a href="<?php echo e(route('beasiswa.ranking')); ?>">← Kembali ke Ranking</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\UTS-LARAVEL\uts-beasiswa\resources\views/beasiswa/filter-layak.blade.php ENDPATH**/ ?>