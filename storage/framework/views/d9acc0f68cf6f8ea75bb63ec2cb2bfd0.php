
<?php $__env->startSection('admincontent'); ?>
<div class="page-wrapper mdc-toolbar-fixed-adjust">
  <main class="content-wrapper">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('tncs.index')); ?>">Terms And Condition</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Terms And Condition</li>
      </ol>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h4>Terms And Condition</h4>
                  <?php $__currentLoopData = $tnc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <form action="<?php echo e(route('tncs.update', $item->id_tnc)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <button type="submit" class="btn btn-success my-3">Submit</button>
                </div>
                <div class="card-body">
                    <label for="notes" class="fw-bold mt-3">Required</label>
                    <div class="w-100">
                      <textarea class="form-control" name="required" id="notes" value="<?php echo e(old('required') ?? $item->required); ?>" placeholder="Masukkan Narasi"><?php echo e($item->required); ?></textarea>
                    </div>
                    <label for="notes" class="fw-bold mt-3">Policy</label>
                    <div class="w-100">
                      <textarea class="form-control" name="policy" id="notes2" value="<?php echo e(old('policy') ?? $item->policy); ?>" placeholder="Masukkan Narasi"><?php echo e($item->policy); ?></textarea>
                    </div>
                </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>             
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
      .create(document.querySelector('#notes'))
      .catch(error => {
        console.error(error);
      });
  });
     document.addEventListener("DOMContentLoaded", function() {
    ClassicEditor
      .create(document.querySelector('#notes2'))
      .catch(error => {
        console.error(error);
      });
  });

</script>




</body>

<!-- Mirrored from demo.bootstrapdash.com/caroline/template/demo_1/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 03:20:08 GMT -->
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\flashfit\resources\views/tncs/edit.blade.php ENDPATH**/ ?>