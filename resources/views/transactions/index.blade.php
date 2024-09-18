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
.price-wrapper{
  position: relative; 
  display: inline-block;
}

.price-slash{
  position: relative;
  width: 100%;
  height: 0;
  border-top: 1px solid red;
  top: 10px;
}

/* .price{ font-size: 10px;} */

</style>
<div class="page-wrapper mdc-toolbar-fixed-adjust">
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
              <div class="container">
                <div class="row mb-4">
                  <div class="mdc-card ">
                    <div class="d-flex justify-content-between align-items-center py-2 pb-4 ">
                        <h6 class="card-title card-padding pb-0">Data Transaction Pembayaran</h6>
                    </div>
                    <div class="table-responsive">
                        <table id="example1" class="table display">
                            <thead>
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Category</th>
                                    <th class="text-center">Detail</th>
                                    <th class="text-center">Total</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              @forelse ($transaction as $transactions)
                                <tr>
                                    <td class="text-center">
                                      {{ $transactions->id_transaction }}
                                    </td>
                                    <td class="text-center">{{ $transactions->user->name ?? 'No user found' }}</td>
                                    <td class="text-center">
                                      {{ $transactions->date }}
                                    </td>
                                    <td class="text-center">
                                      {{ $transactions->category }}
                                    </td>
                                    <td class="text-center">
                                        {{ $transactions->detail_transaction->detail ?? 'No Detail Found' }},
                                        {!! $transactions->voucher ? $transactions->voucher : '<i class="text-danger">TANPA VOUCHER</i>' !!}
                                    </td>
                                    
                                        <td class="text-center">
                                          <div class="price-wrapper">
                                            <div class="price-slash"></div>
                                            <div class="price"><small>{{ 'Rp ' . number_format($transactions->harga_asli, 0, ',', '.') }}</small></div>
                                          </div>
                                          <h5 class="fw-bold mt-1">{{ 'Rp ' . number_format($transactions->total, 0, ',', '.') }}</>
                                        </td>                                  
                                      
                                      <td class="text-center">
                                        @if ($transactions->status == 'declined')
                                            <div class="btn btn-danger rounded-pill">{{ $transactions->status }}</div>
                                        @elseif ($transactions->status == 'pending')
                                            <div class="btn btn-warning rounded-pill">{{ $transactions->status }}</div>
                                        @else
                                            <div class="btn btn-success rounded-pill">{{ $transactions->status }}</div>
                                        @endif
                                    </td>
                                    <td>
                                    <div class="d-flex justify-content-center align-items-center">
                                      <a type="button" data-bs-toggle="modal" data-bs-target="#EditModalM{{ $transactions->id_transaction }}" class="mdc-button mdc-button--outlined shaped-button outlined-button--edit mdc-ripple-upgraded mx-2"> Edit </a>
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
                                  <th class="text-center">Tanggal</th>
                                  <th class="text-center">Category</th>
                                  <th class="text-center">Detail</th>
                                  <th class="text-center">Total</th>
                                  <th class="text-center">Status</th>
                                  <th class="text-center">Actions</th>
                              </tr>
                          </tfoot>
                        </table>
                    </div>
                  </div> 
                </div>
                <div class="row">
                  <div class="mdc-card ">
                    <div class="d-flex justify-content-between align-items-center py-2 pb-4 ">
                        <h6 class="card-title card-padding pb-0">Data Transaction Trainer Sesi</h6>
                    </div>
                    <div class="table-responsive">
                        <table id="example2" class="table display">
                            <thead>
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Sesi</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Total Sesi</th>
                                    <th class="text-center">Jumlah Kehadiran</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @forelse ($transactionsesi as $transactionsesis)
                                <tr>
                                  <td class="text-center">{{ $transactionsesis->id_session }}</td>
                                    <td class="text-center">{{ $transactionsesis->user->name ?? 'No user found' }}</td>
                                    <td class="text-center">
                                      {{ $transactionsesis->hargasesi->name ?? 'Harga Sesi Not Found' }}
                                    </td>
                                    <td class="text-center">
                                      @if ($transactionsesis->status == 'non-active')
                                          <div class="btn btn-danger rounded-pill">{{ $transactionsesis->status }}</div>
                                      @elseif ($transactionsesis->status == 'pending')
                                          <div class="btn btn-warning rounded-pill">{{ $transactionsesis->status }}</div>
                                      @else
                                          <div class="btn btn-success rounded-pill">{{ $transactionsesis->status }}</div>
                                      @endif
                                    </td>
                                    <td class="text-center">
                                      {{ $transactionsesis->total_sesi }}
                                    </td>
                                    <td class="text-center">
                                      <div class="btn btn-secondary fw-bold">
                                        <small>{{ $transactionsesis->jumlah_kehadiran }}</small>
                                      </div>
                                    </td>
                                    <td class="text-center">
                                      <div class="d-flex justify-content-center align-items-center">
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#EditModal1{{ $transactionsesis->id_session }}" class="mdc-button mdc-button--outlined shaped-button outlined-button--edit mdc-ripple-upgraded mx-2"> Edit </a>
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
                                  <th class="text-center">Sesi</th>
                                  <th class="text-center">Status</th>
                                  <th class="text-center">Total Sesi</th>
                                  <th class="text-center">Jumlah Kehadiran</th>
                                  <th class="text-center">Action</th>
                              </tr>
                          </tfoot>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</main>  
