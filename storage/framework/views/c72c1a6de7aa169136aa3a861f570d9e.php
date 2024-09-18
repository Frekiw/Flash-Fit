<?php $__env->startSection('admincontent'); ?>
        <!-- partial -->
          <div class="page-wrapper mdc-toolbar-fixed-adjust">
            <main class="content-wrapper">
              <div class="container">
                <div class="row my-4">
                  <div class="col-md-5 mx-auto border mdc-card">
                    <div class="card-inner">
                      <h5 class="font-weight-medium mb-2">Rekap Kehadiran</h5>
                      <div class="row">
                        <div class="col-md-8 d-flex justify-content-center align-items-center">
                          <div class="dougnut-chart-wrap">
                            <canvas id="doughnutChart" height="140"></canvas>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="doughnut-custom-legend mt-3 mb-1">
                            <div class="">
                                <div class=" pl-3 pr-3">
                                    <p class="m-0 font-weight-medium tx-12">Member</p>
                                    <div class="chart-bar-rect "style="background-color:#30a80f"></div>
                                    <p class="m-0 text-muted tx-12"><?php echo e($totalUserPresence); ?></p>
                                </div>
                                <div class=" pl-3 pr-3">
                                    <p class="m-0 font-weight-medium tx-12"> Trainer </p>
                                    <div class="chart-bar-rect" style="background-color:#71f207"></div>
                                    <p class="m-0 text-muted tx-12"><?php echo e($totalTrainerPresence); ?></p>
                                </div>
                                <div class=" pl-3 pr-3">
                                    <p class="m-0 font-weight-medium tx-12"> Cuti </p>
                                    <div class="chart-bar-rect" style="background-color:#b3faa0"></div>
                                    <p class="m-0 text-muted tx-12"><?php echo e($totalCuti); ?></p>
                                </div>
                            </div>
                        </div>
                        </div>
                      </div>
                      <div class="mt-3">
                        <a type="button" class="btn btn-dark px-5 w-100" href="<?php echo e(route('participants.index')); ?>">Lihat Selengkapnya</a>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-md-3 mx-auto border mdc-card">
                    <div class="card-inner">
                      <h5 class="font-weight-medium mb-2">Transaksi Bulan Ini</h5>
                      <div class="conversion-chart-area-height mt-4">
                        <canvas id="total-expences"></canvas>
                      </div>
                      <div class="mt-2">
                        <i><small>Bulan <b><?php echo e(\Carbon\Carbon::now()->translatedFormat('F')); ?></b></small></i>
                        <div class="row mt-1">
                          <div class="col-md-6">
                            <small>New Member</small><br>
                            <p class="fw-bold">Rp. <?php echo e(number_format($totalTransaction, 0, ',', '.')); ?></p>
                          </div>
                          <div class="col-md-6">
                            <small>Re-New</small><br>
                            <p class="fw-bold">Rp. <?php echo e(number_format($totalTransactionNew, 0, ',', '.')); ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 mx-auto">
                    <div class="d-flex justify-content-between align-items-center py-1 mb-3">
                        <h5 class="mb-0">Kehadiran Member</h5>
                        <a href="<?php echo e(route('participants.index')); ?>" class="bg-dark text-white rounded-circle iconrow2">
                          <i class="fas fa-arrow-right p-2"></i>
                        </a>
                    </div>
                    <?php $__currentLoopData = $presence; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $presences): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row my-2 border rounded border-dark">
                      <div class="d-flex align-items-center mx-auto p-2">
                        <div class="text-white bg-black bg-gradient align-self-start p-2 rounded">
                          <div class="p-1 px-2 text-center m-0">
                            <i class="fa-solid fa-user text-center"></i>
                          </div>
                        </div>
                        <div class="ms-2">
                          <div class=" lh-1 m-0">
                            <p class="m-0"><?php echo e($presences->user->name); ?></p>
                            <div class="d-flex align-items-center">
                              <i class="fa-regular fa-clock me-1"></i>
                              <p class="m-0 fw-lighter"><?php echo e(\Carbon\Carbon::parse($presences->time)->format('H:i')); ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                </div>
                <div class="row my-4">
                  <div class="col-md-7 mdc-card mx-auto ">
                    <div class="card-inner">
                      <div class="row mb-1">
                        <div class="d-flex justify-content-between align-items-center py-1">
                          <h5>Jadwal Kelas</h5>
                          <a href="<?php echo e(route('jadwalkelass.index')); ?>" class="bg-dark text-white rounded-circle iconrow2">
                            <i class="fas fa-arrow-right p-2"></i>
                          </a>
                        </div>
                      </div>
                      <?php $__currentLoopData = $jadwalkelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwalkelas2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="row my-1 border-bottom border-1 border-dark">
                        <div class="d-flex justify-content-between align-items-center mx-auto p-2">
                          <div class="d-flex align-items-center">
                            <div class="text-white bg-black bg-gradient align-self-start p-2 rounded">
                              <div class="p-1 py-2 text-center m-0">
                                <p class="text-center fw-light lh-1 m-0"><?php echo e(\Carbon\Carbon::parse($jadwalkelas2->time)->format('H:i')); ?></p>
                              </div>
                            </div>
                            <div class="ms-2 lh-1">
                              <p class="mb-0"><?php echo e($jadwalkelas2->kelas->name); ?></p>
                              <p class="mb-0 fw-lighter"><?php echo e($jadwalkelas2->kelas->calories); ?></p>
                            </div>
                          </div>
                          <div class="d-flex align-items-center">
                            <i class="fa-regular fa-clock me-2"></i>
                            <p class="m-0 fw-lighter"><?php echo e($jadwalkelas2->date); ?></p>
                          </div>
                          <div class="d-flex align-items-center rounded bg-gradient text-white p-2 overlocation" style="background-color:#71f207">
                            <a class="text-dark" href="#"><i class="fa-solid fa-location-dot"></i>
                              <small class="ms-1 fw-lighter"><?php echo e($jadwalkelas2->location->name); ?></small>
                            </a>
                          </div>
                        </div>
                      </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                  </div>
                  <div class="col-md-4 mdc-card mx-auto">
                    <div class="card-inner">
                      <div class="d-flex justify-content-between align-items-center py-1">
                        <h5>Trainer</h5>
                        <a href="<?php echo e(route('datatrainers.index')); ?>" class="bg-dark text-white rounded-circle iconrow2">
                          <i class="fas fa-arrow-right p-2"></i>
                        </a>
                      </div>
                      <div class="owl-carousel owl-theme mt-2">
                        <?php $__empty_1 = true; $__currentLoopData = $participant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $participants): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="item">
                          <div class=" mx-2">
                            <div class="position-relative trainercarousel">
                              <img class="" src="<?php echo e(asset('storage/'.$participants->foto_trainer)); ?>" alt="">
                            </div>
                            <div class="position-absolute top-0 p-3 overlay-pt d-flex">
                              <small class="text-white mt-auto"><?php echo e($participants->name); ?></small>
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
            <!-- partial:partials/_footer.html -->
            <footer>
            <div class="mdc-layout-grid">
              <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                  <span class="tx-14"
                    >Copyright © 2024
                    <a href="javascript:void(0)" target="_blank">Flash Fit</a>. All
                    rights reserved.</span>
                </div>
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex justify-content-end">
                  <div class="d-flex align-items-center">
                    <a href="#">Documentation</a>
                    <span class="vertical-divider"></span>
                    <a href="#">FAQ</a>
                  </div>
                </div>
              </div>
            </div>
          </footer>

            <!-- partial -->
          </div>
        </div>
    </div>


      

    <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- plugins:js -->
