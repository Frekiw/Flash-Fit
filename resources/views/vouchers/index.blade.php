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
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Voucher</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('vouchers.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <label for="time" class=" mt-3">Discount</label>
                  <div class="input-group input-group-outline w-100">
                      <input type="text" name="discount" class="form-control" id="discount" placeholder="Masukkan Disocunt">
                  </div>
                  <label for="time" class=" mt-3">Code</label>
                  <div class="input-group input-group-outline w-100">
                      <input type="text" name="code" class="form-control" id="code" placeholder="Masukkan Code Voucher">
                  </div>
                  <label for="time" class=" mt-3">Tanggal Expired</label>
                  <div class="input-group input-group-outline w-100">
                      <input type="date" name="exp_date" class="form-control" id="no_telp" placeholder="Masukkan Tanggal Expired">
                  </div>
                  <label for="time" class=" mt-3">Detail</label>
                  <div class="input-group input-group-outline w-100">
                      <input type="text" name="detail" class="form-control" id="detail" placeholder="Masukkan Detail Voucher">
                  </div>
                  <button type="submit" class="btn btn-success my-3">Submit</button>
                </form>
            </div>
          </div>
        </div>
    </div>
  <main class="content-wrapper">
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="container">
                <div class="w-100 d-flex justify-content-between align-items-center pb-4 ">
                  <div class="col-md-6">
                    <h4 class="card-title card-padding p-0 text-start fw-bold">Data Trainer</h4>
                  </div>
                  <div class="col-md-6">
                    <div class="d-flex justify-content-end align-items-center">
                      <a href="{{ route('vouchers.create') }}" type="button" class="btn btn-primary me-2 "><small><i class="fas fa-plus"></i></small></a>
                        <button class="btn btn-dark me-2 owl-prev"><small><i class="fas fa-chevron-left"></i></small></button>
                        <button class="btn btn-dark me-2 owl-next"><small><i class="fas fa-chevron-right"></i></small></button>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="owl-carousel owl-voucher">
                    @forelse ($voucher as $item)
                    <div class="item5">
                      <div class="col-md-3 mb-4 px-2 w-100">
                        <div class="rounded-4 card-voucher">
                            <div class="p-2">
                                <div class="col-md-12">
                                  <h6 class="text-center text-white">Voucher</h6>
                                </div>
                                <div class="col-md-12 pt-1 ps-2">
                                  <h3 class="text-center text-white">{{ 'Rp ' . number_format($item->discount, 0, ',', '.') }}</h3>
                                </div>
                                <div class="col-md-12 pt-1 ps-2">
                                  <h6 class="text-center text-white">#{{ $item->code }}</h6>
                                </div>
                                <div class="col-md-12 py-1">
  
                                </div>
                                <div class="col-md-12 pt-2 ps-2" style="border-top: 2px dashed #ffffff;">
                                  <h6 class="text-center text-white pt-2">
                                    <div class="btn btn-secondary2 text-dark rounded-pill py-0 px-3">
                                      <small>{{ $item->exp_date }}</small>
                                    </div>
                                  </h6>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    @empty
                    @endforelse
                  </div>
                </div>
                <div class="row">
                  <div class="mdc-card">
                    <div class="d-flex justify-content-between align-items-center py-2 pb-4 ">
                        <h6 class="card-title card-padding pb-0">Data Voucher</h6>
                    </div>
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Discount</th>
                                    <th class="text-center">Code</th>
                                    <th class="text-center">Tanggal Expired</th>
                                    <th class="text-center">Detail</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              @forelse ($voucher as $item)
                                <tr>
                                    <td class="text-center">{{ $item->id_voucher }}</td>
                                    <td class="d-flex align-items-center justify-content-center">
                                      {{ $item->discount }}
                                    </td>
                                    <td class="text-center">
                                        {{ $item->code }}
                                    </td>
                                    <td class="text-center">
                                        {{ $item->exp_date }}
                                    </td>
                                    <td class="text-center">
                                        {{ $item->detail }}
                                    </td>
                                    <td>
                                    <div class="d-flex justify-content-center align-items-center">
                                      <a type="button" data-bs-toggle="modal" data-bs-target="#EditModal{{ $item->id_voucher }}" class="mdc-button mdc-button--outlined shaped-button outlined-button--edit mdc-ripple-upgraded mx-2"> Edit </a>
                                      <form action="{{ route('vouchers.destroy', $item->id_voucher) }}" onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" method="POST">
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
    </div>
</main>
@forelse ($voucher as $item)
<div class="modal fade" id="EditModal{{ $item->id_voucher }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Voucher</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form action="{{ route('vouchers.update', $item->id_voucher) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label for="time" class=" mt-3">Discount</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="text" value="{{ old('discount', $item->discount) }}" name="discount" class="form-control" id="discount" placeholder="Masukkan Nama">
                    </div>
                    <label for="time" class=" mt-3">Code</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="text" value="{{ old('code', $item->code) }}" name="code" class="form-control" id="code" placeholder="Masukkan Code Voucher">
                    </div>
                    <label for="time" class=" mt-3">Tanggal Expired</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="date" value="{{ old('exp_date', $item->exp_date) }}" name="exp_date" class="form-control" id="no_telp" placeholder="Masukkan Tanggal Expired">
                    </div>
                    <label for="time" class=" mt-3">Detail</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="text" value="{{ old('detail', $item->detail) }}" name="detail" class="form-control" id="detail" placeholder="Masukkan Detail Voucher">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
  $(document).ready(function(){
      var owl = $('.owl-voucher').owlCarousel({
          items: 4, // Show four items at a time
          loop: true, // Loop through items
          responsiveClass: true,
          nav: false,
          responsive: {
              0: {
                  items: 1, // Show 1 item on very small screens
              },
              600: {
                  items: 2, // Show 2 items on small screens
              },
              1000: {
                  items: 4, // Show 4 items on large screens
              }
          }
      });

      $('.owl-prev').click(function() {
          owl.trigger('prev.owl.carousel');
      });

      $('.owl-next').click(function() {
          owl.trigger('next.owl.carousel', [300]);
      });
  });
</script>

</body>

<!-- Mirrored from demo.bootstrapdash.com/caroline/template/demo_1/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 03:20:08 GMT -->
</html>
@endsection