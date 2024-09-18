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
                  <label for="time" class=" mt-3">Nomor Telephone</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Masukkan Nomor Telephone">
                    </div>
                  <label for="notes" class=" mt-3">Gender</label>
                    <div class="input-group input-group-outline w-100">
                        <select class="form-control w-100" name="gender" id="gender">
                            <option value="" disabled selected>Masukkan Gender</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                  <label for="notes" class=" mt-3">Roles</label>
                    <div class="input-group input-group-outline w-100">
                        <select class="form-control w-100" name="roles" id="roles">
                            <option value="" disabled selected>Masukkan Roles</option>
                            <option value="SUPER ADMIN">SUPER ADMIN</option>
                            <option value="ADMIN">ADMIN</option>
                            <option value="SALES">SALES</option>
                            <option value="USER">USER</option>
                            <option value="TRAINER">TRAINER</option>
                        </select>
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
    <!-- Modal HTML -->
    @forelse ($trial as $trials)
    <div class="modal fade" id="confirmModal{{ $trials->id_trial }}" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog" >
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="exampleModalLabel">Apakah anda ingin verifikasi trial akun ini?</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-start align-items-center">
                        <button type="button" class="btn btn-danger rounded-pill mx-2" data-bs-dismiss="modal">Tidak</button>
                        <form action="{{ route('hangus', $trials->id_trial) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary rounded-pill mx-2">Konfirmasi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @empty
    @endforelse
    
  
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
                        <table id="example" class="table display">
                            <thead>
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Roles</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              @forelse ($item as $items)
                                <tr>
                                    <td class="text-center">{{ $items->id }}</td>
                                    <td class="d-flex align-items-center justify-content-start">
                                        <img class="me-2 rounded-circle" src="{{  asset('storage/'.$items->profile_photo_path) }}" style="width: 40px; height: 40px;" alt="1"> {{ $items->name }} 
                                    </td>
                                    <td class="text-center">
                                        {{ $items->email }}
                                    </td>                                   
                                    <td class="text-center">
                                        {{ $items->phone }}
                                    </td>                                   
                                    <td class="text-center">
                                        @if ($items->roles == "SUPER ADMIN")
                                            <div class="bg-warning px-0 py-1 rounded-pill">
                                                <small>{{ $items->roles }}</small>
                                            </div>
                                        @elseif ($items->roles == "ADMIN")
                                            <div class="bg-info px-0 py-1 rounded-pill">
                                                <small>{{ $items->roles }}</small>
                                            </div>
                                        @elseif ($items->roles == "SALES")
                                            <div class="bg-primary px-0 py-1 rounded-pill">
                                                <small>{{ $items->roles }}</small>
                                            </div>
                                        @elseif ($items->roles == "USER")
                                            <div class="bg-success px-0 py-1 rounded-pill">
                                                <small>{{ $items->roles }}</small>
                                            </div>
                                        @else
                                            <div class="bg-secondary px-0 py-1 rounded-pill">
                                                <small>{{ $items->roles }}</small>
                                            </div>
                                        @endif
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
                            <tfoot>
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Roles</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                    <div class="d-flex justify-content-between align-items-center py-2 pb-4 ">
                        <h6 class="card-title card-padding pb-0">Data Trial</h6>
                    </div>
                    <div class="table-responsive">
                        <table id="example2" class="table display">                     
                            <thead>
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">NIK</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Lokasi</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              @forelse ($trial as $trials)
                                <tr>
                                    <td class="text-center">{{ $trials->id_trial }}</td>
                                    <td class="text-center">
                                        {{ $trials->user->name }}
                                    </td>                                                                   
                                    <td class="text-center">
                                        {{ $trials->nik }}
                                    </td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        @if ($trials->status == "pending")
                                            <a type="button" data-bs-toggle="modal" data-bs-target="#confirmModal{{ $trials->id_trial }}">
                                                <div class="btn btn-info rounded-circle">
                                                    <small><i class="fa-solid fa-check-circle"></i></small>
                                                </div>
                                            </a>
                                        @elseif ($trials->status == "Hangus" )
                                        <a type="button">
                                            <div class="btn btn-secondary rounded-circle">
                                                <small><i class="fas fa-x"></i>                                                 </small>
                                            </div>
                                        </a>
                                        @endif
                                    </td>     
                                    <td class="text-center">
                                        {{ optional($trials->location)->name }}
                                    </td>                                        
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#EditModal2{{ $trials->id_trial }}" class="mdc-button mdc-button--outlined shaped-button outlined-button--edit mdc-ripple-upgraded mx-2"> Edit </a>
                                        <form action="{{ route('trials.destroy', $trials->id_trial) }}" onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" method="POST">
                                            {!! method_field('delete') . csrf_field() !!}
                                            <button type="submit"  class="mdc-button mdc-button--outlined shaped-button outlined-button--delete mdc-ripple-upgraded mx-2"> Delete </button>
                                        </form>
                                        </div>
                                        
                                    </td>                                                     
                                </tr>
                                @empty
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">NIK</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Lokasi</th>
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
                    <label for="time" class=" mt-3">Nomor Telephone</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="text" name="phone"  value="{{ old('phone') ?? $items->phone  }}"  class="form-control" id="phone" placeholder="Masukkan Nomor Telephone">
                    </div>
                    <label for="notes" class=" mt-3">Gender</label>
                    <div class="input-group input-group-outline w-100">
                        <select class="form-control w-100" name="gender" id="gender">
                            <option value="" disabled {{ !$items->gender ? 'selected' : '' }}>Masukkan Gender</option>
                            <option value="Pria" {{ $items->gender == 'Pria' ? 'selected' : '' }}>Pria</option>
                            <option value="Wanita" {{ $items->gender == 'Wanita' ? 'selected' : '' }}>Wanita</option>
                        </select>
                    </div>
                    <label for="notes" class=" mt-3">Roles</label>
                    <div class="input-group input-group-outline w-100">
                        <select class="form-control w-100" name="roles" id="roles">
                            <option value="" disabled {{ !$items->roles ? 'selected' : '' }}>Masukkan Roles</option>
                            <option value="SUPER ADMIN" {{ $items->roles == 'SUPER ADMIN' ? 'selected' : '' }}>SUPER ADMIN</option>
                            <option value="ADMIN" {{ $items->roles == 'ADMIN' ? 'selected' : '' }}>ADMIN</option>
                            <option value="SALES" {{ $items->roles == 'SALES' ? 'selected' : '' }}>SALES</option>
                            <option value="USER" {{ $items->roles == 'USER' ? 'selected' : '' }}>USER</option>
                            <option value="TRAINER" {{ $items->roles == 'TRAINER' ? 'selected' : '' }}>TRAINER</option>
                        </select>
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

