
<?php $__env->startSection('admincontent'); ?>
<div class="page-wrapper mdc-toolbar-fixed-adjust">
  <main class="content-wrapper">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-style1">
        <li class="breadcrumb-item">
          <a href="<?php echo e(route('dashboard')); ?>">
              <i class="fa fa-home text-success"></i>
          </a>
        </li>
        <li class="breadcrumb-item">
          <a class="" href="<?php echo e(route('packageds.index')); ?>">Packaged</a>
        </li>
        <li class="breadcrumb-item active text-secondary">
          <i>Tambah Data Packaged</i>
        </li>
      </ol>
    </nav>
    <div class="container">
        <div class="row my-3">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h4>Tambah Data Cuti</h4>
                </div>
                <div class="card-body">
                  <form action="<?php echo e(route('packageds.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <label for="title" class=" mt-3">Category</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="text" name="category" class="form-control" id="category" placeholder="Masukkan Kategori Paket" >
                    </div>
                
                    <label for="time" class=" mt-3">Name</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama Paket">
                    </div>
                    <label for="time" class=" mt-3">Total Harga</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="text" name="price" class="form-control" id="price" placeholder="Masukkan Total Harga">
                    </div>
                    <label for="time" class=" mt-3">Benefit</label>
                    <div class="input-group input-group-outline w-100">
                        <textarea type="text" name="benefit" class="form-control" id="benefit" placeholder="Masukkan Benefit Paket"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success my-3">Submit</button>
                  </form>
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
<!-- endinject -->
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
  ClassicEditor
    .create(document.querySelector('#benefit'))
    .catch(error => {
      console.error(error);
    });
});
</script>



</body>

<!-- Mirrored from demo.bootstrapdash.com/caroline/template/demo_1/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 03:20:08 GMT -->
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\flashfit\resources\views/packageds/create.blade.php ENDPATH**/ ?>