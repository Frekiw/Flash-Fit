
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
                    <div class="col-md-6">
                      <h4 class="card-title card-padding p-0 text-start fw-bold">Data Trainer</h4>
                    </div>
                    <div class="col-md-6">
                      <div class="d-flex justify-content-end align-items-center">
                        <a href="<?php echo e(route('participants.create')); ?>" type="button" class="btn btn-info me-2 "><small><i class="fas fa-plus"></i></small></a>
                          <button class="btn btn-dark me-2 owl-prev"><small><i class="fas fa-chevron-left"></i></small></button>
                          <button class="btn btn-dark me-2 owl-next"><small><i class="fas fa-chevron-right"></i></small></button>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="owl-carousel owl-trainer">
                      <?php $__empty_1 = true; $__currentLoopData = $participant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                      <div class="item">
                        <div class="col-md-3 mb-4 px-2 w-100">
                          <div class="rounded-4 card-trn">
                              <div class="p-2">
                                  <div class="p-2">
                                    <div class="position-relative" style="width: 100%; height: 127px;">
                                      <img class=" w-100 h-100 object-fit-cover rounded-4" style="object-position: top;" src="<?php echo e(asset('storage/'.$item->foto_trainer)); ?>" alt="">
                                      <div class="position-absolute rounded-4 overlay-pt2">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12 pt-2 ps-2">
                                    <h6><?php echo e($item->name); ?></h6>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="d-flex justify-content-start align-items-center">
                                      <div class="d-flex me-1 ps-2">
                                        <i class="fa-solid fa-star text-warning"></i>
                                        <small><?php echo e($item->rating); ?></small>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12 my-2">
                                    <a href="<?php echo e(route('participants.edit',$item-> id_participant)); ?>" type="button" class="btn btn-success2 w-100">Edit</a>
                                  </div>
                                  <div class="col-md-12 my-2">
                                    <form class="w-100" action="<?php echo e(route('participants.destroy', $item->id_participant)); ?>" onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" method="POST">
                                      <?php echo method_field('delete') . csrf_field(); ?>

                                      <button class="btn btn-danger w-100">Delete</button>
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
                  <div class="mdc-card mdc-filled-card-primary grid-margin card-blue-box-shadow mb-4"> 
                    <div class="d-block d-md-flex align-items-center mb-3">
                        <div>
                            <h4>Atur Harga Sesi</h4>
                            <p class="mb-0 font-weight-light"> Tentukan harga sewa per sesi untuk pelatih <a class="text-success fw-bold" href="<?php echo e(route('hargasesis.index')); ?>">DI SINI</a></p>
                        </div>
                    </div>
                  </div>
                  <div class="container p-0">
                    <div class="mdc-card">
                      <div class="w-100 d-flex justify-content-between align-items-center pb-4 ">
                        <h4 class="card-title card-padding p-0 fw-bold">Data Trainer Presence</h4>
                      </div>
                      <div2 class="table-responsive">
                        <table id="example" class="table display">
                            <thead>
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Member</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Waktu</th>
                                    <th class="text-center">Lokasi</th>
                                    <th class="text-center">Pelatih</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $__empty_1 = true; $__currentLoopData = $trainerpresence; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center"><?php echo e($items->id_trainerpresence); ?></td>
                                    <td class="text-center"><?php echo e($items->user->name); ?></td>
                                    <td class="d-flex align-items-center justify-content-center">
                                      <?php echo e($items->date); ?>

                                    </td>
                                    <td class="text-center">
                                        <?php echo e($items->time); ?>

                                    </td>
                                    <td class="text-center">
                                        <?php echo e($items->location->name); ?>

                                    </td>
                                    <td class="text-center">
                                      <div class="btn btn-dark rounded-pill py-0 px-2">
                                        <small><?php echo e($items->participant ? $items->participant->name : 'N/A'); ?></small>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="d-flex justify-content-center align-items-center">
                                        <form action="<?php echo e(route('datatrainers.destroy', $items->id_trainerpresence)); ?>" onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" method="POST">
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
                                  <th class="text-center">Member</th>
                                  <th class="text-center">Tanggal</th>
                                  <th class="text-center">Waktu</th>
                                  <th class="text-center">Lokasi</th>
                                  <th class="text-center">Pelatih</th>
                                  <th class="text-center">Actions</th>
                              </tr>
                          </tfoot>
                        </table>
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

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- End custom js for this page-->
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
  $(document).ready(function(){
    var owl = $('.owl-trainer').owlCarousel({
          items: 4, // Show four items at a time
          loop: true, // Loop through items
          responsiveClass: true,
          nav: false,
          responsive: {
              0: {
                  items: 1, // Show 1 item on very small screens
              },
              600: {
                  items: 2, // Show 2 items on small screens
              },
              1000: {
                  items: 4, // Show 4 items on large screens
              }
          }
      });

    $('.owl-prev').click(function() {
      owl.trigger('prev.owl.carousel');
    });

    $('.owl-next').click(function() {
      owl.trigger('next.owl.carousel', [300]);
    });
  });
</script>
</body>

<!-- Mirrored from demo.bootstrapdash.com/caroline/template/demo_1/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 03:20:08 GMT -->
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\flashfit\resources\views/datatrainers/index.blade.php ENDPATH**/ ?>