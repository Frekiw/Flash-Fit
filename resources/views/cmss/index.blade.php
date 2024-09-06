@extends('layouts.admin_master')
@section('admincontent')
        <!-- partial -->
          <div class="page-wrapper mdc-toolbar-fixed-adjust">
            <main class="content-wrapper">
              <div class="container">
                <div class="row my-3">
                    <div class="col-md-3">
                        <div class="card cbody1 rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="background-color: #c1ee96;width:40px;height:40px">
                                        <i class="fas fa-newspaper fs-5" style="color: #7cbc1b;" aria-hidden="true"></i>
                                    </div>
                                    <h4 class="fw-bold ms-2 mb-0">Article</h4>
                                </div>
                                <div class="d-flex justify-content-between align-items-center pt-3 py-1">
                                    <small>Total Data</small>
                                    <h5 class="fw-bold">@if($totalArticles > 10)
                                        10+
                                    @else
                                        {{ $totalArticles }}
                                    @endif</h5>
                                </div>
                                <div class="pt-1 d-flex justify-content-center align-items-center mt-2">
                                    <a href="{{ route('articles.index') }}" type="button" class="text-center py-1 border-1 border-secondary border w-100 rounded-pill vdet"><small>View Detail<i class="fas fa-arrow-right ms-2" aria-hidden="true"></i></small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card cbody2 rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="background-color: #a9ff59;width:40px;height:40px">
                                        <i class="fas fa-image fs-5" style="color: #315200;" aria-hidden="true"></i>
                                    </div>
                                    <h4 class="fw-bold ms-2 mb-0">Banner</h4>
                                </div>
                                <div class="d-flex justify-content-between align-items-center pt-3 py-1">
                                    <small>Total Data</small>
                                    <h5 class="fw-bold">@if($totalBanners > 10)
                                        10+
                                    @else
                                        {{ $totalBanners }}
                                    @endif</h5>
                                </div>
                                <div class="pt-1 d-flex justify-content-center align-items-center mt-2">
                                    <a href="{{ route('banners.index') }}" type="button" class="text-center py-1 border-1 border-secondary border w-100 rounded-pill vdet"><small>View Detail<i class="fas fa-arrow-right ms-2" aria-hidden="true"></i></small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card cbody3 rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="background-color: #7bff00;width:55px;height:40px">
                                        <i class="fas fa-file-alt fs-5" style="color: #578a00;" aria-hidden="true"></i>
                                    </div>
                                    <h4 class="fw-bold ms-2 mb-0  fpp">Terms And Conditions</h4>
                                </div>
                                <div class="d-flex justify-content-between align-items-center pt-3 py-1">
                                    <small>Total Data</small>
                                    <h5 class="fw-bold">@if($totalTncs > 10)
                                        10+
                                    @else
                                        {{ $totalTncs }}
                                    @endif</h5>
                                </div>
                                <div class="pt-1 d-flex justify-content-center align-items-center mt-2">
                                    <a href="{{ route('tncs.index') }}" type="button" class="text-center py-1 border-1 border-secondary border w-100 rounded-pill vdet"><small>View Detail<i class="fas fa-arrow-right ms-2" aria-hidden="true"></i></small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card cbody4 rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="background-color: #4f8100;width:40px;height:40px">
                                        <i class="fas fa-cog fs-5" style="color: #AFE17D" aria-hidden="true"></i>
                                    </div>
                                    <h4 class="fw-bold ms-2 mb-0">Setting</h4>
                                </div>
                                <div class="d-flex justify-content-between align-items-center pt-3 py-1">
                                    <small>Total Data</small>
                                    <h5 class="fw-bold">@if($totalSettings > 10)
                                        10+
                                    @else
                                        {{ $totalSettings }}
                                    @endif</h5>
                                </div>
                                <div class="pt-1 d-flex justify-content-center align-items-center mt-2">
                                    <a href="{{ route('settings.index') }}" type="button" class="text-center py-1 border-1 border-secondary border w-100 rounded-pill vdet"><small>View Detail<i class="fas fa-arrow-right ms-2" aria-hidden="true"></i></small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    @foreach ($article as $atcl)
                    <div class="col-md-8">
                        <div class="card h-100">
                            <div class="card-body">
                              <div class="" style="width: 100%; height: 200px" >
                                <img class="rounded-4 align-self-center" src="{{  asset('storage/'.$atcl->thumbnail) }}" alt="Card girl image" style="width: 100%; height:100%; object-fit:cover;">
                              </div>
                              <h4 class="mt-4 fw-bold">{{ $atcl->title }}</h4>
                              <div class="text-secondary kllp lh-1">{!! $atcl->content !!}</div>
                              <div class="row mb-4 mt-3 g-3">
                                <div class="col-6">
                                  <div class="d-flex align-items-center">
                                    <div class="me-2 bg-success d-flex justify-content-center align-items-center rounded-4" style="width: 45px;height:45px;">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                      <h6 class="mb-0 lh-1 fw-bold">Created At</h6>
                                      <small class="lh-1 fw-light">{{ date('Y-m-d', $atcl->created_at) }}</small>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-6">
                                  <div class="d-flex align-items-center">
                                    <div class="me-2 bg-success d-flex justify-content-center align-items-center rounded-4" style="width: 45px;height:45px;">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div>
                                      <h6 class="mb-0 lh-1 fw-bold">Published By</h6>
                                      <small class="lh-1 fw-light">AnakTampan</small>
                                    </div>
                                  </div>
                                </div>
                                
                              </div>
                              <div class="col-12 text-center">
                                <a href="{{ route('articles.index') }}" class="btn btn-success px-5 d-grid">Lihat Semua Article</a>
                              </div>
                            </div>
                          </div>
                    </div>
                    @endforeach

                    <div class="col-md-4">
                        <div class="card h-100">
                          <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0 me-2">Data Article</h5>
                          </div>
                          @foreach ($article2 as $atcl2)
                          <div class="card-body">
                                <div class="d-flex justify-content-start align-items-center w-100">
                                    <div class="col-md-3">
                                        <div class="" style="width:50px;height:50px;">          
                                            <img src="{{  asset('storage/'.$atcl2->thumbnail) }}" style="width: 100%; height:100%; object-fit:cover;" class="rounded-4" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="me-2">
                                          <h6 class="mb-1 w-100">{{ $atcl2->title }}</h6>
                                          <p class="mb-0">{{ date('Y-m-d', $atcl2->created_at) }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a href="{{ route('articles.index') }}" class="btn btn-success"><i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                          </div>
                          @endforeach
                        </div>
                    </div>
                    
                </div>
              </div>
            </main>
            <!-- partial:partials/_footer.html -->
            <footer>
            <div class="mdc-layout-grid">
              <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                  <span class="tx-14"
                    >Copyright © 2024
                    <a href="javascript:void(0)" target="_blank">Flash Fit</a>. All
                    rights reserved.</span>
                </div>
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex justify-content-end">
                  <div class="d-flex align-items-center">
                    <a href="#">Documentation</a>
                    <span class="vertical-divider"></span>
                    <a href="#">FAQ</a>
                  </div>
                </div>
              </div>
            </div>
          </footer>

            <!-- partial -->
          </div>
        </div>
    </div>


      

    <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- plugins:js -->
<script src="{{ asset('admindashboard/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->

<!-- Plugin js for this page-->
<script src="{{ asset('admindashboard/assets/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admindashboard/assets/vendors/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
<!-- End plugin js for this page-->

<!-- inject:js -->
<script src="{{ asset('admindashboard/assets/js/material.js') }}"></script>
<script src="{{ asset('admindashboard/assets/js/misc.js') }}"></script>
<!-- endinject -->

<!-- Custom js for this page-->
<script src="{{ asset('admindashboard/assets/js/dashboard.js') }}"></script>
<!-- End custom js for this page-->

<!-- jQuery (necessary for the carousel plugin) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Owl Carousel JS (assuming you need this for the carousel functionality) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>
</html>

@endsection
