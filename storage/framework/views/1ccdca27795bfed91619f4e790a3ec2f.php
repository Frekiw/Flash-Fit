
<?php $__env->startSection('admincontent'); ?>
<div class="page-wrapper mdc-toolbar-fixed-adjust">
  <main class="content-wrapper">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('settings.index')); ?>">Setting</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Setting</li>
      </ol>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4>Terms And Condition</h4>
                  <?php $__currentLoopData = $setting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <form action="<?php echo e(route('settings.update', $item->id_setting)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <button type="submit" class="btn btn-success my-3">Submit</button>
                </div>
                <div class="card-body">
                  <label for="notes" class="fw-bold mt-3">Tnc Daftar 1</label>
                  <div class="w-100">
                      <textarea class="form-control w-100" value="<?php echo e(old('tnc_daftar1') ?? $item->tnc_daftar1); ?>" name="tnc_daftar1" id="notes" placeholder="Masukkan Tnc Daftar"><?php echo e($item->tnc_daftar1); ?></textarea>
                  </div>
                  <label for="notes" class="fw-bold mt-3">Tnc Daftar 2</label>
                  <div class="w-100">
                      <textarea class="form-control w-100" value="<?php echo e(old('tnc_daftar2') ?? $item->tnc_daftar2); ?>" name="tnc_daftar2" id="notes2" placeholder="Masukkan Tnc Daftar"><?php echo e($item->tnc_daftar2); ?></textarea>
                  </div>
                  <label for="notes" class="fw-bold mt-3">Tnc Daftar 3</label>
                  <div class="w-100">
                      <textarea class="form-control w-100" value="<?php echo e(old('tnc_daftar3') ?? $item->tnc_daftar3); ?>" name="tnc_daftar3" id="notes3" placeholder="Masukkan Tnc Daftar"><?php echo e($item->tnc_daftar3); ?></textarea>
                  </div>
                  <label for="notes" class="fw-bold mt-3">Tnc Personal Trainer</label>
                  <div class="w-100">
                      <textarea class="form-control w-100" value="<?php echo e(old('tnc_pt') ?? $item->tnc_pt); ?>" name="tnc_pt" id="notes4" placeholder="Masukkan Tnc Daftar"><?php echo e($item->tnc_pt); ?></textarea>
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
  ClassicEditor
  .create(document.querySelector('#notes3'))
  .catch(error => {
  console.error(error);
  });
  ClassicEditor
  .create(document.querySelector('#notes4'))
  .catch(error => {
  console.error(error);
  });
  ClassicEditor
  .create(document.querySelector('#notes5'))
  .catch(error => {
  console.error(error);
  });
</script>



</body>

<!-- Mirrored from demo.bootstrapdash.com/caroline/template/demo_1/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 03:20:08 GMT -->
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\flashfit\resources\views/settings/edit.blade.php ENDPATH**/ ?>