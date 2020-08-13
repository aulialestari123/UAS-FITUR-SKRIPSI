
<?php $__env->startSection('title','Skripsi Page'); ?>
<?php $__env->startSection('bread1','Skripsi'); ?>
<?php $__env->startSection('bread2','Data'); ?>
<?php $__env->startSection('content'); ?>
  <h3>Master Data Skripsi</h3>
  <p><a href="/skripsi/create" class="btn btn-success btn-sm">Tambah</a></p>
    <?php echo $__env->make('layouts.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <table class="table table-striped" id="mhs-table">
    <thead>
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Judul</th>
        <th>Tempat Penelitian</th>
        <th>Alamat</th>
        <th>Pilihan</th>
      </tr>
    </thead>
    <tbody>
      <?php $__empty_1 = true; $__currentLoopData = $skripsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <tr>
        <td><?php echo e($loop->index +1); ?></td>
        <td><?php echo e($item->nim); ?></td>
        <td><?php echo e($item->nama_mahasiswa); ?></td>
        <td><?php echo e($item->judul); ?></td>
        <td><?php echo e($item->tempat_penelitian); ?></td>
        <td><?php echo e($item->alamat); ?></td>
        <td class="d-flex">
          <a href="<?php echo e(route('skripsi.edit', $item->id)); ?>" class="btn btn-success px-2 py-1 mr-2">Edit</a>
          <form action="<?php echo e(route('skripsi.destroy', $item->id)); ?>" method="post">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\RAMADHANI\SEMESTER 6\web lanjutan\UAS WEB\kelas f\1755201343DEWI\resources\views/skripsi/index.blade.php ENDPATH**/ ?>