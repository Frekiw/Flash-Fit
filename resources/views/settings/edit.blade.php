@extends('layouts.admin_master')
@section('admincontent')
<div class="page-wrapper mdc-toolbar-fixed-adjust">
  <main class="content-wrapper">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('tncs.index') }}">Terms And Condition</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Terms And Condition</li>
      </ol>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h4>Terms And Condition</h4>
                  @foreach ($setting as $item)
                  <form action="{{ route('settings.update', $item->id_setting) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-success my-3">Submit</button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                          <label for="notes" class="fw-bold mt-3">Banner</label>
                          <div class="input-group input-group-outline">
                              <textarea class="form-control" value="{{ old('banner') ?? $item->banner }}" name="banner" id="banner" placeholder="Masukkan Banner">{{ $item->banner }}</textarea>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="notes" class="fw-bold mt-3">Banner 2</label>
                          <div class="input-group input-group-outline">
                              <textarea class="form-control w-100" value="{{ old('banner2') ?? $item->banner2 }}" name="banner2" id="banner2" placeholder="Masukkan Banner 2">{{ $item->banner2 }}</textarea>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                          <label for="notes" class="fw-bold mt-3">Promo PT</label>
                          <div class="input-group input-group-outline">
                              <textarea class="form-control w-100" value="{{ old('promo_pt') ?? $item->promo_pt }}" name="promo_pt" id="promo_pt" placeholder="Masukkan Promo PT">{{ $item->promo_pt }}</textarea>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="notes" class="fw-bold mt-3">Promo Membership</label>
                          <div class="input-group input-group-outline">
                              <textarea class="form-control w-100" value="{{ old('promo_membership') ?? $item->promo_membership }}" name="promo_membership" id="promo_membership" placeholder="Masukkan Promo Membership">{{ $item->promo_membership }}</textarea>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                      <label for="notes" class="fw-bold mt-3">Tnc Daftar</label>
                      <div class="input-group input-group-outline">
                          <textarea class="form-control w-100" value="{{ old('tnc_daftar') ?? $item->tnc_daftar }}" name="tnc_daftar" id="notes" placeholder="Masukkan Tnc Daftar">{{ $item->tnc_daftar }}</textarea>
                      </div>
                    </div>
                </form>
                @endforeach             
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
  ClassicEditor
  .create(document.querySelector('#notes'))
  .catch(error => {
  console.error(error);
  });
  ClassicEditor
  .create(document.querySelector('#notes2'))
  .catch(error => {
  console.error(error);
  });
</script>



</body>

<!-- Mirrored from demo.bootstrapdash.com/caroline/template/demo_1/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 03:20:08 GMT -->
</html>
@endsection