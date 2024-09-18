
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Sales</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('saless.store')); ?>" method="post" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <label for="time" class=" mt-3">Name</label>
                  <div class="input-group input-group-outline w-100">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan name">
                  </div>
                  <label for="time" class=" mt-3">Nomor Telefon</label>
                  <div class="input-group input-group-outline w-100">
                      <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="Masukkan no_telp">
                  </div>
                  <button type="submit" class="btn btn-success my-3">Submit</button>
                </form>
            </div>
          </div>
        </div>
    </div>
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
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                    <div class="d-flex justify-content-between align-items-center py-2 pb-4 ">
                        <h6 class="card-title card-padding pb-0">Data Sales</h6>
                        <div class="d-flex justify-content-center align-items-center ">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-info mx-2"><small>Tambah Data</small></button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="table display">
                            <thead>
                                <tr>
                                    <th class="">Nomor</th>
                                    <th class="">Nama</th>
                                    <th class="">Nomor Telepon</th>
                                    <th class="">Code Sales</th>
                                    <th class="">Total Client</th>
                                    <th class="">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $__empty_1 = true; $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class=""><?php echo e($item->id_sales); ?></td>
                                    <td class="">
                                      <?php echo e($item->name); ?>

                                    </td>
                                    <td class="">
                                        <?php echo e($item->no_telp); ?>

                                    </td>
                                    <td class="">
                                        <?php echo e($item->code_sales); ?>

                                    </td>
                                    <td class="text-center">
                                        <div class="btn btn-warning rounded">
                                          <?php echo e($item->Total_client); ?>

                                        </div>
                                    </td>
                                    <td>
                                     <div class="d-flex align-items-center">
                                      <a type="button" data-bs-toggle="modal" data-bs-target="#EditModal<?php echo e($item->id_sales); ?>" class="mdc-button mdc-button--outlined shaped-button outlined-button--edit mdc-ripple-upgraded mx-2"> Edit </a>
                                      <form action="<?php echo e(route('saless.destroy', $item->id_sales)); ?>" onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" method="POST">
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
                                  <th class="">Nomor</th>
                                  <th class="">Nama</th>
                                  <th class="">Nomor Telepon</th>
                                  <th class="">Code Sales</th>
                                  <th class="">Total Client</th>
                                  <th class="">Actions</th>
                              </tr>
                          </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__empty_1 = true; $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<div class="modal fade" id="EditModal<?php echo e($item->id_sales); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Sales</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form action="<?php echo e(route('saless.update', $item->id_sales)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <label for="name" class="mt-3">Name</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="text" value="<?php echo e(old('name', $item->name)); ?>" name="name" class="form-control" id="name" placeholder="Masukkan name">
                    </div>
                    <label for="no_telp" class="mt-3">Nomor Telefon</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="text" value="<?php echo e(old('no_telp', $item->no_telp)); ?>" name="no_telp" class="form-control" id="no_telp" placeholder="Masukkan no_telp">
                    </div>
                    <button type="submit" class="btn btn-success my-3">Submit</button>
                  </form>
              </div>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<?php endif; ?>

  <!-- partial:admindashboard/admindashboard/partials/_footer.html -->
  <footer>
    
  </footer>

  <!-- partial -->
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
<!-- endinject -->
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

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
<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\flashfit\resources\views/saless/index.blade.php ENDPATH**/ ?>