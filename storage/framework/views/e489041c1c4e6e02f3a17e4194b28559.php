
<?php $__env->startSection('admincontent'); ?>
<style>
    .mdc-button.outlined-button--delete:not(:disabled) {
      border-color: #ee0000 !important;
    }
    .mdc-button.outlined-button--delete:not(:disabled) {
      color: #ee0000 !important;
    }
    .mdc-button.outlined-button--edit:not(:disabled) {
      border-color: #00ee47 !important;
    }
    .mdc-button.outlined-button--edit:not(:disabled) {
      color: #00ee47 !important;
    }
  </style>
<div class="page-wrapper mdc-toolbar-fixed-adjust">
  <main class="content-wrapper">
    <?php if(session('status')): ?>
                <div class="row">
                    <div class="col-md-4 ms-auto">
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <?php echo e(session('status')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Notification</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('notifications.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="notes" class=" mt-3">Kategori</label>
                            <div class="input-group input-group-outline w-100">
                                <select class="form-control w-100" name="category" id="category">
                                    <option value="" disabled selected>Masukkan Category</option>
                                    <option value="Kelas">Kelas</option>
                                    <option value="Membership">Membership</option>
                                    <option value="Transaksi">Transaksi</option>
                                    <option value="Voucher">Voucher</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="notes" class="fw-bold mt-3">Judul</label>
                            <div class="input-group input-group-outline">
                                <input class="form-control w-100" name="title" id="title" placeholder="Masukkan Judul">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="notes" class="fw-bold mt-3">Deskripsi</label>
                            <div class="input-group input-group-outline">
                                <input class="form-control w-100" name="description" id="description" placeholder="Masukkan Deskripsi">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="notes" class="fw-bold mt-3">Author</label>
                            <div class="input-group input-group-outline">
                                <input class="form-control w-100" name="author" id="author" placeholder="Masukkan Author">
                            </div>
                        </div>
                    </div>
                    <label for="nama" class="fw-bold mt-3">Tanggal</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="date" name="date" class="form-control" id="date" placeholder="Masukkan Tanggal">
                    </div>  
                    <button type="submit" class="btn btn-warning my-3">Submit</button>
                    </form>
            </div>
          </div>
        </div>
    </div>
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                    <div class="d-flex justify-content-between align-items-center py-2 pb-4 ">
                        <h6 class="card-title card-padding pb-0">Data notification</h6>
                        <div class="d-flex justify-content-center align-items-center ">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-info mx-2"><small>Tambah Data</small></button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="table display">
                            <thead>
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Kategori</th>
                                    <th class="text-center">Judul</th>
                                    <th class="text-center">Deskripsi</th>
                                    <th class="text-center">Author</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $__empty_1 = true; $__currentLoopData = $notification; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notifications): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center"><?php echo e($notifications->id_notification); ?></td>
                                    <td class="text-center"><?php echo e($notifications->category); ?></td>
                                    <td class="text-center"><?php echo e($notifications->title); ?></td>
                                    <td class="text-center"><?php echo e($notifications->description); ?></td>
                                    <td class="text-center"><?php echo e($notifications->author); ?></td>
                                    <td class="text-center"><?php echo e($notifications->date); ?></td>
                                    <td>
                                     <div class="d-flex justify-content-center align-items-center">
                                      <a type="button" data-bs-toggle="modal" data-bs-target="#EditModal<?php echo e($notifications->id_notification); ?>" class="mdc-button mdc-button--outlined shaped-button outlined-button--edit mdc-ripple-upgraded mx-2"> Edit </a>
                                      <form action="<?php echo e(route('notifications.destroy',$notifications->id_notification)); ?>" onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" method="POST">
                                        <?php echo method_field('DELETE'); ?>

                                        <?php echo csrf_field(); ?>

                                        <button type="submit" class="mdc-button mdc-button--outlined shaped-button outlined-button--delete mdc-ripple-upgraded mx-2">Delete</button>
                                    </form>
                                     </div>
                                  </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Kategori</th>
                                    <th class="text-center">Judul</th>
                                    <th class="text-center">Deskripsi</th>
                                    <th class="text-center">Author</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__currentLoopData = $notification; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notifications): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="modal fade" id="EditModal<?php echo e($notifications->id_notification); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data notification</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="<?php echo e(route('notifications.update', $notifications->id_notification)); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="row">
                    <div class="col-md-6">
                        <label for="notes" class=" mt-3">Kategori</label>
                        <div class="input-group input-group-outline w-100">
                            <select class="form-control w-100" name="category" id="category">
                                <option value="" disabled <?php echo e(!$notifications->category ? 'selected' : ''); ?>>Masukkan Kategori</option>
                                <option value="Kelas" <?php echo e($notifications->category == 'Kelas' ? 'selected' : ''); ?>>Kelas</option>
                                <option value="Membership" <?php echo e($notifications->category == 'Membership' ? 'selected' : ''); ?>>Membership</option>
                                <option value="Transaksi" <?php echo e($notifications->category == 'Transaksi' ? 'selected' : ''); ?>>Transaksi</option>
                                <option value="Voucher" <?php echo e($notifications->category == 'Voucher' ? 'selected' : ''); ?>>Voucher</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="notes" class="fw-bold mt-3">Judul</label>
                        <div class="input-group input-group-outline">
                            <input class="form-control w-100" value="<?php echo e(old('title') ?? $notifications->title); ?>" name="title" id="title" placeholder="Masukkan Judul">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="notes" class="fw-bold mt-3">Deskripsi</label>
                        <div class="input-group input-group-outline">
                            <input class="form-control w-100" value="<?php echo e(old('description') ?? $notifications->description); ?>" name="description" id="description" placeholder="Masukkan Deskripsi">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="notes" class="fw-bold mt-3">Author</label>
                        <div class="input-group input-group-outline">
                            <input class="form-control w-100" value="<?php echo e(old('author') ?? $notifications->author); ?>" name="author" id="author" placeholder="Masukkan Author">
                        </div>
                    </div>
                </div>
                <label for="nama" class="fw-bold mt-3">Tanggal</label>
                <div class="input-group input-group-outline w-100">
                    <input type="date" value="<?php echo e(old('date') ?? $notifications->date); ?>" name="date" class="form-control" id="date" placeholder="Masukkan Tanggal">
                </div>  
                <button type="submit" class="btn btn-warning my-3">Submit</button>
                </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</main>
  <!-- partial:admindashboard/admindashboard/partials/_footer.html -->
  <footer>
    
  </footer>

  <!-- partial -->
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- plugins:js -->
<script src="<?php echo e(asset('admindashboard/assets/vendors/js/vendor.bundle.base.js')); ?>"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="<?php echo e(asset('admindashboard/assets/vendors/datatables/js/jquery.dataTables.min.js')); ?>"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="<?php echo e(asset('admindashboard/assets/js/material.js')); ?>"></script>
<script src="<?php echo e(asset('admindashboard/assets/js/misc.js')); ?>"></script>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/fixedheader/4.0.1/js/dataTables.fixedHeader.js"></script>
<script src="https://cdn.datatables.net/fixedheader/4.0.1/js/fixedHeader.dataTables.js"></script>
<script>
  new DataTable('#example', {
    initComplete: function () {
        this.api()
            .columns()
            .every(function () {
                let column = this;
                let title = column.footer().textContent;
 
                // Create input element
                let input = document.createElement('input');
                input.placeholder = title;
                column.footer().replaceChildren(input);
 
                // Event listener for user input
                input.addEventListener('keyup', () => {
                    if (column.search() !== this.value) {
                        column.search(input.value).draw();
                    }
                });
            });
    },
    fixedHeader: {
        footer: true
    }
});
</script>




</body>

<!-- Mirrored from demo.bootstrapdash.com/caroline/template/demo_1/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 03:20:08 GMT -->
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\flashfit\resources\views/notifications/index.blade.php ENDPATH**/ ?>