@foreach ($transaction as $transactions)
    <div class="modal fade" id="EditModalM{{ $transactions->id_transaction }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data transaction</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="{{ route('transactions.update', $transactions->id_transaction) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="nama" class="fw-bold mt-3">Nama</label>
                <div class="input-group input-group-outline w-100">
                    <input type="text" value="{{ $transactions->user->name ?? 'No user found' }}" class="form-control" id="name" placeholder="Masukkan Nama" readonly>
                </div>  
                <label for="nama" class="fw-bold mt-3">Category</label>
                <div class="input-group input-group-outline w-100">
                    <input type="text" value="{{ old('category') ?? $transactions->category }}" name="category" class="form-control" id="no_rek" placeholder="Masukkan No Rekening" readonly>
                </div>   
                <label for="nama" class="fw-bold mt-3">Detail</label>
                <div class="input-group input-group-outline w-100">
                    <input type="text" value="{{ $transactions->detail_transaction->detail ?? 'No Detail Found' }} {!! $transactions->detail_transaction->voucher ? $transactions->detail_transaction->voucher : 'TANPA VOUCHER' !!}" class="form-control" id="name" placeholder="Masukkan Nama" readonly>
                </div>  
                <label for="nama" class="fw-bold mt-3">Harga Asli</label>
                <div class="input-group input-group-outline w-100">
                    <input type="text" value="{{ old('harga_asli') ?? $transactions->harga_asli }}" name="harga_asli" class="form-control" id="harga_asli" placeholder="Masukkan Harga Asli" @if ($transactions->status != "pending") readonly @endif>
                </div>  
                <label for="nama" class="fw-bold mt-3">Potongan</label>
                <div class="input-group input-group-outline w-100">
                    <input type="text" value="{{ old('potongan') ?? $transactions->potongan }}" name="potongan" class="form-control" id="potongan" placeholder="Masukkan Potongan Harga" @if ($transactions->status != "pending") readonly @endif>
                </div>  
                <label for="nama" class="fw-bold mt-3">Voucher</label>
                <div class="input-group input-group-outline w-100">
                    <input type="text" value="{{ old('voucher') ?? $transactions->voucher }}" name="voucher" class="form-control" id="voucher" placeholder="Masukkan Voucher Harga" readonly>
                </div>  
                <label for="nama" class="fw-bold mt-3">Total</label>
                <div class="input-group input-group-outline w-100">
                    <input type="text" value="{{ old('total') ?? $transactions->total }}" name="total" class="form-control" id="total" placeholder="Masukkan Total Harga" @if ($transactions->status != "pending") readonly @endif>
                </div>  
                <label for="nama" class="fw-bold mt-3">Metode</label>
                <div class="input-group input-group-outline w-100">
                    <input type="text" value="{{ $transactions->metode->name ?? 'No Metode found' }}" class="form-control" id="no_rek" placeholder="Masukkan No Rekening" readonly>
                </div>  
                <label for="nama" class="fw-bold mt-3">Foto</label>
                <div class="py-2" style="width: 300px; height: 200px">
                    <img class="w-100 h-100 object-fit-cover" src="{{  asset('storage/'.$transactions->picture) }}" alt="">
                </div> 
                <label for="nama" class="fw-bold mt-3">Status</label>
                <div class="input-group input-group-outline w-100">
                    <select class="form-control w-100" name="status" id="status">
                        <option value="" disabled selected>Masukkan status</option>
                        <option value="approved" {{ $transactions->status == 'approved' ? 'selected' : '' }}>Approved</option>
                        <option value="pending" {{ $transactions->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="declined" {{ $transactions->status == 'declined' ? 'selected' : '' }}>Declined</option>
                    </select>
                </div>  
                <button type="submit" class="btn btn-warning my-3">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endforeach   
@foreach ($transactionsesi as $transactionsesis)
    <div class="modal fade" id="EditModal1{{ $transactionsesis->id_session }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data transaction</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="{{ route('session_transactions.update', $transactionsesis->id_session) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT') 
                <label for="nama" class="fw-bold mt-3">Status</label>
                <div class="input-group input-group-outline w-100">                                      
                    <select class="form-control w-100" name="status" id="status">
                        <option value="" disabled selected>Masukkan status</option>
                        <option value="active" {{ $transactionsesis->status == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="pending" {{ $transactionsesis->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="non-active" {{ $transactionsesis->status == 'non-active' ? 'selected' : '' }}>Non-Active</option>
                    </select>
                </div>  
                <button type="submit" class="btn btn-warning my-3">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endforeach   
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

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/fixedheader/4.0.1/js/dataTables.fixedHeader.js"></script>
<script src="https://cdn.datatables.net/fixedheader/4.0.1/js/fixedHeader.dataTables.js"></script>
<script>
  new DataTable('#example1', {
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