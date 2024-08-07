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
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="container">
                    <div class="w-100 d-flex justify-content-between align-items-center pb-4 ">
                        <h4 class="card-title card-padding p-0 fw-bold">Data Packaged</h4>
                        <a href="{{ route('packageds.create') }}" type="button" class="btn btn-info ms-auto"><small>Tambah Data</small></a>
                    </div>
                    <div class="row">
                        @forelse ($packaged as $item)
                        <div class="col-md-3 mb-4 px-2">
                            <div class="rounded-4 " style="height:100%; box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                                <div class="card-pck p-2">
                                    <div class="w-100 d-flex justify-content-between align-items-center">
                                        <div class="">
                                            <small>{{ $item->category }}</small>
                                            <h6 class="fw-bold">{{ $item->name }}</h6>
                                        </div>
                                        <div class="ms-auto" style="width:20%">
                                            <img class="w-100 h-100 " style="filter:grayscale(1)" src="{{ asset('admindashboard/assets/images/logo.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="position-absolute bottom-0 end-0 p-2">
                                        <h6 class="fw-bold">{{ $item->monthly }}</h6>
                                    </div>
                                </div>
                                <div class="col-md-12 py-2">
                                    <div class="d-flex justify-content-start align-items-center px-2 card-bnft">
                                        <small class="lh-1 mt-2">{!! $item->benefit !!}</small>
                                    </div>
                                </div>
                                <div class="col-md-12 py-2">
                                    <div class="d-flex justify-content-start align-items-center border border-1 border-bottom px-2">
                                    </div>
                                </div>
                                <div class="col-md-12 py-1">
                                    <div class="px-2 mb-2">
                                        <div class="">
                                            <small class="text-secondary">Total harga</small>
                                            <h5 class="text-dark fw-bold">{{ $item->yearly }}</h5>
                                        </div>
                                        <div class="d-flex mb-2 p-0">
                                            <a href="{{ route('packageds.edit',$item-> id_packaged) }}" type="button" class="btn btn-success text-dark px-4 w-100 fw-bold"><small>Edit</small></a>
                                        </div>
                                        <div class="d-flex m-0 p-0">
                                            <form class="w-100" action="{{ route('packageds.destroy', $item->id_packaged) }}" onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" method="POST">
                                                {!! method_field('delete') . csrf_field() !!}
                                                <button type="submit" class="btn btn-dark px-4 w-100"><small>Delete</small></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        @endforelse
                    </div>
                </div>

                {{-- <div class="mdc-card">
                    <div class="d-flex justify-content-between align-items-center py-2 pb-4 ">
                        <h6 class="card-title card-padding pb-0">Data Cuti</h6>
                        <a href="{{ route('packageds.create') }}" type="button" class="btn btn-info mx-2">Tambah Data</a>
                    </div>
                    
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Category</th>
                                    <th class="text-center">Monthly</th>
                                    <th class="text-center">Yearly</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Benefit</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              @forelse ($packaged as $item)
                                <tr>
                                    <td class="text-center">id_packaged }}</td>
                                    <td class="d-flex align-items-center justify-content-center">
                                      category }}
                                    </td>
                                    <td class="text-center">
                                        monthly }}
                                    </td>
                                    <td class="text-center">
                                        yearly }}
                                    </td>
                                    <td class="text-center">
                                        name }}
                                    </td>
                                    <td class="text-center">benefit }}</td>
                                    <td>
                                     <div class="d-flex justify-content-center align-items-center">
                                      <a type="button" href="{{ route('packageds.edit',$item-> id_packaged) }}" class="mdc-button mdc-button--outlined shaped-button outlined-button--edit mdc-ripple-upgraded mx-2"> Edit </a>
                                      <form action="{{ route('packageds.destroy', $item-> id_packaged) }}" onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" method="POST">
                                        {!! method_field('delete') . csrf_field() !!}
                                        <button type="submit"  class="mdc-button mdc-button--outlined shaped-button outlined-button--delete mdc-ripple-upgraded mx-2"> Delete </button>
                                      </form>
                                     </div>
                                  </td>
                                </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div> --}}
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