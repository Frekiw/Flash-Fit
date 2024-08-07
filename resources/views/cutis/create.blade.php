@extends('layouts.admin_master')
@section('admincontent')
<div class="page-wrapper mdc-toolbar-fixed-adjust">
  <main class="content-wrapper">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style1">
          <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">
                <i class="fa fa-home text-success"></i>
            </a>
          </li>
          <li class="breadcrumb-item">
            <a class="" href="{{ route('cutis.index') }}">Cuti</a>
          </li>
          <li class="breadcrumb-item active text-secondary">
            <i>Tambah Data Cuti</i>
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
                  <form action="{{ route('cutis.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    
                    <label for="durasi_cuti" class=" mt-3">Durasi Cuti</label>
                    <ul class="nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" onclick="handleHomeButtonClick(event)">1 Bulan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" onclick="handleProfileButtonClick(event)">Lebih Dari 1 Bulan</button>
                        </li>
                    </ul>
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="row">
                                <?php
                                // Mengambil bulan dan tahun saat ini
                                $currentDate = new DateTime();
                                $currentDate->modify('+1 month');
                                $nextMonthDate = $currentDate->format('Y-m');
                            
                                // Menghitung bulan yang satu bulan setelah bulan ini
                                $endMonthDate = $currentDate->format('Y-m');
                                
                                ?>
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline w-100">
                                        <input type="text" name="durasi_cuti" class="form-control" id="durasi_cuti" placeholder="Masukkan durasi cuti" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline w-100">
                                        <input type="month" name="tanggal_pengajuan" class="form-control" id="tanggal_pengajuan" placeholder="Masukkan tanggal pengajuan"  min="<?php echo $nextMonthDate; ?>" max="<?php echo $endMonthDate; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                                            <?php
                                            // Mengambil bulan dan tahun saat ini
                                            $currentMonth = date('Y-m');
                                            
                                            // Menghitung bulan berikutnya
                                            $nextMonth = date('Y-m', strtotime('first day of +1 month'));
                                            ?>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6 row">
                                    <div class="col-md-6">
                                        <div class="input-group input-group-outline w-100">
                                            <input type="month" name="tanggal_1" class="form-control" id="tanggal_1" placeholder="Masukkan tanggal_1" min="<?php echo $nextMonth; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group input-group-outline w-100">
                                            <input type="month" name="tanggal_2" class="form-control" id="tanggal_2" placeholder="Masukkan tanggal_2" min="<?php echo $nextMonth; ?>">
                                        </div>
                                    </div>
                                    <input type="input" name="tanggal_pengajuan2" class="form-control d-none" id="tanggal_pengajuan123" placeholder="Masukkan tanggal_pengajuan">
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline w-100">
                                        <input type="text" name="durasi_cuti2" class="form-control" id="total_cuti" placeholder="Masukkan durasi cuti">
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                
                    
                
                    <label for="notes" class=" mt-3">Status</label>
                    <div class="input-group input-group-outline w-100">
                        <select class="form-control w-100" name="status" id="status">
                            <option value="" disabled selected>Masukkan status</option>
                            <option value="active">Active</option>
                            <option value="pending">Pending</option>
                            <option value="declined">Declined</option>
                            <option value="non-active">Non-active</option>
                        </select>
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
{{-- <script src="{{ asset('admindashboard/assets/vendors/js/vendor.bundle.base.js')}}"></script> --}}
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{ asset('admindashboard/assets/vendors/datatables/js/jquery.dataTables.min.js')}}"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('admindashboard/assets/js/material.js')}}"></script>
<script src="{{ asset('admindashboard/assets/js/misc.js')}}"></script>
<!-- endinject -->
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
<script>
    $(document).ready(function() {
        $('#user_id').select2({
            placeholder: "Pilih Kategori",
            allowClear: true
        });
    });

</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
            const tanggal1 = document.getElementById('tanggal_1');
            const tanggal2 = document.getElementById('tanggal_2');
            const tanggalPengajuan = document.getElementById('tanggal_pengajuan123');
            const durasiCuti = document.getElementById('total_cuti');

            function formatMonthYear(date) {
                const options = { year: 'numeric', month: 'long' };
                return new Intl.DateTimeFormat('en-US', options).format(date);
            }

            function calculateDuration() {
                const date1 = new Date(tanggal1.value);
                const date2 = new Date(tanggal2.value);

                if (date1 && date2 && date2 >= date1) {
                    const months = (date2.getFullYear() - date1.getFullYear()) * 12 + (date2.getMonth() - date1.getMonth());
                    durasiCuti.value = months + " Bulan";
                    
                    // Format tanggal untuk tanggal_pengajuan
                    const startMonthYear = formatMonthYear(date1);
                    const endMonthYear = formatMonthYear(date2);
                    tanggalPengajuan.value = `${startMonthYear} - ${endMonthYear}`;
                } else {
                    durasiCuti.value = '';
                    tanggalPengajuan.value = '';
                }
            }

            tanggal1.addEventListener('input', calculateDuration);
            tanggal2.addEventListener('input', calculateDuration);
        });
</script>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const homeButton = document.getElementById('pills-home-tab');
        const profileButton = document.getElementById('pills-profile-tab');
        const tanggalPengajuan = document.getElementById('tanggal_pengajuan');
        const tanggal1 = document.getElementById('tanggal_1');
        const tanggal2 = document.getElementById('tanggal_2');

        function updateButtonStates() {
            if (tanggalPengajuan.value) {
                profileButton.disabled = true;
            } else {
                profileButton.disabled = false;
            }

            if (tanggal1.value || tanggal2.value) {
                homeButton.disabled = true;
                profileButton.disabled = true;
            } else {
                homeButton.disabled = false;
            }
        }

        function handleHomeButtonClick(event) {
            handleTabSwitch(event, homeButton);
        }

        function handleProfileButtonClick(event) {
            handleTabSwitch(event, profileButton);
        }

        tanggalPengajuan.addEventListener('input', updateButtonStates);
        tanggal1.addEventListener('input', updateButtonStates);
        tanggal2.addEventListener('input', updateButtonStates);

        // Initialize button states on page load
        updateButtonStates();

        homeButton.addEventListener('click', handleHomeButtonClick);
        profileButton.addEventListener('click', handleProfileButtonClick);
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    var tanggalPengajuan = document.getElementById("tanggal_pengajuan");
    var durasiCuti = document.getElementById("durasi_cuti");

    tanggalPengajuan.addEventListener("change", function() {
        if (tanggalPengajuan.value !== "") {
            durasiCuti.value = "1 Bulan";
        } else {
            durasiCuti.value = "";
        }
    });
});

</script>




</body>

<!-- Mirrored from demo.bootstrapdash.com/caroline/template/demo_1/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 03:20:08 GMT -->
</html>
@endsection