
<?php $__env->startSection('content'); ?>
<h2>Ranking Mahasiswa Berdasarkan Skor Beasiswa</h2>
<table border="1" cellpadding="8">
    <tr>
        <th>Rank</th>
        <th>Nama</th>
        <th>Skor Total</th>
    </tr>
    <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($index + 1); ?></td>
        <td><?php echo e($mhs['nama']); ?></td>
        <td><?php echo e(number_format($mhs['skor_total'], 2)); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<a href="<?php echo e(route('beasiswa.filter')); ?>">Filter Mahasiswa Layak →</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\UTS-LARAVEL\uts-beasiswa\resources\views/beasiswa/ranking.blade.php ENDPATH**/ ?>