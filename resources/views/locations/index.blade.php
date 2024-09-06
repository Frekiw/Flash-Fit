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
  <main class="content-wrapper">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Location</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('locations.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="notes" class="fw-bold mt-3">Nama</label>
                            <div class="input-group input-group-outline">
                                <input class="form-control w-100" name="name" id="name" placeholder="Masukkan Nama">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="notes" class="fw-bold mt-3">Kota</label>
                            <div class="input-group input-group-outline">
                                <input class="form-control w-100" name="city" id="city" placeholder="Masukkan Kota">
                            </div>
                        </div>
                    </div>
                    <label for="nama" class="fw-bold mt-3">Map</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="text" name="map" class="form-control" id="photo" placeholder="Masukkan Map">
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
    </div>
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                    <div class="d-flex justify-content-between align-items-center py-2 pb-4 ">
                        <h6 class="card-title card-padding pb-0">Data Location</h6>
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
                                    <th class="text-center">Kota</th>
                                    <th class="text-center">Map</th>
                                    <th class="text-center">Foto</th>
                                    <th class="text-center">Qr Code</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              @forelse ($location as $locations)
                                <tr>
                                    <td class="text-center">{{ $locations->id_location }}</td>
                                    <td class="text-center">
                                      {{ $locations->name }}
                                    </td>
                                    <td class="text-center">
                                      {{ $locations->city }}
                                    </td>
                                    <td class="text-center">
                                      {{ $locations->map }}
                                    </td>
                                    <td class="text-center">
                                        <img class="rounded" style="width: 100%; object-fit:cover; height:60px" src="{{  asset('storage/'.$locations->photo) }}" alt="">
                                    </td>
                                    <td class="text-center"><a href="{{ route('locations.qrcode', $locations->id_location) }}"><i class="fas fa-qrcode text-dark bg-warning rounded-circle p-2"></i></a></td>
                                    <td>
                                     <div class="d-flex justify-content-center align-items-center">
                                      <a type="button" data-bs-toggle="modal" data-bs-target="#EditModal{{ $locations->id_location }}" class="mdc-button mdc-button--outlined shaped-button outlined-button--edit mdc-ripple-upgraded mx-2"> Edit </a>
                                      <form action="{{ route('locations.destroy',$locations->id_location) }}" onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" method="POST">
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
                            <tfoot>
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Kota</th>
                                    <th class="text-center">Map</th>
                                    <th class="text-center">Foto</th>
                                    <th class="text-center">Qr Code</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($location as $locations)
    <div class="modal fade" id="EditModal{{ $locations->id_location }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Location</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="{{ route('locations.update', $locations->id_location) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <label for="notes" class="fw-bold mt-3">Nama</label>
                        <div class="input-group input-group-outline">
                            <input class="form-control w-100" name="name" value="{{ old('name') ?? $locations->name }}" id="name" placeholder="Masukkan Nama">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="notes" class="fw-bold mt-3">Kota</label>
                        <div class="input-group input-group-outline">
                            <input class="form-control w-100" name="city" value="{{ old('city') ?? $locations->city }}" id="city" placeholder="Masukkan Kota">
                        </div>
                    </div>
                </div>
                <label for="nama" class="fw-bold mt-3">Map</label>
                <div class="input-group input-group-outline w-100">
                    <input type="text" name="map" value="{{ old('map') ?? $locations->map }}" class="form-control" id="Map" placeholder="Masukkan Map"
                        required>
                </div> 
                <label for="nama" class="fw-bold mt-3">Foto</label>
                <div class="py-2" style="width: 300px; height: 200px">
                    <img class="w-100 h-100 object-fit-cover" src="{{  asset('storage/'.$locations->photo) }}" alt="">
                </div>
                <div class="input-group input-group-outline w-100">
                    <input type="file" name="photo" class="form-control" id="photo" placeholder="Masukkan Gambar">
                </div>  
                <button type="submit" class="btn btn-warning my-3">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach

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




</body>

<!-- Mirrored from demo.bootstrapdash.com/caroline/template/demo_1/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 03:20:08 GMT -->
</html>
@endsection