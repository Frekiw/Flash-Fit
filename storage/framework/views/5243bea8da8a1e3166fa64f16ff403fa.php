
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
                  <div class="d-flex justify-content-end align-items-center pb-3 pt-1">
                    <a href="<?php echo e(route('faildebits.index')); ?>" class="btn btn-danger">Daftar Fail Debit</a>
                  </div>
                  <div class="mdc-card">
                    <div class="d-flex justify-content-between align-items-center py-2 pb-4 ">
                        <h6 class="card-title card-padding pb-0">Data Member</h6>
                        <div class="d-flex justify-content-center align-items-center ">
                            <a href="<?php echo e(route('participants.create')); ?>" type="button" class="btn btn-info mx-2"><small>Tambah Data</small></a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="example1" class="table display">
                            <thead>
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">MGM</th>
                                    <th class="text-center">Points</th>
                                    <th class="text-center">Code</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Lahir</th>
                                    <th class="text-center">Lokasi</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $__empty_1 = true; $__currentLoopData = $participant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center"><?php echo e($item->id_participant); ?></td>
                                    <td class="text-center"><?php echo e($totalMgm[$item->id_participant] ?? 0); ?></td>
                                    <td class="text-center"><div class="bg-warning text-center rounded-circle d-flex justify-content-center align-items-center mx-auto" style="width: 40px; height:40px;"><small class="fw-bold"><?php echo e($item->point); ?></small></div></td>
                                    <td class="text-center">
                                        <?php echo e($item->code); ?>

                                    </td>
                                    <td class="text-center">
                                        <?php echo e($item->name); ?>

                                    </td>
                                    <td class="text-center">
                                        <?php echo e($item->email); ?>

                                    </td>
                                    <td class="text-center"><?php echo e($item->tgl_lahir); ?></td>
                                    <td class="text-center">
                                      <?php if($item->location_id == "All Club" ): ?>
                                      <?php echo e($item->location_id); ?>

                                      <?php else: ?>
                                      <?php echo e($item->location->name); ?>

                                      <?php endif; ?>
                                    </td>
                                    <td class="text-center"><?php echo e($item->no_telp); ?></td>
                                    <td>
                                     <div class="d-flex justify-content-center align-items-center">
                                      <a type="button" href="<?php echo e(route('participants.edit',$item-> id_participant)); ?>" class="mdc-button mdc-button--outlined shaped-button outlined-button--edit mdc-ripple-upgraded mx-2"> Edit </a>
                                      <form action="<?php echo e(route('participants.destroy', $item-> id_participant)); ?>" onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" method="POST">
                                        <?php echo method_field('delete') . csrf_field(); ?>

                                        <button type="submit"  class="mdc-button mdc-button--outlined shaped-button outlined-button--delete mdc-ripple-upgraded mx-2"> Delete </button>
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
                                  <th class="text-center">MGM</th>
                                  <th class="text-center">Points</th>
                                  <th class="text-center">Code</th>
                                  <th class="text-center">Nama</th>
                                  <th class="text-center">Email</th>
                                  <th class="text-center">Lahir</th>
                                  <th class="text-center">Lokasi</th>
                                  <th class="text-center">Phone</th>
                                  <th class="text-center">Actions</th>
                              </tr>
                          </tfoot>
                        </table>
                    </div>
                </div>
                <section id="mempresences">
                  <div class="container mt-5">
                    <div class="mdc-card">
                      <div class="d-flex justify-content-between align-items-center py-2 pb-4 ">
                          <h6 class="card-title card-padding pb-0">Data Member Presences</h6>
                      </div>
                      <div class="table-responsive">
                          <table id="example2" class="table display">
                              <thead>
                                  <tr>
                                      <th class="text-center">Nomor</th>
                                      <th class="text-center">Nama Member</th>
                                      <th class="text-center">Tanggal</th>
                                      <th class="text-center">Waktu</th>
                                      <th class="text-center">Lokasi</th>
                                      <th class="text-center">Actions</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $presence; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                  <tr>
                                      <td class="text-center"><?php echo e($itemss->id_presence); ?></td>
                                      <td class="text-center"><?php echo e($itemss->user->name); ?></td>
                                      <td class="d-flex align-items-center justify-content-center">
                                        <?php echo e($itemss->date); ?>

                                      </td>
                                      <td class="text-center">
                                          <?php echo e($itemss->time); ?>

                                      </td>
                                      <td class="text-center">
                                          <?php echo e($itemss->location->name); ?>

                                      </td>
                                      <td>
                                       <div class="d-flex justify-content-center align-items-center">
                                        <form action="<?php echo e(route('participants.hapus', $itemss->id_presence)); ?>" onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" method="POST">
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
                                    <th class="text-center">Nama Member</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Waktu</th>
                                    <th class="text-center">Lokasi</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </tfoot>
                          </table>
                      </div>
                    </div>
                  </div>
                </section>
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
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/fixedheader/4.0.1/js/dataTables.fixedHeader.js"></script>
<script src="https://cdn.datatables.net/fixedheader/4.0.1/js/fixedHeader.dataTables.js"></script>
<script>
  new DataTable('#example1', {
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
  new DataTable('#example2', {
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
<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\flashfit\resources\views/participants/index.blade.php ENDPATH**/ ?>