
<?php $__env->startSection('content'); ?>
<h2>Hitung Skor Kelayakan Beasiswa</h2>
<table border="1" cellpadding="8">
    <tr>
        <th>Nama</th>
        <th>IPK</th>
        <th>Prestasi</th>
        <th>Penghasilan Orang Tua</th>
        <th>Semester</th>
        <th>Skor Total</th>
    </tr>
    <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($mhs['nama']); ?></td>
        <td><?php echo e($mhs['ipk']); ?></td>
        <td><?php echo e($mhs['prestasi']); ?></td>
        <td>Rp<?php echo e(number_format($mhs['penghasilan_ortu'])); ?></td>
        <td><?php echo e($mhs['semester']); ?></td>
        <td><?php echo e(number_format($mhs['skor_total'], 2)); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<a href="<?php echo e(route('beasiswa.ranking')); ?>">Lihat Ranking →</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\UTS-LARAVEL\uts-beasiswa\resources\views/beasiswa/hitung.blade.php ENDPATH**/ ?>