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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Kelas</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('kelass.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="notes" class="fw-bold mt-3">Nama</label>
                    <div class="input-group input-group-outline">
                        <input class="form-control w-100" name="name" id="name" placeholder="Masukkan Nama">
                    </div>
                    <label for="notes" class="fw-bold mt-3">Kalori</label>
                    <div class="input-group input-group-outline">
                        <input class="form-control w-100" name="calories" id="calories" placeholder="Masukkan Kalori">
                    </div>
                    <label for="notes" class="fw-bold mt-3">Deskripsi</label>
                    <div class="input-group input-group-outline">
                        <input class="form-control w-100" name="description" id="description" placeholder="Masukkan Deskripsi">
                    </div>
                    <label for="nama" class="fw-bold mt-3">Foto</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="file" name="picture" class="form-control" id="picture" placeholder="Masukkan Gambar"
                            required>
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
                        <h6 class="card-title card-padding pb-0">Data kelas</h6>
                        <div class="d-flex justify-content-center align-items-center ">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-info mx-2"><small>Tambah Data</small></button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Description</th>
                                    <th class="text-center">Kalori</th>
                                    <th class="text-center">Foto</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              @forelse ($kelas as $kelass)
                                <tr>
                                    <td class="text-center">{{ $kelass->id_kelas }}</td>
                                    <td class="text-center">{{ $kelass->name }}</td>
                                    <td class="text-center">{{ $kelass->description }}</td>
                                    <td class="text-center">{{ $kelass->calories }}</td>
                                    <td class="text-center">
                                        <img class="rounded" style="width: 100%; object-fit:cover; height:80px" src="{{  asset('storage/'.$kelass->picture) }}" alt="">
                                    </td>
                                    <td>
                                     <div class="d-flex justify-content-center align-items-center">
                                      <a type="button" data-bs-toggle="modal" data-bs-target="#EditModal{{ $kelass->id_kelas }}" class="mdc-button mdc-button--outlined shaped-button outlined-button--edit mdc-ripple-upgraded mx-2"> Edit </a>
                                      <form action="{{ route('kelass.destroy', $kelass->id_kelas) }}" onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" method="POST">
                                        {!! method_field('DELETE') !!}
                                        {!! csrf_field() !!}
                                        <button type="submit" class="mdc-button mdc-button--outlined shaped-button outlined-button--delete mdc-ripple-upgraded mx-2">Delete</button>
                                    </form>
                                    
                                     </div>
                                  </td>
                                </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($kelas as $kelass)
    <div class="modal fade" id="EditModal{{ $kelass->id_kelas }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data kelas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="{{ route('kelass.update', $kelass->id_kelas) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="notes" class="fw-bold mt-3">Nama</label>
                <div class="input-group input-group-outline">
                    <input class="form-control w-100" value="{{ old('name') ?? $kelass->name }}" name="name" id="name" placeholder="Masukkan Nama">
                </div>
                <label for="notes" class="fw-bold mt-3">Kalori</label>
                <div class="input-group input-group-outline">
                    <input class="form-control w-100" value="{{ old('calories') ?? $kelass->calories }}" name="calories" id="calories" placeholder="Masukkan Kalori">
                </div>
                <label for="notes" class="fw-bold mt-3">Deskripsi</label>
                <div class="input-group input-group-outline">
                    <input class="form-control w-100" value="{{ old('description') ?? $kelass->description }}" name="description" id="description" placeholder="Masukkan Deskripsi">
                </div>
                <label for="nama" class="fw-bold mt-3">Foto</label>
                <div class="py-2" style="width: 300px; height: 200px">
                    <img class="w-100 h-100 object-fit-cover" src="{{  asset('storage/'.$kelass->picture) }}" alt="">
                </div>
                <div class="input-group input-group-outline w-100">
                    <input type="file" name="picture" class="form-control" id="picture" placeholder="Masukkan Gambar"
                        required>
                </div>  
                <button type="submit" class="btn btn-warning my-3">Submit</button>
                </form>
                @endforeach
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