@extends('layouts.admin_master')
@section('admincontent')
<div class="page-wrapper mdc-toolbar-fixed-adjust">
  <main class="content-wrapper">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Terms And Condition</li>
      </ol>
  </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                  <h4>Terms And Condition</h4>
                  @foreach ($tnc as $item)
                  <a href="{{ route('tncs.edit',$item-> id_tnc) }}" class="py-1 btn btn-success mx-2 p-2 text-center">Edit TNC</a>
                </div>
                <div class="card-body ">
                    <label for="notes" class="fw-bold mt-3">Syarat Dan Ketentuan</label>
                    <div class="w-100">
                        <textarea class="form-control" name="required" id="notes" placeholder="Masukkan Narasi">{{ $item->required }}</textarea>
                    </div>
                    <label for="notes" class="fw-bold mt-3">Kebijakan Dan Privasi</label>
                    <div class="w-100">
                      <textarea class="form-control" name="policy" id="notes2" placeholder="Masukkan Narasi">{{ $item->policy }}</textarea>
                    </div>
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