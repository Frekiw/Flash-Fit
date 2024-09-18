
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
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="container">
                    <div class="w-100 d-flex justify-content-between align-items-center pb-4 ">
                        <h4 class="card-title card-padding p-0 fw-bold">Data Packaged</h4>
                        <a href="<?php echo e(route('packageds.create')); ?>" type="button" class="btn btn-info ms-auto"><small>Tambah Data</small></a>
                    </div>
                    <div class="row">
                        <?php $__empty_1 = true; $__currentLoopData = $packaged; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-md-3 mb-4 px-2">
                            <div class="rounded-4 " style="height:100%; box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                                <div class="card-pck p-2">
                                    <div class="w-100 d-flex justify-content-between align-items-center">
                                        <div class="">
                                            <small><?php echo e($item->category); ?></small>
                                            <h6 class="fw-bold"><?php echo e($item->name); ?></h6>
                                        </div>
                                        <div class="ms-auto" style="width:20%">
                                            <img class="w-100 h-100 " style="filter:grayscale(1)" src="<?php echo e(asset('admindashboard/assets/images/logo.png')); ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 py-2">
                                    <div class="d-flex justify-content-start align-items-center px-2 card-bnft">
                                        <small class="lh-1 mt-2"><?php echo $item->benefit; ?></small>
                                    </div>
                                </div>
                                <div class="col-md-12 py-2">
                                    <div class="d-flex justify-content-start align-items-center border border-1 border-bottom px-2">
                                    </div>
                                </div>
                                <div class="col-md-12 py-1">
                                    <div class="px-2 mb-2">
                                        <div class="">
                                            <small class="text-secondary">Total harga</small>
                                            <h5 class="text-dark fw-bold"><?php echo e($item->price); ?></h5>
                                        </div>
                                        <div class="d-flex mb-2 p-0">
                                            <a href="<?php echo e(route('packageds.edit',$item-> id_packaged)); ?>" type="button" class="btn btn-success text-dark px-4 w-100 fw-bold"><small>Edit</small></a>
                                        </div>
                                        <div class="d-flex m-0 p-0">
                                            <form class="w-100" action="<?php echo e(route('packageds.destroy', $item->id_packaged)); ?>" onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" method="POST">
                                                <?php echo method_field('delete') . csrf_field(); ?>

                                                <button type="submit" class="btn btn-dark px-4 w-100"><small>Delete</small></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                    </div>
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
<script>
    ClassicEditor
    .create(document.querySelector('#notes'))
    .catch(error => {
    console.error(error);
    });
    ClassicEditor
    .create(document.querySelector('#notes2'))
    .catch(error => {
    console.error(error);
    });
</script>
</body>

<!-- Mirrored from demo.bootstrapdash.com/caroline/template/demo_1/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 03:20:08 GMT -->
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\flashfit\resources\views/packageds/index.blade.php ENDPATH**/ ?>