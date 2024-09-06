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
  .ck-editor__editable_inline {
            height: 400px;
            width:100%;
        }
</style>
<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Data Tnc Cuti</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @forelse ( $setting as $settings )
                <textarea class="form-control w-100 " id="notes" readonly>{{ $settings->tnc_cuti }}</textarea>
                @empty
                @endforelse
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EditModal">Edit Data Tnc</button>
            </div>
          </div>
        </div>
    </div>
    <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Data Tnc Cuti</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                @foreach ($setting as $settings)
                <form action="{{ route('settings.update', $settings->id_setting) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="notes" class="fw-bold mt-3">Tnc Cuti</label>
                <div class="w-100">
                    <textarea class="form-control w-100" name="tnc_cuti" id="notes2" value="{{ old('tnc_cuti') ?? $settings->tnc_cuti }}" placeholder="Masukkan Notes" required>{{$settings->tnc_cuti}}</textarea>
                </div>
                <button type="submit" class="btn btn-warning my-3">Submit</button>
                </form>
                @endforeach
                </div>
            </div>
        </div>
    </div>
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
                        <h6 class="card-title card-padding pb-0">Data Cuti</h6>
                        <div class="d-flex justify-content-center align-items-center ">
                            <a href="{{ route('cutis.create') }}" type="button" class="btn btn-info mx-2"><small>Tambah Data</small></a>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <small>Tnc Cuti</small>
                              </button>
                        </div>
                    </div>
                    
                    <div class="table-responsive">
                        <table id="example" class="table display">
                            <thead>
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Durasi Cuti</th>
                                    <th class="text-center">Tanggal Pengajuan</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              @forelse ($cuti as $item)
                                <tr>
                                    <td class="text-center">{{ $item->id_cuti }}</td>
                                    <td class="d-flex align-items-center justify-content-center">
                                      {{ $item->user->name }}
                                    </td>
                                    <td class="text-center">
                                      @if ($item->durasi_cuti==null)
                                      {{ $item->durasi_cuti2 }}
                                      @else
                                      {{ $item->durasi_cuti }}
                                      @endif
                                    </td>
                                    <td class="">
                                      @if ($item->tanggal_pengajuan==null)
                                      {{ $item->tanggal_pengajuan2 }}
                                      @else
                                      <?php
                                        $dateString = $item->tanggal_pengajuan;
                                        $date = DateTime::createFromFormat('Y-m', $dateString);
                                        $formattedDate = $date->format('F Y');

                                        echo $formattedDate;
                                      ?>
                                      @endif
                                    </td>
                                    <td class="text-center">{{ $item->status }}</td>
                                    <td>
                                     <div class="d-flex justify-content-center align-items-center">
                                      <a type="button" href="{{ route('cutis.edit',$item-> id_cuti) }}" class="mdc-button mdc-button--outlined shaped-button outlined-button--edit mdc-ripple-upgraded mx-2"> Edit </a>
                                      <form action="{{ route('cutis.destroy', $item-> id_cuti) }}" onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" method="POST">
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
                                  <th class="text-center">Durasi Cuti</th>
                                  <th class="text-center">Tanggal Pengajuan</th>
                                  <th class="text-center">Status</th>
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
    ClassicEditor
    .create(document.querySelector('#notes'))
    .then(editor => {
        // Mengaktifkan mode readonly
        editor.enableReadOnlyMode('readonly-mode');
    })
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