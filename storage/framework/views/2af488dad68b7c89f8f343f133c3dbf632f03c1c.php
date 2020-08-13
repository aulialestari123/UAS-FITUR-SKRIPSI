
<?php $__env->startSection('title','Skripsi Page'); ?>
<?php $__env->startSection('bread1','Skripsi'); ?>
<?php $__env->startSection('bread2','Data'); ?>
<?php $__env->startSection('content'); ?>
<h3>Form Skripsi</h3><hr>
<?php echo $__env->make('layouts.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<form action="<?php echo e(route('skripsi.store')); ?>" method="POST">
<?php echo csrf_field(); ?>
<div class="form-group row">
  <label for="nim" class="col-sm-12">NIM</label>
    <div class="col-sm-3">
    <input type="text" name="nim" class="form-control" id="nim"
    placeholder="Masukan kode skripsi">
    <?php $__errorArgs = ['nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <small id="nim" class="form-text text-danger">
      <?php echo e($message); ?>

    </small>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
</div>
<div class="form-group row">
  <label for="nama_mahasiswa" class="col-sm-12">Nama Mahasiswa</label>
  <div class="col-sm-5">
  <input type="text" name="nama_mahasiswa" class="form-control" id="nama_mahasiswa" placeholder="Masukan nama skripsi">
    <?php $__errorArgs = ['nama_mahasiswa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <small id="nama_mahasiswa" class="form-text text-danger">
        <?php echo e($message); ?>

      </small>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
</div>
<div class="form-group row">
  <label for="judul" class="col-sm-12">Judul Penelitian</label>
  <div class="col-sm-5">
  <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukan Nama judul">
    <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <small id="judul" class="form-text text-danger">
        <?php echo e($message); ?>

      </small>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
</div>
<div class="form-group row">
  <label for="tempat_penelitian" class="col-sm-12">Tempat Penelitian</label>
  <div class="col-sm-8">
  <input type="text" name="tempat_penelitian" class="form-control" id="tempat_penelitian" placeholder="Masukan Nama tempat_penelitian">
    <?php $__errorArgs = ['tempat_penelitian'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <small id="tempat_penelitian" class="form-text text-danger">
        <?php echo e($message); ?>

      </small>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
</div>
<div class="form-group row">
  <label for="tempat_penelitian" class="col-sm-12">Tempat Penelitian</label>
  <div class="col-sm-5">
  <textarea name="alamat" id="alamat" class="form-control"></textarea>
    <?php $__errorArgs = ['tempat_penelitian'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <small id="tempat_penelitian" class="form-text text-danger">
        <?php echo e($message); ?>

      </small>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
</div>
  <button class="btn btn-primary" type="submit">Simpan</button>
  <a href="<?php echo e(url()->previous()); ?>" class="btn btn-danger">Batal</a>
</form>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\RAMADHANI\SEMESTER 6\web lanjutan\UAS WEB\kelas f\1755201343DEWI\resources\views/skripsi/create.blade.php ENDPATH**/ ?>