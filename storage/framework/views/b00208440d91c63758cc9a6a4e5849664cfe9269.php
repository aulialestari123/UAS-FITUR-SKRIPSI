
<?php $__env->startSection('title','Prodi Page'); ?>
<?php $__env->startSection('bread1','Prodi'); ?>
<?php $__env->startSection('bread2','Data'); ?>
<?php $__env->startSection('content'); ?>
  <h3>Master Data Prodi</h3>
  <p><a href="/prodi/create" class="btn btn-success btn-sm">Tambah</a></p>
    <?php echo $__env->make('layouts.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <table class="table table-striped" id="mhs-table">
    <thead>
      <tr>
        <th>No</th>
        <th>Kode Prodi</th>
        <th>Nama Prodi</th>
        <th>Kaprodi</th>
        <th>Pilihan</th>
      </tr>
    </thead>
    <tbody>
      <?php $__empty_1 = true; $__currentLoopData = $prodi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <tr>
        <td><?php echo e($loop->index + 1); ?></td>
        <td><?php echo e($item->kode_prodi); ?></td>
        <td><?php echo e($item->nama_prodi); ?></td>
        <td><?php echo e($item->kaprodi); ?></td>
        <td class="d-flex">
          <a href="<?php echo e(route('prodi.edit', $item->kode_prodi)); ?>" class="btn btn-warning px-2 py-1 mr-2">Edit</a>
          <form action="<?php echo e(route('prodi.destroy', $item->kode_prodi)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field("delete"); ?>
            <button type="submit" class="btn btn-danger px-2 py-1">Hapus</button>
          </form>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <tr>
            <td colspan="6" class="text-center">Data masih kosong</td>
          </tr>
      <?php endif; ?>
    </tbody>
  </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\RAMADHANI\SEMESTER 6\web lanjutan\UAS WEB\kelas f\1755201343DEWI\resources\views/prodi/index.blade.php ENDPATH**/ ?>