@forelse ($trial as $trials)
<div class="modal fade" id="EditModal2{{ $trials->id_trial }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Trial</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form action="{{ route('trials.update', $trials->id_trial) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label for="user id" class="fw-bold">Nama User</label>
                        <select name="user_id" id="user_id" class="form-control select2" required>
                            <option value="">Pilih User</option>
                            @foreach($user2 as $users2)
                            <option value="{{ $users2->id }}" {{ $users2->id == $trials->user_id ? 'selected' : '' }}>
                                {{ $users2->name }}
                            </option>
                        @endforeach
                        </select>
                    <label for="location id" class="fw-bold">Nama Lokasi</label>
                        <select name="location_id" id="location_id" class="form-control select2" required>
                            <option value="">Pilih Lokasi</option>
                            @foreach($location as $locations)
                            <option value="{{ $locations->id_location }}" {{ $locations->id_location == $trials->location_id ? 'selected' : '' }}>
                                {{ $locations->name }}
                            </option>
                        @endforeach
                        </select>
                    <label for="time" class=" mt-3">NIK</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="text" name="nik" value="{{ old('nik') ?? $trials->nik  }}" class="form-control" id="nik" placeholder="Masukkan NIK">
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
</body>

<!-- Mirrored from demo.bootstrapdash.com/caroline/template/demo_1/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 03:20:08 GMT -->
</html>
@endsection