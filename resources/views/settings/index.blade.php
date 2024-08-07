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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                  <h4>Setting</h4>
                  @foreach ($setting as $item)
                  <a href="{{ route('settings.edit',$item-> id_setting) }}" class="py-1 btn btn-success mx-2 p-2 text-center">Edit Setting</a>
                </div>
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6">
                          <label for="notes" class="fw-bold mt-3">Banner</label>
                          <div class="input-group input-group-outline">
                              <textarea class="form-control" name="banner" id="banner" placeholder="Masukkan Banner">{{ $item->banner }}</textarea>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="notes" class="fw-bold mt-3">Banner 2</label>
                          <div class="input-group input-group-outline">
                              <textarea class="form-control w-100" name="banner2" id="banner2" placeholder="Masukkan Banner 2">{{ $item->banner2 }}</textarea>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                          <label for="notes" class="fw-bold mt-3">Promo_Pt</label>
                          <div class="input-group input-group-outline">
                              <textarea class="form-control w-100" name="promo_pt" id="promo_pt" placeholder="Masukkan Promo PT">{{ $item->promo_pt }}</textarea>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="notes" class="fw-bold mt-3">Required</label>
                          <div class="input-group input-group-outline">
                              <textarea class="form-control w-100" name="promo_membership" id="promo_membership" placeholder="Masukkan Promo Membership">{{ $item->promo_membership }}</textarea>
                          </div>
                        </div>
                    </div>
                @endforeach              
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="modal fade" id="exampleModalM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Metode</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="{{ route('metodes.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <label for="nama" class="fw-bold mt-3">Nama</label>
                  <div class="input-group input-group-outline w-100">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama">
                  </div>  
                  <label for="nama" class="fw-bold mt-3">No Rekening</label>
                  <div class="input-group input-group-outline w-100">
                      <input type="text" name="no_rek" class="form-control" id="no_rek" placeholder="Masukkan No Rekening">
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
                      <h6 class="card-title card-padding pb-0">Data Metode Pembayaran</h6>
                      <div class="d-flex justify-content-center align-items-center ">
                          <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalM" class="btn btn-info mx-2"><small>Tambah Data</small></button>
                      </div>
                  </div>
                  <div class="table-responsive">
                      <table id="order-listing" class="table">
                          <thead>
                              <tr>
                                  <th class="text-center">Nomor</th>
                                  <th class="text-center">Nama</th>
                                  <th class="text-center">No Rekening</th>
                                  <th class="text-center">Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                            @forelse ($metode as $metodes)
                              <tr>
                                  <td class="text-center">{{ $metodes->id_metode }}</td>
                                  <td class="text-center">
                                    {{ $metodes->name }}
                                  </td>
                                  <td class="text-center">
                                    {{ $metodes->no_rek }}
                                  </td>
                                  <td>
                                   <div class="d-flex justify-content-center align-items-center">
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#EditModalM{{ $metodes->id_metode }}" class="mdc-button mdc-button--outlined shaped-button outlined-button--edit mdc-ripple-upgraded mx-2"> Edit </a>
                                    <form action="{{ route('metodes.destroy',$metodes->id_metode) }}" onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" method="POST">
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
  @foreach ($metode as $metodes)
  <div class="modal fade" id="EditModalM{{ $metodes->id_metode }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Metode</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{ route('metodes.update', $metodes->id_metode) }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <label for="nama" class="fw-bold mt-3">Nama</label>
              <div class="input-group input-group-outline w-100">
                  <input type="text" value="{{ old('name') ?? $metodes->name }}" name="name" class="form-control" id="name" placeholder="Masukkan Nama">
              </div>  
              <label for="nama" class="fw-bold mt-3">No Rekening</label>
              <div class="input-group input-group-outline w-100">
                  <input type="text" value="{{ old('no_rek') ?? $metodes->no_rek }}" name="no_rek" class="form-control" id="no_rek" placeholder="Masukkan No Rekening">
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
<!-- endinject -->
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

<script>
     document.addEventListener("DOMContentLoaded", function() {
    ClassicEditor
      .create(document.querySelector('#notes'))
      .then(editor => {
        editor.enableReadOnlyMode('readOnlyMode');
      })
      .catch(error => {
        console.error(error);
      });
  });
     document.addEventListener("DOMContentLoaded", function() {
    ClassicEditor
      .create(document.querySelector('#notes2'))
      .then(editor => {
        editor.enableReadOnlyMode('readOnlyMode');
      })
      .catch(error => {
        console.error(error);
      });
  });

</script>




</body>

<!-- Mirrored from demo.bootstrapdash.com/caroline/template/demo_1/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 03:20:08 GMT -->
</html>
@endsection