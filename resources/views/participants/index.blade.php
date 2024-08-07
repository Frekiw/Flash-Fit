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
                <div class="container ">
                  <div class="mdc-card">
                    <div class="d-flex justify-content-between align-items-center py-2 pb-4 ">
                        <h6 class="card-title card-padding pb-0">Data Member</h6>
                        <div class="d-flex justify-content-center align-items-center ">
                            <a href="{{ route('participants.create') }}" type="button" class="btn btn-info mx-2"><small>Tambah Data</small></a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Roles</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Code</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Tanggal Lahir</th>
                                    <th class="text-center">Nomer Telephone</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              @forelse ($participant as $item)
                                <tr>
                                    <td class="text-center">{{ $item->id_participant }}</td>
                                    <td class="text-center">{{ $item->roles }}</td>
                                    <td class="d-flex align-items-center justify-content-center">
                                      {{ $item->tanggal }}
                                    </td>
                                    <td class="text-center">
                                        {{ $item->code }}
                                    </td>
                                    <td class="text-center">
                                        {{ $item->name }}
                                    </td>
                                    <td class="text-center">{{ $item->tgl_lahir }}</td>
                                    <td class="text-center">{{ $item->no_telp }}</td>
                                    <td>
                                     <div class="d-flex justify-content-center align-items-center">
                                      <a type="button" href="{{ route('participants.edit',$item-> id_participant) }}" class="mdc-button mdc-button--outlined shaped-button outlined-button--edit mdc-ripple-upgraded mx-2"> Edit </a>
                                      <form action="{{ route('participants.destroy', $item-> id_participant) }}" onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" method="POST">
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
                </div>
                <div class="container mt-5">
                  <div class="mdc-card">
                    <div class="d-flex justify-content-between align-items-center py-2 pb-4 ">
                        <h6 class="card-title card-padding pb-0">Data Member Presences</h6>
                    </div>
                    <div class="table-responsive">
                        <table id="order-listing2" class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Nama Member</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Waktu</th>
                                    <th class="text-center">Lokasi</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              @forelse ($presence as $itemss)
                                <tr>
                                    <td class="text-center">{{ $itemss->id_presence }}</td>
                                    <td class="text-center">{{ $itemss->user->name }}</td>
                                    <td class="d-flex align-items-center justify-content-center">
                                      {{ $itemss->date }}
                                    </td>
                                    <td class="text-center">
                                        {{ $itemss->time }}
                                    </td>
                                    <td class="text-center">
                                        {{ $itemss->location }}
                                    </td>
                                    <td>
                                     <div class="d-flex justify-content-center align-items-center">
                                      <form action="{{ route('participants.hapus', $itemss->id_presence) }}" onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" method="POST">
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