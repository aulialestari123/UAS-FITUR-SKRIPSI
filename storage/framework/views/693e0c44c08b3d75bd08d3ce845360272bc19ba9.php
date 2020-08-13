
<?php $__env->startSection('title','Prodi Page'); ?>
<?php $__env->startSection('bread1','Prodi'); ?>
<?php $__env->startSection('bread2','Data'); ?>
<?php $__env->startSection('content'); ?>
<h3>Form Prodi</h3><hr>
<?php echo $__env->make('layouts.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<form action="<?php echo e(route('prodi.store')); ?>" method="POST">
<?php echo csrf_field(); ?>
<div class="form-group row">
  <label for="kode_prodi" class="col-sm-12">Kode Prodi</label>
    <div class="col-sm-3">
    <input type="text" name="kode_prodi" class="form-control" id="kode_prodi"
    placeholder="Masukan kode prodi">
    <?php $__errorArgs = ['kode_prodi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <small id="kode_prodi" class="form-text text-danger">
      <?php echo e($message); ?>

    </small>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
</div>
<div class="form-group row">
  <label for="nama_prodi" class="col-sm-12">Nama Prodi</label>
  <div class="col-sm-5">
  <input type="text" name="nama_prodi" class="form-control" id="nama_prodi" placeholder="Masukan nama prodi">
    <?php $__errorArgs = ['nama_prodi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <small id="nama_prodi" class="form-text text-danger">
        <?php echo e($message); ?>

      </small>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
</div>
<div class="form-group row">
  <label for="kaprodi" class="col-sm-12">Kaprodi</label>
  <div class="col-sm-5">
  <input type="text" name="kaprodi" class="form-control" id="kaprodi" placeholder="Masukan Nama Kaprodi">
    <?php $__errorArgs = ['kaprodi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <small id="kaprodi" class="form-text text-danger">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\RAMADHANI\SEMESTER 6\web lanjutan\UAS WEB\kelas f\1755201343DEWI\resources\views/prodi/create.blade.php ENDPATH**/ ?>