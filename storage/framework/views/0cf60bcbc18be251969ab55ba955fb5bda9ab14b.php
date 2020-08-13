
<?php $__env->startSection('title','Mahasiswa Page'); ?>
<?php $__env->startSection('bread1','Mahasiswa'); ?>
<?php $__env->startSection('bread2','Data'); ?>
<?php $__env->startSection('content'); ?>
<h3>Form Mahasiswa</h3><hr>
<?php echo $__env->make('layouts.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<form action="/mhs/store" method="POST">
<?php echo csrf_field(); ?>
<div class="form-group row">
<label for="nim" class="col-sm-12">NIM</label>
<div class="col-sm-3">
<input type="text" name="nim" class="form-control" id="nim"
placeholder="Nomor Induk Mahasiswa">
<?php $__errorArgs = ['nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small id="nim" class="form-text text-danger"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
</div>
<div class="form-group row">
  <label for="nim" class="col-sm-12">Nama Lengkap</label>
  <div class="col-sm-5">
  <input type="text" name="nama_lengkap" class="form-control"
  id="nama_lengkap" placeholder="Masukan nama dengan benar">

  <?php $__errorArgs = ['nama_lengkap'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small id="nama_lengkap" class="form-text text-
  danger"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

  </div>
  </div>
  <div class="form-group row">
  <label for="nim" class="col-sm-12">Program Studi</label>
  <div class="col-sm-3">
  <select name="prodi" id="prodi" class="form-control">
  <?php $__currentLoopData = $prodi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <option value="<?php echo e($item->kode_prodi); ?>"><?php echo e($item->nama_prodi); ?></option>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </select>
  <small id="nama" class="form-text text-muted"></small>
  </div>
  </div>
  <div class="form-group row">
  <label for="nim" class="col-sm-12">Alamat</label>
  <div class="col-sm-8">
  <textarea name="alamat" class="form-control" id="alamat"></textarea>
  <small id="nama" class="form-text text-muted"></small>
  </div>
  </div>
  <button class="btn btn-primary" type="submit">Simpan</button>
  <a href="<?php echo e(url()->previous()); ?>" class="btn btn-danger">Batal</a>
  </form>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\RAMADHANI\SEMESTER 6\web lanjutan\UAS WEB\kelas f\1755201343DEWI\resources\views/mahasiswa/create.blade.php ENDPATH**/ ?>