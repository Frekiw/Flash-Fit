
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
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Voucher</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('vouchers.store')); ?>" method="post" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <label for="notes" class="mt-3">Kategori</label>
                  <div class="input-group input-group-outline w-100">
                      <select class="form-control w-100" name="category" id="category" onchange="toggleFields()">
                          <option value="" disabled selected>Masukkan Category</option>
                          <option value="Re-New">Re-New</option>
                          <option value="New Member">New Member</option>
                          <option value="Sesi PT">Sesi PT</option>
                          <option value="Flash Sale">Flash Sale</option>
                      </select>
                  </div>
                  <label for="time" class=" mt-3">Judul</label>
                  <div class="input-group input-group-outline w-100">
                      <input type="text" name="title" class="form-control" id="title" placeholder="Masukkan Judul">
                  </div>
                  <label for="time" class=" mt-3">Discount</label>
                  <div class="input-group input-group-outline w-100">
                      <input type="text" name="discount" class="form-control" id="discount" placeholder="Masukkan Disocunt">
                  </div>
                  <div class="" id="flash-sale" style="display: none;">
                      <label for="time" class="mt-3">Kuota Voucher</label>
                      <div class="input-group input-group-outline w-100">
                          <input type="text" name="kuota" class="form-control" id="kuota" placeholder="Masukkan Kuota Voucher">
                      </div>
                      <label for="time" class="mt-3">Timer Start</label>
                      <div class="input-group input-group-outline w-100">
                          <input type="datetime-local" name="timer_start" class="form-control" id="timer_start" placeholder="Masukkan Time Start">
                      </div>
                      <label for="time" class="mt-3">Timer End</label>
                      <div class="input-group input-group-outline w-100">
                          <input type="datetime-local" name="timer_end" class="form-control" id="timer_end" placeholder="Masukkan Time End">
                      </div>
                  </div>

                  <div class="" id="vocher" style="display: none;">
                      <label for="time" class="mt-3">Code</label>
                      <div class="input-group input-group-outline w-100">
                          <input type="text" name="code" class="form-control" id="code" placeholder="Masukkan Code Voucher">
                      </div>
                      <label for="time" class="mt-3">Tanggal Expired</label>
                      <div class="input-group input-group-outline w-100">
                          <input type="date" name="exp_date" class="form-control" id="no_telp" placeholder="Masukkan Tanggal Expired">
                      </div>
                  </div>
                  <label for="time" class=" mt-3">Detail</label>
                  <div class="input-group input-group-outline w-100">
                      <input type="text" name="detail" class="form-control" id="detail" placeholder="Masukkan Detail Voucher">
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
              <div class="container">
                <div class="w-100 d-flex justify-content-between align-items-center pb-4 ">
                  <div class="col-md-6">
                    <h4 class="card-title card-padding p-0 text-start fw-bold">Data Voucher</h4>
                  </div>
                  <div class="col-md-6">
                    <div class="d-flex justify-content-end align-items-center">
                      <a data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="btn btn-primary me-2 "><small><i class="fas fa-plus"></i></small></a>
                        <button class="btn btn-dark me-2 owl-prev"><small><i class="fas fa-chevron-left"></i></small></button>
                        <button class="btn btn-dark me-2 owl-next"><small><i class="fas fa-chevron-right"></i></small></button>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="owl-carousel owl-voucher">
                    <?php $__empty_1 = true; $__currentLoopData = $voucher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="item5">
                      <div class="col-md-3 mb-4 px-2 w-100">
                        <div class="rounded-4 
                            <?php if($item->category == 'Flash Sale'): ?> 
                                card-voucher 
                            <?php elseif($item->category == 'Re-New'): ?> 
                                card-voucher2 
                            <?php elseif($item->category == 'New Member'): ?> 
                                card-voucher3 
                            <?php else: ?> 
                                card-voucher4 
                            <?php endif; ?>">
                          <div class="p-2">
                            <div class="col-md-12">
                              <h6 class="text-center text-white">Voucher - <?php echo e($item->category); ?> </h6>
                            </div>
                            <div class="col-md-12 pt-1 ps-2">
                              <h3 class="text-center text-white"><?php echo e('Rp ' . number_format($item->discount, 0, ',', '.')); ?></h3>
                            </div>
                            <div class="col-md-12 pt-1 ps-2">
                              <?php
                                date_default_timezone_set('Asia/Jakarta');
                                $timerStart = new DateTime($item->timer_start);
                                $formattedTimerStart = $timerStart->format('d M Y, H:i'); // Format: 2024-08-25, 13:00
                            ?>

                            <h6 class="text-center text-white">
                                <?php if($item->category == 'Flash Sale'): ?>
                                    <span class="shimmer"><?php echo e($formattedTimerStart); ?></span>
                                <?php else: ?>
                                    #<?php echo e($item->code); ?>

                                <?php endif; ?>
                            </h6>
                            </div>
                            <div class="col-md-12 py-1">
                              <!-- Additional content here -->
                            </div>
                            <div class="col-md-12 pt-2 ps-2" style="border-top: 2px dashed #ffffff;">
                              <h6 class="text-center text-white pt-2">
                                <div class="btn btn-secondary2 text-dark rounded-pill py-0 px-3">
                                  <small>
                                    <?php
                                    date_default_timezone_set('Asia/Jakarta');
                                    $timerEnd = new DateTime($item->timer_end);
                                    $formattedTimerEnd = $timerEnd->format('d M Y, H:i'); // Format: 2024-08-25, 13:00
                                    ?>
                                    <?php if($item->category == 'Flash Sale'): ?>
                                    <?php echo e($formattedTimerEnd); ?>

                                    <?php else: ?>
                                    <?php echo e($item->exp_date); ?>

                                  <?php endif; ?>
                                </small>
                                </div>
                              </h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php endif; ?>

                  </div>
                </div>
                <div class="row">
                  <div class="mdc-card">
                    <div class="d-flex justify-content-between align-items-center py-2 pb-4 ">
                        <h6 class="card-title card-padding pb-0">Data Voucher</h6>
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="table display">
                            <thead>
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Judul</th>
                                    <th class="text-center">Discount</th>
                                    <th class="text-center">Kategori</th>
                                    <th class="text-center">Code</th>
                                    <th class="text-center">Tanggal Expired</th>
                                    <th class="text-center">Timer</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $__empty_1 = true; $__currentLoopData = $voucher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center"><?php echo e($item->id_voucher); ?></td>
                                    <td class="text-center"><?php echo e($item->title); ?></td>
                                    <td class="d-flex align-items-center justify-content-center">
                                      <?php echo e('Rp ' . number_format($item->discount, 0, ',', '.')); ?>

                                    </td>
                                    <td class="text-center">
                                     <div class="d-flex justify-content-center align-items-center">
                                      <?php if($item->category == "Flash Sale"): ?>
                                      <?php echo e($item->category); ?> <div class="ms-2 bg-info text-white rounded-circle text-center d-flex justify-content-center align-items-center" style="width:20px;height:20px;"><small><?php echo e($item->kuota); ?></small></div>
                                      <?php else: ?>
                                      <?php echo e($item->category); ?>  
                                      <?php endif; ?> 
                                     </div>
                                    </td>
                                    <td class="text-center">
                                        <?php echo e($item->code); ?>

                                    </td>
                                    <td class="text-center">
                                        <?php echo e($item->exp_date); ?>

                                    </td>
                                    <td class="text-center">
                                      <?php 
                                      date_default_timezone_set('Asia/Jakarta');
                                      $timer_start = $item->timer_start;
                                      $datenow = date('Y-m-d H:i:s');
                                      $timer_end = $item->timer_end;
                                  
                                      // Convert to DateTime objects
                                      $start_time = new DateTime($timer_start);
                                      $current_time = new DateTime($datenow);
                                      $end_time = new DateTime($timer_end);
                                  
                                      $currentDate = date('Y-m-d'); // Tanggal sekarang
                                      $expDate = $item->exp_date;   // Tanggal kedaluwarsa voucher
                                  
                                      if ($item->category != "Flash Sale") {
                                          // Use echo here instead of Blade's @if, since we're in a PHP block
                                          if ($expDate < $currentDate) {
                                              echo "<div class='text-center'><small class='text-secondary'>Promo Expired</small></div>";
                                          } else {
                                              echo "<div class='text-center btn rounded-pill btn-success'><small>Masih Berlaku</small></div>";
                                          }
                                      } elseif ($start_time > $current_time) {
                                          echo "<div class='btn rounded-pill btn-warning'><small>Coming Soon</small></div>";
                                      } elseif ($current_time >= $start_time && $current_time <= $end_time) {
                                          // Send end time to JavaScript for countdown
                                          $end_time_js = $end_time->format('Y-m-d H:i:s');
                                          $unique_id = uniqid('countdown_'); // Generate unique ID for each countdown
                                          echo "<h5 class='m-0 p-0 fw-bold' id='{$unique_id}'></h5>";
                                          echo "<script>
                                              (function() {
                                                  var endTime = new Date('{$end_time_js}').getTime();
                                                  var countdownElement = document.getElementById('{$unique_id}');
                                  
                                                  var countdownInterval = setInterval(function() {
                                                      var now = new Date().getTime();
                                                      var timeLeft = endTime - now;
                                  
                                                      if (timeLeft > 0) {
                                                          var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                                                          var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                          var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                                                          var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
                                  
                                                          countdownElement.innerHTML = days + 'd ' + hours + 'h ' + minutes + 'm ' + seconds + 's';
                                                      } else {
                                                          clearInterval(countdownInterval);
                                                          countdownElement.innerHTML = '<small class=\"text-secondary\">Promo Expired</small>';
                                                      }
                                                  }, 1000);
                                              })();
                                          </script>";
                                      } else {
                                          echo "<small class='text-secondary'>Promo Expired</small>";
                                      }
                                      ?>
                                  </td>
                                       
                                    <td>
                                      <div class="d-flex justify-content-center align-items-center">
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#EditModal<?php echo e($item->id_voucher); ?>" class="mdc-button mdc-button--outlined shaped-button outlined-button--edit mdc-ripple-upgraded mx-2"> Edit </a>
                                        <form action="<?php echo e(route('vouchers.destroy', $item->id_voucher)); ?>" onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" method="POST">
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
                                  <th class="text-center">Judul</th>
                                  <th class="text-center">Discount</th>
                                  <th class="text-center">Kategori</th>
                                  <th class="text-center">Code</th>
                                  <th class="text-center">Tanggal Expired</th>
                                  <th class="text-center">Timer</th>
                                  <th class="text-center">Actions</th>
                              </tr>
                          </tfoot>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</main>