<script src="<?php echo e(asset('admindashboard/assets/vendors/js/vendor.bundle.base.js')); ?>"></script>
<!-- endinject -->

<!-- Plugin js for this page-->
<script src="<?php echo e(asset('admindashboard/assets/vendors/chart.js/Chart.min.js')); ?>"></script>
<script src="<?php echo e(asset('admindashboard/assets/vendors/jquery-bar-rating/jquery.barrating.min.js')); ?>"></script>
<!-- End plugin js for this page-->

<!-- inject:js -->
<script src="<?php echo e(asset('admindashboard/assets/js/material.js')); ?>"></script>
<script src="<?php echo e(asset('admindashboard/assets/js/misc.js')); ?>"></script>
<!-- endinject -->

<!-- Custom js for this page-->
<script src="<?php echo e(asset('admindashboard/assets/js/dashboard.js')); ?>"></script>
<!-- End custom js for this page-->

<!-- jQuery (necessary for the carousel plugin) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Owl Carousel JS (assuming you need this for the carousel functionality) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
  $(document).ready(function() {
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 1,
      nav: false,
      dots: false,
      autoWidth:true,
      autoplay: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
  });
  var doughnutPieData = {
        datasets: [
          {
            data: [<?php echo e($totalTrainerPresence); ?>, <?php echo e($totalCuti); ?>, <?php echo e($totalUserPresence); ?>],
            backgroundColor: ["#71f207", "#b3faa0", "#30a80f"],
            borderColor: ["#71f207", "#b3faa0", "#30a80f"]
          }
        ],

        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: []
      };
