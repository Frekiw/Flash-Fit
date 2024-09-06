@extends('layouts.admin_master')
@section('admincontent')
<div class="page-wrapper mdc-toolbar-fixed-adjust">
  <main class="content-wrapper">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('settings.index') }}">Setting</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Setting</li>
      </ol>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4>Terms And Condition</h4>
                  @foreach ($setting as $item)
                  <form action="{{ route('settings.update', $item->id_setting) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-success my-3">Submit</button>
                </div>
                <div class="card-body">
                  <label for="notes" class="fw-bold mt-3">Tnc Daftar 1</label>
                  <div class="w-100">
                      <textarea class="form-control w-100" value="{{ old('tnc_daftar1') ?? $item->tnc_daftar1 }}" name="tnc_daftar1" id="notes" placeholder="Masukkan Tnc Daftar">{{ $item->tnc_daftar1 }}</textarea>
                  </div>
                  <label for="notes" class="fw-bold mt-3">Tnc Daftar 2</label>
                  <div class="w-100">
                      <textarea class="form-control w-100" value="{{ old('tnc_daftar2') ?? $item->tnc_daftar2 }}" name="tnc_daftar2" id="notes2" placeholder="Masukkan Tnc Daftar">{{ $item->tnc_daftar2 }}</textarea>
                  </div>
                  <label for="notes" class="fw-bold mt-3">Tnc Daftar 3</label>
                  <div class="w-100">
                      <textarea class="form-control w-100" value="{{ old('tnc_daftar3') ?? $item->tnc_daftar3 }}" name="tnc_daftar3" id="notes3" placeholder="Masukkan Tnc Daftar">{{ $item->tnc_daftar3 }}</textarea>
                  </div>
                  <label for="notes" class="fw-bold mt-3">Tnc Personal Trainer</label>
                  <div class="w-100">
                      <textarea class="form-control w-100" value="{{ old('tnc_pt') ?? $item->tnc_pt }}" name="tnc_pt" id="notes4" placeholder="Masukkan Tnc Daftar">{{ $item->tnc_pt }}</textarea>
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
  ClassicEditor
  .create(document.querySelector('#notes3'))
  .catch(error => {
  console.error(error);
  });
  ClassicEditor
  .create(document.querySelector('#notes4'))
  .catch(error => {
  console.error(error);
  });
  ClassicEditor
  .create(document.querySelector('#notes5'))
  .catch(error => {
  console.error(error);
  });
</script>



</body>

<!-- Mirrored from demo.bootstrapdash.com/caroline/template/demo_1/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 03:20:08 GMT -->
</html>
@endsection