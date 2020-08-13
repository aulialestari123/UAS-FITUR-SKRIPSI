

<?php $__env->startSection('title','Mahasiswa Page'); ?>
<?php $__env->startSection('bread1','Mahasiswa'); ?>
<?php $__env->startSection('bread2','Data'); ?>

<?php $__env->startSection('content'); ?>
<h3>Master Data Mahasiswa</h3>
<p><a href="/mhs/create" class="btn btn-success btn-sm">Tambah</a></p>
<?php echo $__env->make('layouts.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <table class="table table-striped" id="mhs-table">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Prodi</th>
                <th>Alamat</th>
                <th>Pilihan</th>
            </tr>
        </thead>
    </table>

    <script>
        $(function() {
            $('#mhs-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "<?php echo e(route('mhs.list')); ?>",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'nim', name: 'nim' },
                { data: 'nama_lengkap', name: 'nama_lengkap' },
                { data: 'mprodi.nama_prodi', name: 'nama_prodi' },
                { data: 'alamat', name: 'alamat' },
                { data: 'action', name: 'action', orderable: false,
                searchable: false }
            ]
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\RAMADHANI\SEMESTER 6\web lanjutan\UAS WEB\kelas f\1755201343DEWI\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>