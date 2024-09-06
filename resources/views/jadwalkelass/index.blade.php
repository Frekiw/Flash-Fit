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
  <main class="content-wrapper">
    @if (session('status'))
                <div class="row">
                    <div class="col-md-4 ms-auto">
                        <div class="alert alert-success alert-dismissible" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            @endif
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <div class="col-md-6">
                            <label for="notes" class="fw-bold mt-3">Nama</label>
                            <div class="input-group input-group-outline">
                                <input class="form-control w-100" name="name" id="name" placeholder="Masukkan Nama">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="notes" class="fw-bold mt-3">Jam</label>
                            <div class="input-group input-group-outline">
                                <input class="form-control w-100" name="time" id="time" placeholder="Masukkan Jam">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="notes" class="fw-bold mt-3">Kalori</label>
                            <div class="input-group input-group-outline">
                                <input class="form-control w-100" name="calories" id="calories" placeholder="Masukkan Kalori">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="notes" class="fw-bold mt-3">Detail jadwalKelas</label>
                            <div class="input-group input-group-outline">
                                <input class="form-control w-100" name="class_detail" id="class_detail" placeholder="Masukkan Detail jadwalKelas">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mt-3">
                                <label for="participant_id">Trainer jadwalKelas</label>
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
                                <label for="location_id">Lokasi jadwalKelas</label>
                                <select name="location_id" id="location_id" class="form-control select2" required>
                                    <option value="">Pilih Location</option>
                                    @foreach($location as $locations)
                                    <option value="{{ $locations->id_location }}">
                                        {{ $locations->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <label for="nama" class="fw-bold mt-3">Tanggal jadwalKelas</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="date" name="date" class="form-control" id="date" placeholder="Masukkan Gambar"
                            required>
                    </div>  
                    <label for="nama" class="fw-bold mt-3">Foto</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="file" name="photo" class="form-control" id="photo" placeholder="Masukkan Gambar"
                            required>
                    </div>  
                    <button type="submit" class="btn btn-warning my-3">Submit</button>
                    </form>
            </div>
          </div>
        </div>
    </div> --}}
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card" style="background:#273444;">
                    <div class="text-white">
                        <h1>Lokasi Kelas</h1>
                    </div>
                    <div class="d-flex justify-content-start align-items-center bg-dark text-white py-2 pb-4 ">
                        @forelse ($location as $locations )
                        <a type="button" href="{{ route('location.detail',$locations->id_location) }}" class="btn btn-outline-success mx-2 rounded-pill">{{ $locations->name }}</a>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @foreach ($jadwalkelas as $jadwalkelass)
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
                    <div class="col-md-6">
                        <label for="notes" class="fw-bold mt-3">Nama</label>
                        <div class="input-group input-group-outline">
                            <input class="form-control w-100" value="{{ old('name') ?? $jadwalkelass->name }}" name="name" id="name" placeholder="Masukkan Nama">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="notes" class="fw-bold mt-3">Jam</label>
                        <div class="input-group input-group-outline">
                            <input class="form-control w-100" value="{{ old('time') ?? $jadwalkelass->time }}" name="time" id="time" placeholder="Masukkan Jam">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="notes" class="fw-bold mt-3">Kalori</label>
                        <div class="input-group input-group-outline">
                            <input class="form-control w-100" value="{{ old('calories') ?? $jadwalkelass->calories }}" name="calories" id="calories" placeholder="Masukkan Kalori">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="notes" class="fw-bold mt-3">Detail jadwalKelas</label>
                        <div class="input-group input-group-outline">
                            <input class="form-control w-100" value="{{ old('class_detail') ?? $jadwalkelass->class_detail }}" name="class_detail" id="class_detail" placeholder="Masukkan Detail jadwalKelas">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mt-3">
                            <label for="participant_id">Trainer jadwalKelas</label>
                            <select name="participant_id" id="participant_id" class="form-control select2" required>
                                <option value="">Pilih Trainer</option>
                                @foreach($participant as $ptpn)
                                <option value="{{ $ptpn->id_participant }}" {{ $ptpn->id_participant == $jadwalkelass->participant_id ? 'selected' : '' }}>
                                    {{ $ptpn->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mt-3">
                            <label for="location_id">Lokasi jadwalKelas</label>
                            <select name="location_id" id="location_id" class="form-control select2" required>
                                <option value="">Pilih Location</option>
                                @foreach($location as $locations)
                                <option value="{{ $locations->id_location }}" {{ $locations->id_location == $jadwalkelass->location_id ? 'selected' : '' }}>
                                    {{ $locations->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <label for="nama" class="fw-bold mt-3">Tanggal jadwalKelas</label>
                <div class="input-group input-group-outline w-100">
                    <input type="date" name="date" value="{{ old('date') ?? $jadwalkelass->date }}" class="form-control" id="date" placeholder="Masukkan Gambar"
                        required>
                </div>  
                <label for="nama" class="fw-bold mt-3">Foto</label>
                <div class="py-2" style="width: 300px; height: 200px">
                    <img class="w-100 h-100 object-fit-cover" src="{{  asset('storage/'.$jadwalkelass->photo) }}" alt="">
                </div>
                <div class="input-group input-group-outline w-100">
                    <input type="file" name="photo" class="form-control" id="photo" placeholder="Masukkan Gambar"
                        required>
                </div>  
                <button type="submit" class="btn btn-warning my-3">Submit</button>
                </form>
                @endforeach
                </div>
            </div>
        </div>
    </div> --}}
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