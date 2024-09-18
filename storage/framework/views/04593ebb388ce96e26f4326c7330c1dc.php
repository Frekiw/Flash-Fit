
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
  <main class="content-wrapper">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Jadwal Training</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('jadwal_trainings.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group mt-3">
                        <label for="user_id">Nama Member</label>
                        <select name="user_id" id="user_id" class="form-control select2" required>
                            <option value="">Pilih Member</option>
                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($usr->id); ?>">
                                <?php echo e($usr->name); ?>

                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <label for="notes" class=" mt-3">Detail Sesi</label>
                    <div class="input-group input-group-outline w-100">
                        <select class="form-control w-100" name="detail_sesi" id="detail_sesi">
                            <option value="" disabled selected>Masukkan Detail Sesi</option>
                            <option value="Basic 1 (2 Sesi)">Basic 1 (2 Sesi)</option>
                            <option value="Basic 2 (2 Sesi)">Basic 2 (2 Sesi)</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="notes" class="mt-3">Sesi 1</label>
                            <div class="d-flex">
                                <select class="form-control" name="day1" id="day1">
                                    <option value="Minggu">Minggu</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                  </select>
                                <input class="form-control" type="time" name="time1" id="time1" placeholder="Masukkan Time 1">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="notes" class="mt-3">Sesi 2</label>
                            <div class="d-flex">
                                <select class="form-control" name="day2" id="day2">
                                    <option value="Minggu">Minggu</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                  </select>
                                <input class="form-control" type="time" name="time2" id="time2" placeholder="Masukkan Time 2">
                            </div>
                        </div>
                    </div>
                    <textarea class="d-none" type="text" value="" id="schedule" name="schedule"></textarea>
                    <div class="form-group mt-3">
                        <label for="trainer_id">Nama Trainer</label>
                        <select name="trainer_id" id="trainer_id" class="form-control select2">
                            <option value="">Pilih trainer</option>
                            <?php $__currentLoopData = $participant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trainer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($trainer->id_participant); ?>">
                                <?php echo e($trainer->name); ?>

                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
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
                        <h6 class="card-title card-padding pb-0">Data Jadwal Training</h6>
                        <div class="d-flex justify-content-center align-items-center ">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-info mx-2"><small>Tambah Data</small></button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="table display">
                            <thead>
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Detail</th>
                                    <th class="text-center">Jadwal</th>
                                    <th class="text-center">Trainer</th>
                                    <th class="text-center">Sisa Sesi</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $__empty_1 = true; $__currentLoopData = $jadwal_training; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal_trainings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center"><?php echo e($jadwal_trainings->id_jadwaltraining); ?></td>
                                    <td class="text-center">
                                      <?php echo e($jadwal_trainings->user->name); ?>

                                    </td>
                                    <td class="text-center">
                                      <?php echo e($jadwal_trainings->detail_sesi); ?>

                                    </td>
                                    <td class="text-center">
                                      <?php echo e($jadwal_trainings->schedule); ?>

                                    </td>
                                    <td class="text-center">
                                      <?php if($jadwal_trainings->trainer_id == null): ?>
                                      <div class="text-secondary">
                                        Belum Ada
                                      </div>
                                      <?php else: ?>
                                      <div class="btn btn-primary rounded-pill">
                                        <small><?php echo e($jadwal_trainings->participant->name); ?></small>
                                      </div>
                                      <?php endif; ?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo e($jadwal_trainings->sisa_sesi); ?>

                                      </td>
                                    <td>
                                     <div class="d-flex justify-content-center align-items-center">
                                      <a type="button" data-bs-toggle="modal" data-bs-target="#EditModal<?php echo e($jadwal_trainings->id_jadwaltraining); ?>" class="mdc-button mdc-button--outlined shaped-button outlined-button--edit mdc-ripple-upgraded mx-2"> Edit </a>
                                      <form action="<?php echo e(route('jadwal_trainings.destroy',$jadwal_trainings->id_jadwaltraining)); ?>" onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" method="POST">
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
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Detail</th>
                                    <th class="text-center">Jadwal</th>
                                    <th class="text-center">Trainer</th>
                                    <th class="text-center">Sisa Sesi</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__currentLoopData = $jadwal_training; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal_trainings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="modal fade" id="EditModal<?php echo e($jadwal_trainings->id_jadwaltraining); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Jadwal Training</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="<?php echo e(route('jadwal_trainings.update', $jadwal_trainings->id_jadwaltraining)); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="form-group mt-3">
                    <label for="user_id">Nama Member</label>
                    <select name="user_id" id="user_id" class="form-control select2" required>
                        <option value="">Pilih Member</option>
                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($usr->id); ?>" <?php echo e($jadwal_trainings->user_id == $usr->id ? 'selected' : ''); ?>>
                            <?php echo e($usr->name); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <label for="notes" class=" mt-3">Detail Sesi</label>
                <div class="input-group input-group-outline w-100">
                    <select class="form-control w-100" name="detail_sesi" id="detail_sesi">
                        <option value="" disabled selected>Masukkan Detail Sesi</option>
                        <option value="Basic 1 (2 Sesi)" <?php echo e($jadwal_trainings->detail_sesi == 'Basic 1 (2 Sesi)' ? 'selected' : ''); ?>>Basic 1 (2 Sesi)</option>
                        <option value="Basic 2 (2 Sesi)" <?php echo e($jadwal_trainings->detail_sesi == 'Basic 2 (2 Sesi)' ? 'selected' : ''); ?>>Basic 2 (2 Sesi)</option>
                    </select>
                </div>
                <label for="notes" class=" mt-3">Jadwal Training</label>
                <textarea class="form-control" type="text" value="<?php echo e(old('schedule') ?? $jadwal_trainings->schedule); ?>" id="schedule" name="schedule"><?php echo e($jadwal_trainings->schedule); ?></textarea>
                <div class="form-group mt-3">
                    <label for="trainer_id">Nama Trainer</label>
                    <select name="trainer_id" id="trainer_id" class="form-control select2">
                        <option value="">Pilih trainer</option>
                        <?php $__currentLoopData = $participant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trainer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($trainer->id_participant); ?>" <?php echo e($jadwal_trainings->trainer_id == $trainer->id_participant ? 'selected' : ''); ?>>
                            <?php echo e($trainer->name); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>  
                <button type="submit" class="btn btn-warning my-3">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
<script>
    function updateSchedule() {
        var day1 = document.getElementById('day1').value;
        var time1 = document.getElementById('time1').value;
        var day2 = document.getElementById('day2').value;
        var time2 = document.getElementById('time2').value;

        var schedule = day1 + ' - ' + time1 + '\\n' +
                       day2 + ' - ' + time2; 

        document.getElementById('schedule').value = schedule;
    }

    // Update schedule field on any change in day or time fields
    document.getElementById('day1').addEventListener('change', updateSchedule);
    document.getElementById('time1').addEventListener('change', updateSchedule);
    document.getElementById('day2').addEventListener('change', updateSchedule);
    document.getElementById('time2').addEventListener('change', updateSchedule);
</script>




</body>

<!-- Mirrored from demo.bootstrapdash.com/caroline/template/demo_1/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 03:20:08 GMT -->
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\flashfit\resources\views/jadwal_trainings/index.blade.php ENDPATH**/ ?>