<?php $__empty_1 = true; $__currentLoopData = $voucher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<div class="modal fade" id="EditModal<?php echo e($item->id_voucher); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Voucher</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form action="<?php echo e(route('vouchers.update', $item->id_voucher)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <label for="notes" class="mt-3">Kategori</label>
                    <div class="input-group input-group-outline w-100">
                        <select class="category-selector form-control w-100" name="category">
                            <option value="" disabled <?php echo e(!$item->category ? 'selected' : ''); ?>>Masukkan Kategori</option>
                            <option value="Re-New" <?php echo e($item->category == 'Re-New' ? 'selected' : ''); ?>>Re-New</option>
                            <option value="New Member" <?php echo e($item->category == 'New Member' ? 'selected' : ''); ?>>New Member</option>
                            <option value="Sesi PT" <?php echo e($item->category == 'Sesi PT' ? 'selected' : ''); ?>>Sesi PT</option>
                            <option value="Flash Sale" <?php echo e($item->category == 'Flash Sale' ? 'selected' : ''); ?>>Flash Sale</option>
                        </select>
                    </div>
  
                  <label for="time" class=" mt-3">Judul</label>
                  <div class="input-group input-group-outline w-100">
                      <input type="text" name="title" value="<?php echo e(old('title', $item->title)); ?>" class="form-control" id="title" placeholder="Masukkan Judul">
                  </div>
                  <label for="time" class=" mt-3">Discount</label>
                  <div class="input-group input-group-outline w-100">
                      <input type="text" name="discount" value="<?php echo e(old('discount', $item->discount)); ?>" class="form-control" id="discount" placeholder="Masukkan Disocunt">
                  </div>
                    <!-- Fields for Flash Sale -->
                    <div class="flash-sale-group" style="display: none;">
                      <label for="time" class="mt-3">Kuota Voucher</label>
                      <div class="input-group input-group-outline w-100">
                          <input type="text" name="kuota" class="form-control" value="<?php echo e(old('kuota', $item->kuota)); ?>" placeholder="Masukkan Kuota Voucher">
                      </div>
                      <label for="time" class="mt-3">Timer Start</label>
                      <div class="input-group input-group-outline w-100">
                          <input type="datetime-local" value="<?php echo e(old('timer_start', $item->timer_start)); ?>" name="timer_start" class="form-control" placeholder="Masukkan Time Start">
                      </div>
                      <label for="time" class="mt-3">Timer End</label>
                      <div class="input-group input-group-outline w-100">
                          <input type="datetime-local" value="<?php echo e(old('timer_end', $item->timer_end)); ?>" name="timer_end" class="form-control" placeholder="Masukkan Time End">
                      </div>
                    </div>

                    <!-- Fields for Other Categories -->
                    <div class="vocher-group" style="display: none;">
                      <label for="time" class="mt-3">Code</label>
                      <div class="input-group input-group-outline w-100">
                          <input type="text" name="code" value="<?php echo e(old('code', $item->code)); ?>" class="form-control" placeholder="Masukkan Code Voucher">
                      </div>
                      <label for="time" class="mt-3">Tanggal Expired</label>
                      <div class="input-group input-group-outline w-100">
                          <input type="date" name="exp_date" value="<?php echo e(old('exp_date', $item->exp_date)); ?>" class="form-control" placeholder="Masukkan Tanggal Expired">
                      </div>
                    </div>

                    <label for="time" class=" mt-3">Detail</label>
                    <div class="input-group input-group-outline w-100">
                      <input type="text" name="detail" class="form-control" value="<?php echo e(old('detail', $item->detail)); ?>" placeholder="Masukkan Detail Voucher">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


<script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/fixedheader/4.0.1/js/dataTables.fixedHeader.js"></script>
<script src="https://cdn.datatables.net/fixedheader/4.0.1/js/fixedHeader.dataTables.js"></script>
<script>
  function toggleFields() {
      var category = document.getElementById("category").value;
      var flashSale = document.getElementById("flash-sale");
      var vocher = document.getElementById("vocher");

      if (category === "Flash Sale") {
          flashSale.style.display = "block";
          vocher.style.display = "none";
      } else {
          flashSale.style.display = "none";
          vocher.style.display = "block";
      }
  }
</script>
<script>
  function toggleFieldsEdit() {
      var categorySelectors = document.querySelectorAll(".category-selector");
      
      categorySelectors.forEach(function(selector) {
          var category = selector.value;
          var flashSaleGroup = selector.closest("div").parentElement.querySelector(".flash-sale-group");
          var vocherGroup = selector.closest("div").parentElement.querySelector(".vocher-group");

          if (category === "Flash Sale") {
              flashSaleGroup.style.display = "block";
              vocherGroup.style.display = "none";
          } else {
              flashSaleGroup.style.display = "none";
              vocherGroup.style.display = "block";
          }
      });
  }

  // Call function on page load to set initial visibility
  window.onload = function() {
      toggleFieldsEdit();
  };

  // Add event listener to each category selector to trigger the function on change
  document.querySelectorAll(".category-selector").forEach(function(selector) {
      selector.addEventListener("change", toggleFieldsEdit);
  });
</script>
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
      var owl = $('.owl-voucher').owlCarousel({
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
<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\flashfit\resources\views/vouchers/index.blade.php ENDPATH**/ ?>