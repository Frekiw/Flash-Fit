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
            height: 300px;
            width:100%;
        }
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
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1">
                  <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">
                        <i class="fa fa-home text-success"></i>
                    </a>
                  </li>
                  <li class="breadcrumb-item">
                    <a class="" href="{{ route('cmss.index') }}">Cms</a>
                  </li>
                  <li class="breadcrumb-item active text-secondary">
                    <i>Data Article</i>
                  </li>
                </ol>
            </nav>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Article</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="notes" class="fw-bold mt-3">Judul</label>
                            <div class="input-group input-group-outline">
                                <input class="form-control w-100" name="title" id="title" placeholder="Masukkan Narasi">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="nama" class="fw-bold mt-3">Thumbnail</label>
                            <div class="input-group input-group-outline w-100">
                                <input type="file" name="thumbnail" class="form-control" id="thumbnail" placeholder="Masukkan Gambar"
                                    required>
                            </div>    
                        </div>
                    </div>
                    <label for="notes" class="fw-bold mt-3">Konten</label>
                    <div class="w-100">
                      <textarea class="form-control" name="content" id="notes" placeholder="Masukkan Konten"></textarea>
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
                <div class="container">
                    <div class="w-100 d-flex justify-content-between align-items-center pb-4 ">
                      <div class="col-md-6">
                        <h4 class="card-title card-padding p-0 text-start fw-bold">Data Article</h4>
                      </div>
                      <div class="col-md-6">
                        <div class="d-flex justify-content-end align-items-center">
                          <a data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="btn btn-primary me-2 "><small><i class="fas fa-plus"></i></small></a>
                            <button class="btn btn-dark me-2 owl-prev"><small><i class="fas fa-chevron-left"></i></small></button>
                            <button class="btn btn-dark me-2 owl-next"><small><i class="fas fa-chevron-right"></i></small></button>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="owl-carousel owl-article">
                        @forelse ($article as $item)
                        <div class="item5">
                            <div class="col-md-3 mb-4 px-2 w-100">
                                <div class="rounded-4 card-trn">
                                    <div class="p-2">
                                        <div class="p-2">
                                          <div class="position-relative" style="width: 100%; height: 127px;">
                                            <img class=" w-100 h-100 object-fit-cover rounded-4" style="object-position: top;" src="{{  asset('storage/'.$item->thumbnail) }}" alt="">
                                            <div class="position-absolute rounded-4">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-12 pt-2 ps-2">
                                          <h6>{{ $item->title }}</h6>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="d-flex justify-content-start align-items-center test2">
                                            <div class="d-flex me-1 ps-2 ">
                                                <i class="fas fa-link" style="font-size: 0.7rem"></i>
                                                <small class="ms-1 text-primary"><a href="{{ $item->url }}">{{ $item->url }}</a></small>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-12 my-2">
                                          <a data-bs-toggle="modal" data-bs-target="#EditModal{{ $item->id_article }}" type="button" class="btn btn-success2 w-100">Edit</a>
                                        </div>
                                        <div class="col-md-12 my-2">
                                          <form class="w-100" action="{{ route('articles.destroy', $item->id_article) }}" onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" method="POST">
                                            {!! method_field('delete') . csrf_field() !!}
                                            <button class="btn btn-danger w-100">Delete</button>
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
                    <div class="row">
                        <div class="mdc-card">
                        <div class="d-flex justify-content-between align-items-center py-2 pb-4 ">
                            <h6 class="card-title card-padding pb-0">Data Articles</h6>
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table display">
                                <thead>
                                    <tr>
                                        <th class="text-center">Nomor</th>
                                        <th class="text-center">Judul</th>
                                        <th class="text-center">Thumbnail</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse ($article as $articles)
                                    <tr>
                                        <td class="text-center">{{ $articles->id_article }}</td>
                                        <td class="text-center">
                                        {{ $articles->title }}
                                        </td>
                                        <td class="text-center">
                                            <img class="rounded" style="width: 100%; object-fit:cover; height:60px" src="{{  asset('storage/'.$articles->thumbnail) }}" alt="">
                                        </td>
                                        <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#EditModal{{ $articles->id_article }}" class="mdc-button mdc-button--outlined shaped-button outlined-button--edit mdc-ripple-upgraded mx-2"> Edit </a>
                                        <form action="{{ route('articles.destroy',$articles->id_article) }}" onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" method="POST">
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
                                      <th class="text-center">Judul</th>
                                      <th class="text-center">Thumbnail</th>
                                      <th class="text-center">Actions</th>
                                  </tr>
                              </tfoot>
                            </table>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    @foreach ($article as $articles)
    <div class="modal fade" id="EditModal{{ $articles->id_article }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Article</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="{{ route('articles.update', $articles->id_article) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <label for="notes" class="fw-bold mt-3">Judul</label>
                        <div class="input-group input-group-outline">
                            <input class="form-control w-100" value="{{ old('title') ?? $articles->title }}" name="title" id="title" placeholder="Masukkan Narasi">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="nama" class="fw-bold mt-3">Thumbnail</label>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="col-md-6">
                                <div class="py-2" style="width: 210px; height: 110px">
                                    <img class="w-100 h-100 object-fit-cover" src="{{  asset('storage/'.$articles->thumbnail) }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline">
                                    <input type="file" name="thumbnail" class="form-control" id="thumbnail" placeholder="Masukkan Gambar">
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                
                <label for="notes" class="fw-bold mt-3">Konten</label>
                <div class="w-100">
                    <textarea class="form-control" name="content" id="notes2" value="{{ old('content') ?? $item->content }}" placeholder="Masukkan Konten">{{ $item->content }}</textarea>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/fixedheader/4.0.1/js/dataTables.fixedHeader.js"></script>
<script src="https://cdn.datatables.net/fixedheader/4.0.1/js/fixedHeader.dataTables.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
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
    $(document).ready(function(){
      var owl = $('.owl-article').owlCarousel({
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
  <script>
    document.addEventListener("DOMContentLoaded", function() {
   ClassicEditor
     .create(document.querySelector('#notes'))
     .catch(error => {
       console.error(error);
     });
 });
    document.addEventListener("DOMContentLoaded", function() {
   ClassicEditor
     .create(document.querySelector('#notes2'))
     .catch(error => {
       console.error(error);
     });
 });

</script>




</body>

<!-- Mirrored from demo.bootstrapdash.com/caroline/template/demo_1/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 03:20:08 GMT -->
</html>
@endsection