</script>
<script>
    if ($("#total-expences").length) {
      var graphGradient = document
        .getElementById("total-expences")
        .getContext("2d");
      var saleGradientBg = graphGradient.createLinearGradient(25, 0, 25, 83);
      saleGradientBg.addColorStop(0, "rgba(6, 179, 175, .83)");
      saleGradientBg.addColorStop(1, "rgba(255, 255, 255, 0.27)");
      var totalExpencesData = {
        labels: [
          "Jan",
          "Feb",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec"
        ],
        datasets: [
          {
            label: "Income",
            data: [<?php echo e($totalsString); ?>],
            backgroundColor: saleGradientBg,
            borderColor: ["#59c99f"],
            borderWidth: 3,
            fill: true,
            pointBorderColor: [
                <?php
                    $currentMonth = date('n'); // 'n' returns month without leading zeros
                    for ($i = 1; $i <= 12; $i++) {
                        echo ($currentMonth == $i) ? '"#59c99f",' : '"",';
                    }
                ?>
            ],
            pointBackgroundColor: [
                <?php
                    $currentMonth = date('n'); // 'n' returns month without leading zeros
                    for ($i = 1; $i <= 12; $i++) {
                        echo ($currentMonth == $i) ? '"#fff",' : '"",';
                    }
                ?>
            ],
            pointBorderWidth: [3],
            pointRadius: [
                <?php
                    $currentMonth = date('n'); // 'n' returns month without leading zeros
                    for ($i = 1; $i <= 12; $i++) {
                        echo ($currentMonth == $i) ? '3,' : '0,';
                    }
                ?>
            ]
          }
        ]
      };
      var totalExpencesOptions = {
        scales: {
          yAxes: [
            {
              display: false,
              gridLines: {
                drawBorder: false,
                display: false,
                drawTicks: false
              },
              ticks: {
                beginAtZero: true,
                stepSize: <?php echo e($maxTotal); ?>

              }
            }
          ],
          xAxes: [
            {
              display: false,
              position: "bottom",
              gridLines: {
                drawBorder: false,
                display: false,
                drawTicks: false
              },
              ticks: {
                beginAtZero: true,
                stepSize: 1
              }
            }
          ]
        },
        legend: {
          display: false
        },
        elements: {
          point: {
            radius: 0
          },
          line: {
            tension: 0.3
          }
        },
        tooltips: {
          backgroundColor: "rgba(2, 171, 254, 1)"
        }
      };
      var barChartCanvas = $("#total-expences")
        .get(0)
        .getContext("2d");
      // This will get the first returned node in the jQuery collection.
      var barChart = new Chart(barChartCanvas, {
        type: "line",
        data: totalExpencesData,
        options: totalExpencesOptions
      });
    }
</script>
</body>
</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\flashfit\resources\views/dashboard.blade.php ENDPATH**/ ?>