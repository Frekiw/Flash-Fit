@extends('layouts.admin_master')
@section('admincontent')
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
    <nav aria-label="breadcrumb" class="ms-5">
        <ol class="breadcrumb breadcrumb-style1">
          <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">
                <i class="fa fa-home text-success"></i>
            </a>
          </li>
          <li class="breadcrumb-item">
            <a class="" href="{{ route('jadwalkelass.index') }}">Jadwal Kelas</a>
          </li>
          <li class="breadcrumb-item active text-secondary">
            <i>Lokasi</i>
          </li>
        </ol>
      </nav>
  <main class="content-wrapper">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Jadwal Kelas</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('jadwalkelass.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <?php
                        // Get today's date
                        $today = new DateTime();
                        $today->setTime(0, 0, 0);

                        // Get the start (Monday) of the current week
                        $startOfWeek = clone $today;
                        $startOfWeek->modify('this week');

                        // Get the end (Sunday) of the current week
                        $endOfWeek = clone $startOfWeek;
                        $endOfWeek->modify('+6 days');

                        // Format the dates to 'Y-m-d'
                        $minDate = $startOfWeek->format('Y-m-d');
                        $maxDate = $endOfWeek->format('Y-m-d');
                        ?>
                        <div class="col-md-6">
                            <label for="nama" class="fw-bold mt-3">Tanggal</label>
                            <div class="input-group input-group-outline w-100">
                                <input type="date" name="date" class="form-control" id="date" min="<?php echo $minDate; ?>" max="<?php echo $maxDate; ?>" required>
                            </div>  
                        </div>
                        <div class="col-md-6">
                            <label for="notes" class="fw-bold mt-3">Jam</label>
                            <div class="input-group input-group-outline">
                                <input type="time" class="form-control w-100" name="time" id="time" placeholder="Masukkan Jam">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="class_id">Kelas</label>
                        <select name="class_id" id="class_id" class="form-control" required>
                            <option value="">Pilih Kelas</option>
                            @foreach($kelas as $kls)
                            <option value="{{ $kls->id_kelas }}">
                                {{ $kls->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mt-3">
                                <label for="participant_id">Trainer</label>
                                <select name="participant_id" id="participant_id" class="form-control select2" required>
                                    <option value="">Pilih Trainer</option>
                                    @foreach($participant as $ptpn)
                                    <option value="{{ $ptpn->id_participant }}">
                                        {{ $ptpn->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-3">
                                <label for="location_id">Lokasi </label>
                                <select name="location_id" id="location_id" class="form-control select2" required>
                                    <option value="">Pilih Location</option>
                                    @foreach($daftarloc as $daftarlocs)
                                    <option value="{{ $daftarlocs->id_location }}">
                                        {{ $daftarlocs->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
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
                    <div class="fw-bold">
                        <h5>Lokasi : {{ $location->name; }}</h5>
                    </div>
                    <div class="">
                        <h2>Jadwal Kelas</h2>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Hari</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Jenis Kelas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Array to store the dates of the week
                                $weekDates = [];
                                
                                // Get today's date
                                $today = new DateTime();
                                
                                // Determine the start of the week (Monday)
                                $dayOfWeek = $today->format('N');
                                $startOfWeek = clone $today;
                                $startOfWeek->modify('-' . ($dayOfWeek - 1) . ' days');
                                
                                // Loop through the days of the current week (Monday to Sunday)
                                for ($i = 0; $i < 7; $i++) {
                                    $currentDay = clone $startOfWeek;
                                    $currentDay->modify("+$i day");
                                    $weekDates[] = $currentDay->format('Y-m-d');
                                }
                                
                                // Days of the week in Indonesian
                                $daysOfWeek = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
                                
                                // Loop through the days and dates
                                for ($i = 0; $i < 7; $i++) {
                                    echo "<tr>";
                                    echo "<td>" . $daysOfWeek[$i] . "</td>";
                                    echo "<td>" . $weekDates[$i] . "</td>";
                                
                                    // Find the kelas for this date
                                    $kelasForDate = $jadwalkelas->filter(function ($item) use ($weekDates, $i) {
                                        return $item->date == $weekDates[$i];
                                    });
                                
                                    // Prepare buttons for classes
                                    $buttons = $kelasForDate->map(function ($kelas) {
                                        $jenisKelas = $kelas->jeniskelass->name;
                                        $idKelas = $kelas->id_jadwalkelas; // Use $kelas instead of $jadwalkelas
                                        return "<div class='btn btn-outline-success rounded-pill mx-1 ms-0 px-3 py-2'>" 
                                        . "<button type='button' data-bs-toggle='modal' data-bs-target='#EditModal$idKelas' class='border-0 rounded-circle text-dark'><i class='fas fa-edit'></i></button> "
                                        . "<form action='" . route('jadwalkelass.destroy', $idKelas) . "' onsubmit='return confirm(\"Apakah Anda Ingin Menghapus Data Ini?\")' method='POST' style='display:inline;'>"
                                        . method_field('DELETE')
                                        . csrf_field()
                                        . "<button type='submit' class='border-0 rounded-circle text-dark'><i class='fas fa-trash p-0 m-0' style='font-size:0.8rem;'></i></button>"
                                        . "</form> "
                                        . htmlspecialchars($jenisKelas) 
                                        . "</div>";


                                    })->implode(' ');
                                
                                    // Display class buttons and + Kelas link
                                    echo "<td>" . $buttons . 
                                         "<a href='#' type='button' data-bs-toggle='modal' data-bs-target='#exampleModal' class='btn btn-outline-primary rounded-pill'>+ Kelas</a>" . 
                                         "</td>";
                                    echo "</tr>";
                                }
                                ?>
                                </tbody>
                                                         
                            
                            
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</main>
    @foreach ($jadwalkelas as $jadwalkelass)
    <div class="modal fade" id="EditModal{{ $jadwalkelass->id_jadwalkelas }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data jadwalkelas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="{{ route('jadwalkelass.update', $jadwalkelass->id_jadwalkelas) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <?php
                    // Get today's date
                    $today = new DateTime();
                    $today->setTime(0, 0, 0);

                    // Get the start (Monday) of the current week
                    $startOfWeek = clone $today;
                    $startOfWeek->modify('this week');

                    // Get the end (Sunday) of the current week
                    $endOfWeek = clone $startOfWeek;
                    $endOfWeek->modify('+6 days');

                    // Format the dates to 'Y-m-d'
                    $minDate = $startOfWeek->format('Y-m-d');
                    $maxDate = $endOfWeek->format('Y-m-d');
                    ?>
                    <div class="col-md-6">
                        <label for="nama" class="fw-bold mt-3">Tanggal</label>
                        <div class="input-group input-group-outline w-100">
                            <input type="date" name="date" value="{{ old('date') ?? $jadwalkelass->date }}" class="form-control" id="date" min="<?php echo $minDate; ?>" max="<?php echo $maxDate; ?>" required>
                        </div>  
                    </div>
                    <div class="col-md-6">
                        <label for="notes" class="fw-bold mt-3">Jam</label>
                        <div class="input-group input-group-outline">
                            <input type="time" class="form-control w-100" value="{{ old('time') ?? $jadwalkelass->time }}" name="time" id="time" placeholder="Masukkan Jam">
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="class_id">Kelas</label>
                    <select name="class_id" id="class_id" class="form-control" required>
                        <option value="">Pilih Kelas</option>
                        @foreach($kelas as $kls)
                        <option value="{{ $kls->id_kelas }}" {{ $kls->id_kelas == $jadwalkelass->class_id ? 'selected' : '' }}>
                            {{ $kls->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mt-3">
                            <label for="participant_id">Trainer</label>
                            <select name="participant_id" id="participant_id" class="form-control select2" required>
                                <option value="">Pilih Trainer</option>
                                @foreach($participant as $ptpn)
                                <option value="{{ $ptpn->id_participant }}" {{ $ptpn->id_participant == $jadwalkelass->participant_id ? 'selected' : '' }} >
                                    {{ $ptpn->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mt-3">
                            <label for="location_id">Lokasi </label>
                            <select name="location_id" id="location_id" class="form-control select2" required>
                                <option value="">Pilih Location</option>
                                @foreach($daftarloc as $daftarlocs)
                                <option value="{{ $daftarlocs->id_location }}" {{ $daftarlocs->id_location == $jadwalkelass->location_id ? 'selected' : '' }}>
                                    {{ $daftarlocs->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning my-3">Submit</button>
                </form>
                
                </div>
            </div>
        </div>
    </div>
    @endforeach
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
<script src="{{ asset('admindashboard/assets/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{ asset('admindashboard/assets/vendors/datatables/js/jquery.dataTables.min.js')}}"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('admindashboard/assets/js/material.js')}}"></script>
<script src="{{ asset('admindashboard/assets/js/misc.js')}}"></script>




</body>

<!-- Mirrored from demo.bootstrapdash.com/caroline/template/demo_1/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 03:20:08 GMT -->
</html>
@endsection
