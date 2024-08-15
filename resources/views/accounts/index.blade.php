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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data User</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('accounts.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <label for="time" class=" mt-3">Nama Akun</label>
                  <div class="input-group input-group-outline w-100">
                      <input type="text" name="name"  class="form-control" id="name" placeholder="Masukkan Nama Akun">
                  </div>
                  <label for="time" class=" mt-3">Email</label>
                  <div class="input-group input-group-outline w-100">
                      <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan Email">
                  </div>
                  <label for="time" class=" mt-3">Code Member</label>
                  <div class="input-group input-group-outline w-100">
                      <input type="text" name="code_member" class="form-control" id="email" placeholder="Masukkan Code Member">
                  </div>
                  <label for="time" class=" mt-3">Code Sales</label>
                  <div class="input-group input-group-outline w-100">
                      <input type="text" name="code_sales" class="form-control" id="Sales" placeholder="Masukkan Code Sales">
                  </div>
                  <div class="row py-3">
                    <div class="col-md-6">
                        <label class="form-label" for="name">Password</label>
                        <div class="input-group input-group-outline w-100 mb-3">
                            <input type="password" name="password" value="" class="form-control" id="name" placeholder="Masukkan Password Pengguna" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="name">Konfirmasi Password</label>
                        <div class="input-group input-group-outline w-100 mb-3">
                            <input type="password" name="password_confirmation" value="" class="form-control" id="name" placeholder="Masukkan Kembali Password Pengguna" required>
                        </div>
                    </div>
                  </div>
                  <label for="nama" class="fw-bold mt-3">Gambar Profil</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="file" name="profile_photo_path" class="form-control" id="gambar" placeholder="Masukkan Gambar"
                            required>
                    </div>
                  <button type="submit" class="btn btn-success my-3">Submit</button>
                </form>
            </div>
          </div>
        </div>
    </div>
  <main class="content-wrapper">
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                    <div class="d-flex justify-content-between align-items-center py-2 pb-4 ">
                        <h6 class="card-title card-padding pb-0">Data Account</h6>
                        <div class="d-flex justify-content-center align-items-center ">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-info mx-2"><small>Tambah Data</small></button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Code Member</th>
                                    <th class="text-center">Code Sales</th>
                                    <th class="text-center">Code Referall</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              @forelse ($item as $items)
                                <tr>
                                    <td class="text-center">{{ $items->id }}</td>
                                    <td class="text-center">
                                        <div class="btn btn-primary rounded-pill px-3 py-0">
                                           <small> {{ $items->code_member }}</small>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn btn-success rounded-pill px-3 py-0">
                                            <small>{{ $items->code_sales }}</small>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn btn-warning rounded-pill px-3 py-0">
                                            @if ($items->code_refal == null)
                                            <small>-</small>
                                            @else
                                            <small>{{ $items->code_refal }}</small>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="d-flex align-items-center justify-content-center">
                                      {{ $items->name }} <img class="ms-2 rounded-circle" src="{{  asset('storage/'.$items->profile_photo_path) }}" style="width: 40px; height: 40px;" alt="1">
                                    </td>
                                    <td class="text-center">
                                        {{ $items->email }}
                                    </td>
                                    <td>
                                     <div class="d-flex justify-content-center align-items-center">
                                      <a type="button" data-bs-toggle="modal" data-bs-target="#EditModal{{ $items->id }}" class="mdc-button mdc-button--outlined shaped-button outlined-button--edit mdc-ripple-upgraded mx-2"> Edit </a>
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
</main>
@forelse ($item as $items)
<div class="modal fade" id="EditModal{{ $items->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data user</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form action="{{ route('accounts.update', $items->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label for="time" class=" mt-3">Nama Akun</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="text" name="name" value="{{ old('name') ?? $items->name  }}" class="form-control" id="name" placeholder="Masukkan Nama Akun">
                    </div>
                    <label for="time" class=" mt-3">Email</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="text" name="email"  value="{{ old('email') ?? $items->email  }}"  class="form-control" id="email" placeholder="Masukkan Email">
                    </div>
                    <label for="time" class=" mt-3">Code Member</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="text" name="code_member" value="{{ old('code_member') ?? $items->code_member  }}" class="form-control" id="code_member" placeholder="Masukkan Kode Member">
                    </div>
                    <label for="time" class=" mt-3">Code Sales</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="text" name="code_sales" value="{{ old('code_sales') ?? $items->code_sales  }}" class="form-control" id="code_sales" placeholder="Masukkan Kode Sales">
                    </div>
                    <div class="row py-3">
                        <div class="col-md-6">
                            <label class="form-label" for="name">Password</label>
                            <div class="input-group input-group-outline w-100 mb-3">
                                <input type="password" name="password" value="" class="form-control" id="name" placeholder="Masukkan Password Pengguna" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="name">Konfirmasi Password</label>
                            <div class="input-group input-group-outline w-100 mb-3">
                                <input type="password" name="password_confirmation" value="" class="form-control" id="name" placeholder="Masukkan Kembali Password Pengguna" required>
                            </div>
                        </div>
                    </div>
                    <label for="nama" class="fw-bold mt-3">Gambar Profil</label>
                        <div class="input-group input-group-outline w-100">
                            <input type="file" name="profile_photo_path" class="form-control" id="gambar" placeholder="Masukkan Gambar"
                                required>
                        </div>
                    <button type="submit" class="btn btn-success my-3">Submit</button>
                  </form>
              </div>
        </div>
    </div>
</div>
@empty
@endforelse

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
<script src="{{ asset('admindashboard/assets/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{ asset('admindashboard/assets/vendors/datatables/js/jquery.dataTables.min.js')}}"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('admindashboard/assets/js/material.js')}}"></script>
<script src="{{ asset('admindashboard/assets/js/misc.js')}}"></script>
<!-- endinject -->
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
</body>

<!-- Mirrored from demo.bootstrapdash.com/caroline/template/demo_1/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 03:20:08 GMT -->
</html>
@endsection